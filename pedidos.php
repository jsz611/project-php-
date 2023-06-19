<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "fullstackmotos";

$conexao = mysqli_connect($servername, $username, $password, $database);

if (!$conexao) {
    die("Falhou a conexão" . mysqli_connect_error());
}
if (
    isset($_POST['nome_cliente']) && isset($_POST['endereco']) && isset($_POST['telefone']) &&
    isset($_POST['nome_produto']) && isset($_POST['valor_unitario']) && isset($_POST['quantidade']) &&
    isset($_POST['valor_total'])
) {
    $nome_cliente = $_POST['nome_cliente'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];
    $nome_produto = $_POST['nome_produto'];
    $valor_unitario = $_POST['valor_unitario'];
    $quantidade = $_POST['quantidade'];
    $valor_total = $_POST['valor_total'];


    $sql = "insert into tb_pedido (nome_cliente, endereco, telefone, nome_produto, valor_unitario, quantidade,
        valor_total)
         values
         ('$nome_cliente',' $endereco', ' $telefone','$nome_produto', '$valor_unitario', '$quantidade',
        '$valor_total')";


    $result = $conexao->query($sql);
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" type="text/css" href="css/estilo.css" />
    <script src="js/funcoes.js"></script>
    <title>Pedidos</title>
</head>

<body>
    <!--início do Menu-->
    <?php
    include('./menu_rodape/menu.html');
    ?>

    <!--fim do Menu-->
    <main>
        <!--título da págna início-->
        <div class="main_titulo">
            <h2>Faça seu pedido</h2>
        </div>
        <hr />
    </main>
    <div class=" bloco_pedido">

        <form method="POST" action="">
            <label>Nome:</label>
            <input type=" text" name="nome_cliente" placeholder="Digite seu nome: "></input> <br> <br>
            <label>Endereco:</label>
            <input type=" text" name="endereco" placeholder="Digite seu endereco: "></input> <br> <br>
            <label>Telefone:</label>
            <input type=" text" name="telefone" placeholder="Digite seu telefone: "></input> <br> <br>
            <label>produto:</label>
            <input type=" text" name="nome_produto" placeholder="Digite seu nome produto: "></input> <br> <br>
            <label>valor unitario:</label>
            <input type=" text" name="valor_unitario" placeholder="Digite seu valor unitario: "></input> <br> <br>
            <label>quantidade:</label>
            <input type=" text" name="quantidade" placeholder="Digite seu Quantidade: "></input> <br> <br>
            <label>valor gittotal:</label>
            <input type=" text" name="valor_total" placeholder="Digite seu Valor total: "></input> <br><br>
            <div class="botão_formulario_venda">
                <input type="submit" name="submit" value="Enviar" ">
                </div>
            </form>
    
        <div class=" mostrar_formulario_pedido">
                <div class=" label_motrar_pedido">
                    <label>Mostrar Pedidos:</label>
                </div>

                <?php
                $sql = "select * from tb_pedido";
                $result = $conexao->query($sql);

                if ($result->num_rows > 0) {
                    while ($rows = $result->fetch_assoc()) {
                        echo "Nome: ", $rows['nome_cliente'], "<br>";
                        echo "Endereço: ", $rows['endereco'], "<br>";
                        echo "telefone: ", $rows['telefone'], "<br>";
                        echo "Produto: ", $rows['nome_produto'], "<br>";
                        echo "Valor unitario: ", $rows['valor_unitario'], "<br>";
                        echo "Quantidade: ", $rows['quantidade'], "<br>";
                        echo "valor total: ", $rows['valor_total'], "<br>";
                        echo "Data: ", $rows['data'], "<br>";
                        echo "<hr>";
                    }
                } else {
                    echo "Nenhum pedido !";
                } ?>

                </>
            </div>
    </div>
    <BR>
    <hr>
    <!--rodapé-->
    <?php
    include('./menu_rodape/rodape.html');
    ?>

</body>

</html>

<?php
mysqli_close($conexao);
?>