<?php
// PHPSnack 2
// Passare come parametri GET “name”, “mail” e “age” e verificare (cercando i
// metodi che non conosciamo nella documentazione) che:
// ● “name” sia più lungo di 3 caratteri;
// ● “mail” contenga un punto e una chiocciola;
// ● “age” sia un numero.
// Se tutto è ok, stampare “Accesso riuscito”, altrimenti “Accesso negato”

//verifico lunghezza nome
$nome =$_GET['name']; //leggo il parametro del nome
$name = strlen($nome); //prendo la lunghezza del nome
//verifico email valida
$mail = $_GET['mail']; //leggo il parametro email
$chiocciola = strpos($mail, '@'); //prendo la posizione della chiocciola
$punto = strpos($mail, '.'); //prendo la posizione del punto
if ($chiocciola !== false && $punto !== false) { //se la posizione del punto e della chiocciola è diversa da false
  $email = 'correct'; //l'email è corretta
} else {
  $email = 'wrong'; //l'email è sbagliata
}
//verifico che age sia un numero
$età =$_GET['age']; //leggo il parametro del nome
$age = intval($età); //prendo solo il numero

//verifico l'acccesso passando come parametri all'url: name, mail e age
if ($name > 3 && $email == 'correct' && $age > 1) {
  echo 'Accesso riuscito';
} else {
  echo 'Accesso negato';
}

?>
