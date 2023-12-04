<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Book Details</title>
</head>
<body>
    <div class="container">
        <header class="d-flex justify-content-between my-4">
            <h1>List Book</h1>
            <div>
                 <a href="index.php" class="btn btn-primary">Back</a>
            </div>
        </header>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Type</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include("connect.php");
                    $id = $_GET["id"] ;
                    $sql = "SELECT * FROM books WHERE id= '$id' ";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_array($result)
                        ?>
                            <tr>
                                <td><?php echo $row["id"]; ?></td>
                                <td><?php echo $row["title"]; ?></td>
                                <td><?php echo $row["author"]; ?></td>
                                <td><?php echo $row["type"]; ?></td>
                                <td><?php echo $row["description"]; ?></td>
                                <td>
                                    <a href="" class="btn btn-info">Read More</a>
                                    <a href="" class="btn btn-warning">Edit</a>
                                    <a href="" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        <?php
                ?>
            </tbody>
        </table>
    </div>
    
</body>
</html>