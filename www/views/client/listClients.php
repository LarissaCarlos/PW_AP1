<h1>Lista de Clientes</h1>
<table class="table table-striped">
    <tr>
        <th>ID do Cliente</th>
        <th>Nome</th>
        <th>Telefone</th>
        <th>Email</th>
        <th>Endereço</th>
        <th>Detalhes</th>
    </tr>
    <?php
    foreach($arrayClients as $client){
    ?>
        <tr>
            <td>
                <?=$client["idClient"]?>
            </td>
            <td>
                <?=$client["name"]?>
            </td>
            <td>
                <?=$client["phone"]?>
            </td>
            <td>
                <?=$client["email"]?>
            </td>
            <td>
                <?=$client["address"]?>
            </td>
            <td>
                <a href="?controller=client&action=detailsClient$id=<?=$client['idClient']?>">
                    Detalhes
                </a>
            </td>
        <tr>
    <?php
    }
    ?>
</table>