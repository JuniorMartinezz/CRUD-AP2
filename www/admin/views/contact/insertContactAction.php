<h1>Dados do Contato</h1>

<table class="table table-striped">
    <tr>
        <th>
            Nome:
        </th>
        <td>
            <?= $contact['name'] ?>
        </td>
    </tr>
    <tr>
        <th>
            Email:
        </th>
        <td>
            <?= $contact['email'] ?>
        </td>
    </tr>
    <tr>
        <th>
            Mensagem:
        </th>
        <td>
            <?= $contact['message'] ?>
        </td>
    </tr>
    <tr>
        <th>
            Status:
        </th>
        <td>
            <?= $contact['status'] ?>
        </td>
    </tr>
    <tr>
        <th>
            Descrição:
        </th>
        <td>
            <?= $contact['description'] ?>
        </td>
    </tr>
</table>