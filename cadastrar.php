<?php
include_once './connection.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastrar</title>
    </head>
    <body>
        <h1>Cadastrar</h1>
        <?php
        //Receber os dados do formulário
        $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

        //Verificar se o usuário clicou no botão
        if (!empty($dados['CadUsuario'])) {
            //var_dump($dados);

            $empty_input = false;

            $dados = array_map('trim', $dados);
            if (in_array("", $dados)) {
                $empty_input = true;
                echo "<p style='color: #f00;'>Erro: Necessário preencher todos campos!</p>";
            } elseif (!filter_var($dados['email'], FILTER_VALIDATE_EMAIL)) {
                $empty_input = true;
                echo "<p style='color: #f00;'>Erro: Necessário preencher com e-mail válido!</p>";
            }

            if (!$empty_input) {
                $query_usuario = "INSERT INTO usuarios (nome, email) VALUES (:nome, :email) ";
                $cad_usuario = $conn->prepare($query_usuario);
                $cad_usuario->bindParam(':nome', $dados['nome'], PDO::PARAM_STR);
                $cad_usuario->bindParam(':email', $dados['email'], PDO::PARAM_STR);
                $cad_usuario->execute();
                if ($cad_usuario->rowCount()) {
                    echo "<p style='color: green;'>Usuário cadastrado com sucesso!</p>";
                    unset($dados);
                } else {
                    echo "<p style='color: #f00;'>Erro: Usuário não cadastrado com sucesso!</p>";
                }
            }
        }
        ?>
        <form name="cad-usuario" method="POST" action="">
            <label>Nome: </label>
            <input type="text" name="nome" id="nome" placeholder="Nome completo" value="<?php
            if (isset($dados['nome'])) {
                echo $dados['nome'];
            }
            ?>"><br><br>

            <label>E-mail: </label>
            <input type="email" name="email" id="email" placeholder="Seu melhor e-mail" value="<?php
            if (isset($dados['email'])) {
                echo $dados['email'];
            }
            ?>"><br><br>

            <input type="submit" value="Cadastrar" name="CadUsuario">
        </form>
    </body>
</html>
