<?php
global $BASE_URL;
include_once("templates/header.php")
?>
    <div class="container">
        <?php include_once("templates/backbtn.html") ?>
        <h1 id="main-title">Criar Contato</h1>
        <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="post">
            <input type="hidden" name="type" value="create">
            <div class="form-group">
                <label for="name">Nome do Contato:</label>
                <input type="text" class="form-control mt-2" id="name" name="name" placeholder="Digite o nome" required>
            </div>
            <div class="form-group mt-2">
                <label for="phone">Telefone do contato:</label>
                <input type="text" class="form-control mt-2" id="phone" name="phone" placeholder="Digite o telefone" required>
            </div>
            <div class="form-group mt-2">
                <label for="observations">Observações:</label>
                <textarea type="text" class="form-control mt-2" id="observations" name="observations" placeholder="Insira as observações" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Cadastrar</button>
        </form>
    </div>
<?php
include_once("templates/footer.php")
?>