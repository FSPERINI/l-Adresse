<?php
$db = new PDO('mysql:host=185.98.131.148; dbname=speri1516488; charset=utf8', 'speri1516488', 'iwbxxxwfej');

$donnees='';

$selected=$_POST["bddSelector"];


for($count=1 ; $count<5 ; $count+=1){

    switch ($selected){
        case 'menu':
            $donnees=$db->prepare('UPDATE menu SET titre = :titre, ingredients = :ingredients WHERE id = :id');
            break;
        case 'burgers':
            $donnees=$db->prepare('UPDATE burgers SET titre = :titre, ingredients = :ingredients WHERE id = :id');
            break;
        case 'desserts':
            $donnees=$db->prepare('UPDATE desserts SET titre = :titre, ingredients = :ingredients WHERE id = :id');
            break;
        
        case 'vins':
            $donnees=$db->prepare('UPDATE vins SET titre = :titre, ingredients = :ingredients WHERE id = :id');
            break;
    }
    $donnees->execute([
        "titre" => $_POST['titre'.(string)$count],
        "ingredients" => $_POST['ingredients'.(string)$count],
        "id" => (string)$count,
    ]);
}

header('Location: index.php');



