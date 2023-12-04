<?php
include("connect.php");
if(isset($_POST["create"])){
    $title = mysqli_real_escape_string($conn, $_POST["title"]);
    $author = mysqli_real_escape_string($conn, $_POST["author"]);
    $type = mysqli_real_escape_string($conn, $_POST["type"]);
    $description = mysqli_real_escape_string($conn, $_POST["description"]);
    $sql = "INSERT INTO books (title, author, type, description) VALUES ('$title', '$author', '$type', '$description')";
    if (mysqli_query($conn, $sql)){
        session_start();
        $_SESSION["create"] = "Book Created Successfully";
        header("Location:index.php");
    }else{
        die("Insert failed");
    }
} elseif(isset($_POST["update"])){
    $id = $id = $_GET["id"] ;
    $title = mysqli_real_escape_string($conn, $_POST["title"]);
    $author = mysqli_real_escape_string($conn, $_POST["author"]);
    $type = mysqli_real_escape_string($conn, $_POST["type"]);
    $description = mysqli_real_escape_string($conn, $_POST["description"]);
    $sql = "UPDATE books 
                set title ='$title'
                ,author = '$author'
                ,type = '$type'
                ,description = '$description'
                Where id = '$id'";
    if (mysqli_query($conn, $sql)){
        session_start();
        $_SESSION["update"] = "Book Updated Successfully";
        header("Location:index.php");
    }else{
        die("Update failed");
    }
    } elseif(isset($_POST["delete"])){
        $id = $id = $_GET["id"] ;
        $sql = "DELETE FROM books Where id = '$id'";
        if (mysqli_query($conn, $sql)){
            session_start();
            $_SESSION["delete"] = "Book Deleted Successfully";
            header("Location:index.php");
        }else{
            die("Delete failed");
        }
        }      
?>