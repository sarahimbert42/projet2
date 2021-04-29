<?php


$order = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $json = json_encode($order);
    echo $json

?>