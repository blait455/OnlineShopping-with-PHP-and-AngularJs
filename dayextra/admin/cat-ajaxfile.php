<?php 
include('../confs/config.php');

$id = $_POST['id'];

// Delete record
$query = "DELETE FROM categories WHERE cat_id=".$id;
mysqli_query($mysqli,$query);

echo 1;