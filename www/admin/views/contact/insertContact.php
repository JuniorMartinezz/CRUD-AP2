<h1>Inserindo Contato</h1>
<form class="form" action="?controller=contact&action=insertContactAction" method="post" enctype='multipart/form-data'>
    <div class="mb-3 mt-3">
        <label class="form-label">Nome</label>
        <input name="name" class="form-control" type="text">
    </div>
    <div class="mb-3 mt-3">
        <label class="form-label">Email</label>
        <input name="email" class="form-control" type="email">
    </div>
    <div class="mb-3 mt-3">
        <label class="form-label">Mensagem</label>
        <input name="message" class="form-control" type="text">
    </div>
    <input class="btn btn-primary" type="submit" value="Enviar">
</form>