<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Edit Book</title>
</head>
<body>
<?php
    include("connect.php");
    $id = $_GET["id"] ;
    $sql = "SELECT * FROM books WHERE id= '$id' ";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result)
                        
?>

    <div class="container">
        <header class="d-flex justify-content-between my-4">
            <h1>Edit Book</h1>
            <div>
                 <a href="index.php" class="btn btn-primary">Back</a>
            </div>
        </header>
        <form action="process.php?id=<?php echo $row["id"]; ?>" method="post">
            <div class="form-element my-4">
                <input type="text" class="form-control" name="title" value="<?php echo $row["title"]; ?>">
            </div>
            <div class="form-element my-4">
                <input type="text" class="form-control" name="author" value="<?php echo $row["author"]; ?>">
            </div>
            <div class="form-element my-4">
                <select name="type">
                    <option value=""><?php echo $row["type"]; ?></option>
                    <option value="Adventure">Adventure</option>
                    <option value="Fantasy">Fantasy</option>
                    <option value="SciFi">SciFi</option>
                    <option value="Horror">Horror</option>
                </select>
            </div>
            <div class="form-element my-4">
                <input type="text" class="form-control" name="description" value="<?php echo $row["description"]; ?>">
            </div>
            <div class="form-element my-4">
                <input type="submit" class="btn btn-success" name="update" value="Save Changes">
            </div>            
        </form>    
    </div>

</body>
</html>