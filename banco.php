<?php

$sqlite = "sqlite:prog.db";
// conexão ao sqlite
$pdo = new PDO($sqlite);

$execucao = $pdo->prepare("select distinct genre, country from artists ");

$execucao->execute();

while ($row = $execucao->fetch()) {

    $genre = $row['genre'];
    //$name = $row['name'];
    $country = $row['country'];

    $a[] = array('source' => $country, 'target' => $genre);
}
header('Content-Type: application/json');
echo json_encode($a);
//$a =  json_encode($a);

?>