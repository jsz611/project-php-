<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "fullstackmotos";

$conexao = mysqli_connect($servername, $username, $password, $database);

if (!$conexao) {
    die("Falhou a conexão" . mysqli_connect_error());
}
if (isset($_POST['nome']) && isset($_POST['msg'])) {
    $nome = $_POST['nome'];
    $msg = $_POST['msg'];



    $sql = "insert into comentario (nome,msg) values ('$nome','$msg')";
    $result = $conexao->query($sql);
}


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <script src="js/funcoes.js"></script>
    <title>Contato</title>

</head>

<body>

    <!--início do Menu-->
    <?php
    include('./menu_rodape/menu.html');
    ?>


    <!--fim do Menu-->
    <!--título da págna início-->
    <main>
        <!--título da págna início-->
        <div class="main_titulo">
            <h2>Entre em contato</h2>
        </div>
        <hr>
        <!--título da págna fim-->
        <div class="contatos_imagem">
            <table style="width:100%;text-align:center">
                <tr>
                    <td>
                        <img style="width:60px" src="img/email.png" alt="">
                        contato@fullStackMotos.com.br
                    </td>

                    <td>
                        <img style="width:60px" src="img/whatsapp.png" alt="">
                        (11) 9 5088-6634
                    </td>
                </tr>
            </table>

        </div>

        <hr>




        <form method="POST" action="" target="_self" style="color:rgb(5, 55, 55); width: 50%;">
            <label>Nome:</label>
            <input type=" text" name="nome" placeholder="Digite seu nome: "></input> <br> <br>

            <label>Mensagem:</label><br> <br>
            <textarea name="msg" rows="10" cols="30" placeholder="Digite sua mensagem: "></textarea>
            <br>
            <br>
            <input type="submit" name="submit" value="Enviar">
        </form>
        <br> <br>
        <label>Comentários:</label>
        <br> <br>
        <div style="color:rgb(5, 55, 55); width: 30%; border: solid; padding: 10px;">

            <?php
            $sql = "select * from comentario";
            $result = $conexao->query($sql);

            if ($result->num_rows > 0) {
                while ($rows = $result->fetch_assoc()) {
                    echo "Nome: ", $rows['nome'], "<br>";
                    echo "Mensagem: ", $rows['msg'], "<br>";
                    echo "Data: ", $rows['data'], "<br>";
                    echo "<hr>";
                }
            } else {
                echo "Nenhum comentário !";
            } ?>

        </div>



    </main>
    <hr>
    <br>
    <br>

    <!--rodapé-->
    <?php
    include('./menu_rodape/rodape.html');
    ?>


</body>

</html>

<?php
mysqli_close($conexao);
?>