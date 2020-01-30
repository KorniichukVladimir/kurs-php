<?php

$apps = file('document/mail.txt');

echo "<table>";

foreach ($apps as $app) {

    $arr = explode('-||-', $app);

    echo "<tr>";

    foreach ($arr as $one) {
        echo "<td>$one</td>";
    }
    echo "<tr>";
}
echo "<table>";

?>

<style>
    table td {
        border: 1px solid black;
        padding: 5px;
    }
</style>

