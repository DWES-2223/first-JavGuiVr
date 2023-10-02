<?php
$records = [];
include_once ("atletes.php");
?>
<table>
    <thead>
    <tr>
        <th>Disciplina</th>
        <th>Marca</th>
        <th>Atleta</th>
        <th>Natalici</th>
        <th>Club</th>
        <th>Data</th>
        <th>Lloc</th>
    </tr>
    </thead>

    <tbody>
    <?php foreach ($records as $clave => $record) {?>
        <tr>
            <td><?="$clave"?></td>
            <?php foreach ($record as $item) {?>
                <td><?="$item"?></td>
            <?php }?>
        </tr>
    <?php }?>
    </tbody>
</table>