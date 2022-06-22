<?php
require_once ("connection.php");

$data = new database1();
$allData = $data->fetchAll();



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add data</title>
    <link rel="stylesheet" href="../../../library/Bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="main.css">
</head>
<body>
    


    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center mt-4">
                <div>
                    <h2>List Of All Records</h2>
                    <a href="add.php" type="submit" class="btn btn-success mt-2">add New</a>
                </div>
            </div>
        </div>
    </div>

    <center>
        <div class="mt-5">
            <table class="table table-striped table-dark" style="width: 70%;">
                <tr class="w-100 text-center">
                    <th>FirstName</th>
                    <th>LastName</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>

                <?php
                    foreach ($allData as $key => $value ){
                ?>
                <tr class="text-center">
                    <td><?=$value['firstname'];  ?></td>
                    <td><?=$value['lastname']; ?></td>
                    <td><?=$value['address']; ?></td>
                    <td>
                        <a href="delete.php?id=<?=$value['id']?>&cmd=delete" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </center>






<script src="../../../library/Bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>