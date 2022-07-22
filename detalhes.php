<?php
session_start();
ob_start();
include_once './connection.php';

$id = filter_input(INPUT_GET, "id_usuario", FILTER_SANITIZE_NUMBER_INT);

if (empty($id)) {
    $_SESSION['msg'] = "<p style='color: #f00;'>Erro: Usuário não encontrado!</p>";
    header("Location: lista.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Detalhes</title>
    </head>
    <body>
        <a href="lista.php">Listar</a><br>
        <a href="cadastrar.php">Cadastrar</a><br>

        <h1>Detalhes</h1>

        <?php
        $query_usuario = "SELECT id, nome, email FROM usuarios WHERE id = $id LIMIT 1";
        $result_usuario = $conn->prepare($query_usuario);
        $result_usuario->execute();

        if (($result_usuario) AND ($result_usuario->rowCount() != 0)) {
            $row_usuario = $result_usuario->fetch(PDO::FETCH_ASSOC);
            //var_dump($row_usuario);
            extract($row_usuario);
            //echo "ID: " . $row_usuario['id'] . "<br>";            
            echo "ID: $id <br>";
            echo "Nome: $nome <br>";
            echo "E-mail: $email <br>";
        } else {
            $_SESSION['msg'] = "<p style='color: #f00;'>Erro: Usuário não encontrado!</p>";
            header("Location: lista.php");
        }
        ?>
    </body>
</html>
