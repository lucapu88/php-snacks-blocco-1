<!-- Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici.
Stampare Nome, Cognome e la media dei voti di ogni alunno. -->
<?php
  $alunni = [ //1. Creare un array contenente qualche alunno
    [ //2. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici.
      'nome' => 'Maccio',
      'cognome' => 'Capatonda',
      'voti' => [6, 4, 7, 5]
    ],
    [
      'nome' => 'Herbert',
      'cognome' => 'Ballerina',
      'voti' => [2, 4, 3, 5]
    ]
  ];
  foreach ($alunni as $alunno) { //3. Stampare Nome e Cognome
    echo $alunno['nome'] . ' ';
    echo $alunno['cognome'] . '<br>';
  //calcolo la media dei voti
    $sommaVoto = 0; //creo una variabile equivalente a 0
    foreach ($alunno['voti'] as $voto) { //ciclo l'aray contenente i voti
      $sommaVoto += $voto; //alla variabile della somma dei voti si va ad aggiungere il singolo voto
    }
    $numeroVoti = count($alunno['voti']); //conto quanti voti ci sono nell'array
    $mediaVoti = $sommaVoto / $numeroVoti; //calcolo la media
    echo 'Media voto: ' . $mediaVoti . '<br>'; //4. Stampare media dei voti di ogni alunno

  }
?>
