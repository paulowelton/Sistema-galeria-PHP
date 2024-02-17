<?php
require_once 'conexao.php';

$sql = "SELECT * FROM informacoes";

$query = mysqli_query($conn, $sql);


?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="issets/style.css">
    <title>galeria</title>
    <img src="" alt="">
   
</head>
<body>
    <section class="imagens">
        <div class="conteiner">
           <?php
                if(mysqli_num_rows($query) > 0){
                    while($row = mysqli_fetch_assoc($query)){
                        echo "<h1>" .$row['titulo'] ."</h1>";
                        echo "<label>" .$row['descricao'] ."</label>";
                        echo "<img class='img' src='" .$row['img'] ."'" .">";
                    }
                }
           ?>
        </div>
    </section>
    
</body>
</html>