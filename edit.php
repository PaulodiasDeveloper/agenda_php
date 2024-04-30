<?php
global $BASE_URL;
include_once("templates/header.php")
?>
    <div class="container">
        <?php include_once("templates/backbtn.html") ?>
        <h1 id="main-title">Editar Contato</h1>
        <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="post">
            <input type="hidden" name="type" value="edit">
            <input type="hidden" name="id" value="<?= $contact['id'] ?>">
            <div class="form-group">
                <label for="name">Nome do Contato:</label>
                <input type="text" class="form-control mt-2" id="name" name="name" value="<?= $contact['name'] ?>" placeholder="Digite o nome" required>
            </div>
            <div class="form-group mt-2">
                <label for="phone">Telefone do contato:</label>
                <input type="text" class="form-control mt-2" id="phone" name="phone" value="<?= $contact['phone'] ?>" placeholder="Digite o telefone" required>
            </div>
            <div class="form-group mt-2">
                <label for="observations">Observações:</label>
                <textarea type="text" class="form-control mt-2" id="observations" name="observations" placeholder="Insira as observações" rows="3"><?= $contact['observations'] ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Atualizar</button>
        </form>
    </div>
<?php
include_once("templates/footer.php")
?>