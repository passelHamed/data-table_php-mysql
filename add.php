<?php


if ($_SERVER['REQUEST_METHOD'] == "POST"){

    require_once "connection.php";

    $data = new database1();

    $data->setFistName($_POST['fname']);
    $data->setLastName($_POST['lname']);
    $data->setAddress($_POST['address']);
    $data->insert();
    echo "<script>alert('data saved successfully');document.location='index.php'</script>";


    

}


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
<body class="color">

    <form method="POST">
        <div class="sign w-50 m-auto mt-5">
            <div class="form-group">
                <label for="fname">First Name :</label>
                <input type="text" id="fname" name="fname" placeholder="Your Name.." class="form-control mt-2 mb-2" required>
            </div>
            <div class="form-group">
                <label for="lname">Last Name :</label>
                <input type="text" id="lname" name="lname" placeholder="Your Last Name.." class="form-control mt-2 mb-2" required>
            </div>
            <div class="form-group">
                <label for="address">Your Address :</label>
                <input type="text" id="address" name="address" placeholder="Your Address.." class="form-control mt-2 mb-3" required>
            </div>
            <button type="submit" name="save" class="save btn btn-success">save</button>
        </div>
    </form>






    <script src="../../../library/Bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>