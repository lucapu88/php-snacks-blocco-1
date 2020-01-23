<!-- Creare una funzione che restituisce un array con 15 numeri casuali, tenendo
conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<?php
  $numeri = arrayCasual(1, 100, 15); //creo una variabile che richiama la mia funzione
  print_r($numeri);
  
  //funzione che crea un array di numeri:
  function arrayCasual($min, $max, $lengthArr) { //prende in pasto un numero minimo da cui partire, un numero massimo su cui fermarsi, e la lunghezza totale dell'array.
    $array = []; //creo un array vuoto
    while (count($array) < $lengthArr) { //nel ciclo while conto l'array finchè è minore alla lunghezza che mi è stata passata
      $number = rand($min, $max); //creo una var che mi prende numeri random da, il numero minimo passato, e il numero massimo passato
      if (!in_array($number, $array)) { //se il numero è diverso da quello che c'è dentro l'array
        $array[] = $number; //allora lo vado a pushare dentro
      }
    }
    return $array; //la funzione mi restituisce l'array (che all'inizio era vuoto) con dentro n numeri casuali
  }
?>
