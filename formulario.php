<?php
require_once 'conexao.php';

if(isset($_FILES['imagem']) && !empty($_FILES['imagem'])){
    $user = $_POST['user'];
    $titulo = $_POST['titulo'];
    $descricao = $_POST['desc'];
    $arquivo = $_FILES['imagem'];

    $local = "./img/";
    $novoNome = uniqid();
    $extensao = strtolower(pathinfo($arquivo['name'], PATHINFO_EXTENSION));
    $path = $local.$novoNome.".".$extensao;

    // if($extensao != 'png' && $extensao != 'jpg' && $extensao != 'jpeg'){
    //     die("formato de arquivo nao permitido");
    // }

    move_uploaded_file($_FILES['imagem']['tmp_name'],$path);

    $sql = "INSERT INTO informacoes (user, titulo, descricao, img) VALUES ('$user', '$titulo', '$descricao', '$path')";

    
    $res = mysqli_query($conn, $sql);

    if($res == 1){
        header("location: index.php");
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
    <link rel="stylesheet" href="issets/form.css">
</head>
<body>
    <div class="vapo">
    <form action="" method="post" enctype="multipart/form-data">
        <h1>formulario galeria</h1>
    usuario: <input type="text" name="user"> </p>
    titulo: <input type="text" name="titulo"> </p>
    descricao: <input type="text" name="desc"> </p>
    imagem: <input type="file" name="imagem">
    <button name="enviar">Enviar</button>
    </form>
    </div>
</body>
</html>