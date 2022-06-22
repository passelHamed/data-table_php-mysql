<?php

require_once("connection.php");

$delete = new database1();


if (isset($_GET['id']) && isset($_GET['cmd'])){
    if ($_GET['cmd'] == "delete"){
        $delete->setId($_GET['id']);
        $delete->delete();
        echo "<script>alert('data deleted successfully');document.location='index.php'</script>";
    }
}


