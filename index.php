<?php /*Crea un diagramma per una tabella di db che rappresenti gli Users di un blog (va bene anche un file di testo .txt)
Crea una classe User che rappresenti quella tabella, e usala per stampare in pagina i dati di alcuni Users (quindi create alcune istanze)
Il database e la tabella non devono essere realmente creati.Bonus: Creare una classe estesa e un trait a piacere. (create anche in questo caso delle istanze)*/ ?>

<?php
//require_once 'User.php'; //richiamo il file User.php con la classe User
require_once 'SuperUser.php'; //richiamo la classe estesa di User.php perchè il require su User.php l'ho fatto in SuperUser.php


// istanza utente 1
$user1 = new User(1);
//var_dump($user1);
//var_dump(get_class_methods($user1)); //mostra il construct,setProfile e getProfile
try{
    $user1->setProfile('max','redd','mred@email.it');
} catch(Exception $error){
    echo $error->getMessage();//il getMessage è un suo metodo, ne ha altri
}
//var_dump($user1);



// istanza utente 2
$user2 = new User(2);
//$user2->anno_iscrizione = 2021; //cannot access protected property
$user2->avatar = 'Obama';
//var_dump($user2);
try{
    $user2->setProfile('alida','bianchi','alida@email.it');
} catch(Exception $error){
    echo $error->getMessage();
}
//var_dump($user2);



// istanza utente 3
$user3 = new User(3);
$user3->avatar = 'Gates';
try{
    $user3->setProfile('gio','green','gates@email.it');
} catch(Exception $error){
    echo $error->getMessage();
}



// istanza utente 4 dalla classe estesa
$user4 = new SuperUser(4,100); // rispettivamente id e point
$user4->avatar = 'Mattarella';
try{
    $user4->setProfile(500); // n. messaggi inviati
} catch(Exception $error){
    echo $error->getMessage();
}
var_dump($user4);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php classes</title>
</head>
<body>
    <ul>
        <li>user 1 - <?php echo $user1->getProfile(); ?> </li>
        <li>user 2 - <?php echo $user2->getProfile(); ?> </li>
        <li>user 3 - <?php echo $user3->getProfile(); ?> </li>
        <li>user 4 - <?php echo $user4->getProfile(); ?> </li>
    </ul>
    
</body>
</html>