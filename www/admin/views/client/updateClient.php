<h1>Alterando Cliente</h1>
<form class="form" action="?controller=client&action=updateClientAction&id=<?= $client['idClient'] ?>" method="post" enctype='multipart/form-data'>
    <div class="mb-3 mt-3">
        <label class="form-label">Nome</label>
        <input name="name" class="form-control" type="text" value="<?= $client['name'] ?>">
    </div>
    <div class="mb-3 mt-3">
        <label class="form-label">Email</label>
        <input name="email" class="form-control" type="email" value="<?= $client['email'] ?>">
    </div>
    <div class="mb-3 mt-3">
        <label class="form-label">Telefone</label>
        <input name="phone" class="form-control" type="text" value="<?= $client['phone'] ?>">
    </div>
    <div class="mb-3 mt-3">
        <label class="form-label">Endereço</label>
        <input name="address" class="form-control" type="text" value="<?= $client['address'] ?>">
    </div>
    <div class="mb-3 mt-3">
        <label class="form-label">Foto</label>
        <input name="photo" class="form-control" type="file">
    </div>
    <div class="mb-3 mt-3">
        <?php
        if (is_file("assets/img/clients/{$client['idClient']}.jpg")) {
            echo "
                        <img
                            src='assets/img/clients/{$client['idClient']}.jpg'
                            style='max-width:100px; max-height:100px'
                        >
                    ";
        } else {
            echo 'Sem imagem';
        }
        ?>
    </div>
    <input class="btn btn-secondary" type="submit" value="Enviar">
    <input class="btn btn-danger" type="submit" value="Excluir foto" action="?controller=client&action=deleteImage&id=<?= $client['idClient'] ?>">
</form>