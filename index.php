<?php /*Crea un diagramma per una tabella di db che rappresenti gli Users di un blog (va bene anche un file di testo .txt)
Crea una classe User che rappresenti quella tabella, e usala per stampare in pagina i dati di alcuni Users (quindi create alcune istanze)
Il database e la tabella non devono essere realmente creati.Bonus: Creare una classe estesa e un trait a piacere. (create anche in questo caso delle istanze)*/ ?>

<?php
require_once 'User.php';


// istanza utente 1
$user1 = new User(1);
//var_dump($user1);
//var_dump(get_class_methods($user1));
try{
    $user1->setProfile('max','redd','mred@email.it');
} catch(Exception $error){
    echo $error->getMessage();
}
echo $user1->getProfile();
//var_dump($user1);



// istanza utente 2
$user2 = new User(2);
//$user2->anno_iscrizione = 2021; //cannot access protected property
$user2->avatar = 'Obama';
var_dump($user2);
try{
    $user2->setProfile('alida','bianchi','alida@email.it');
} catch(Exception $error){
    echo $error->getMessage();
}
echo $user2->getProfile();



// istanza utente 3
