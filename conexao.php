<?php
$server = "localhost";
$user = "root";
$password = "123456";
$dbanme = "upload";

$conn = new mysqli($server,$user,$password,$dbanme);

if($conn->connect_error){
    echo "conexao falha";
}
?>