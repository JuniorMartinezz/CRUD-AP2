<h1>Lista de Contatos</h1>

<table class="table table-striped">
    <tr>
        <th>ID Contato</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Mensagem</th>
        <th>Status</th>
        <th>Descrição</th>
        <!-- <th colspan="2">Ações</th> -->
    </tr>

    <?php
    
    foreach($arrayContacts as $contact){
    ?>

    <tr>
        <td>
            <?=$contact['idContact']?>
        </td>
        <td>
            <?=$contact['name']?>
        </td>
        <td>
            <?=$contact['email']?>
        </td>
        <td>
            <?=$contact['message']?>
        </td>
        <td>
            <?=$contact['status']?>
        </td>
        <td>
            <?=$contact['description']?>
        </td>
<!--         <td>
            <a href="?controller=contact&action=updateContact&id=<?=$contact['idContact']?>" class="btn btn-warning">Alterar</a>
        </td>
        <td>
            <a href="?controller=contact&action=deleteContact&id=<?=$contact['idContact']?>" class="btn btn-danger">Excluir</a> 
        </td> -->
    </tr>
    <?php
    }
    ?>
</table>