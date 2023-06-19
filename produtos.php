<?php require("./includes/conexao.php"); ?>

<?php include('./menu_rodape/menu.html');
?>

<main class="container">

    <h1 class="h3 text-center p-3">Motos</h1>

    <hr class="mt-0 mb-5">
    <div class="d-flex justify-content-around">


        <div class=" bg-white  col-12 col-md-3  ">


            <ul class="list-group text-primary   ">
                <h2 class="h3 py-3">Categorias</h2>

                <li class=" list-group-item d-flex justify-content-between align-items-center" onclick="exibir_categoria('todos')">
                    Todos
                    <span class="badge badge-primary badge-pill">12</span>
                </li>

                <li class="list-group-item d-flex justify-content-between align-items-center" onclick="exibir_categoria('honda')">
                    Honda
                    <span class="badge badge-primary badge-pill">3</span>
                </li>

                <li class="list-group-item d-flex justify-content-between align-items-center" onclick="exibir_categoria('Yamaha')">
                    yamaha
                    <span class="badge badge-primary badge-pill">3</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center" onclick="exibir_categoria('Ducati')">
                    Ducati
                    <span class="badge badge-primary badge-pill">2</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center" onclick="exibir_categoria('Harley Davidson')">
                    Harley Davidson
                    <span class="badge badge-primary badge-pill">2</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center" onclick="exibir_categoria('Kawasaki')">
                    Kawasaki
                    <span class="badge badge-primary badge-pill">2</span>
                </li>
            </ul>
        </div>

        <div class=" bg-white  col-12 col-md-9  d-flex  flex-wrap">
            <?php
            $sql = "select * from produto";
            $result = $conexao->query($sql);

            if ($result->num_rows > 0) {
                while ($rows = $result->fetch_assoc()) {

            ?>


                    <div class="card col-md-6 col-lg-4 container_items" id="<?php echo $rows['nome']; ?>" style="width: 10rem;">
                        <img class="card-img-top img-fluid" src="<?php echo $rows['imagem']; ?>" onclick="destaque(this)" onmousemove="exibirborda(this)" onmouseout="retirarborda(this)">

                        <hr class="mt-2 mb-1">
                        <h3 class="h5 text-primary "><?php echo $rows['descricao']; ?></h3>
                        <hr class="mt-2 mb-1">
                        <div class="text-muted"><del>R$ <?php echo $rows['preco'];  ?></del></div>
                        <div class="h4  text-danger">R$ <?php echo $rows['preco_final']; ?></div>

                        <a href="pedidos.php" class="btn btn-primary">Comprar</a>

                    </div>

            <?php
                }
            } else {
                echo "Nenhum produto cadastrado !";
            }
            mysqli_close($conexao);
            ?>

        </div>

    </div>

</main>

<?php
include('./menu_rodape/rodape.html');
?>