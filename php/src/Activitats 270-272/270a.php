<?php
include_once ('atletes.php');
?>
<!-- Inici de la taula -->
<table>
    <!-- Inici de la capçalera de la taula -->
    <thead>
    <!-- Inici de una fila de la taula -->
    <tr>
        <!-- Inici i fi de una celda de la taula -->
        <th>Disciplina</th>
        <th>Marca</th>
        <th>Atleta</th>
        <th>Natalici</th>
        <th>Club</th>
        <th>Data</th>
        <th>Lloc</th>
    </tr>
    <!-- Fi de la fila de la taula -->
    </thead>
    <!-- Fi de la capçalera de la taula -->

    <!-- Inici del cos de la taula (files de dades) -->
    <tbody>
    <?php foreach ($records as $clave => $record) {?>
        <!-- Inici de una fila de la taula -->
        <tr>
            <td><?="$clave"?></td>
            <?php foreach ($record as $item) {?>
                <!-- Inici de una celda -->
                <td><?="$item"?></td>
                <!-- Fi de una celda -->
            <?php }?>
        </tr>
        <!-- Fi de una fila de la taula -->
    <?php }?>
    </tbody>
    <!-- Fi del cos de la taula -->
</table>
<!-- Fi de la taula -->
