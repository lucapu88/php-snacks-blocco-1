<!-- ESERCIZIO MIO -->

<!-- Utilizzare questo array: https://pastebin.com/CkX3680A.
Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->
<?php

    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

    <?php
      foreach ($db as $key => $value) { //ciclo l'array db per prendermi le chiavi
        if ($key == 'teachers') { //se la chiave corrisponde a teachers, creo un div grigio
      ?>
         <div class="grey"> <!-- contenitore insegnanti -->
            <?php
              foreach ($value as $testoTeach) { //nel div ciclo il contenuto di teachers
                echo $testoTeach['name'] . ' '; //stampo il nome
                echo $testoTeach['lastname'] . '<br>'; //stamppo il cognome
              }
            ?>
          </div>
      <?php
        }
        else { //altrimenti, se la chiave non è teachers, e quindi è pm, creo un div verde
      ?>
          <div class="green"> <!-- contenitore pm -->
            <?php
            foreach ($value as $testoPM) { //nel div ciclo il contenuto di pm
              echo $testoPM['name'] . '<br>'; //stampo il nome
              echo $testoPM['lastname'] . '<br>'; //stampo il cognome
            }
            ?>
          </div>
      <?php
        }
      }
    ?>

  </body>
</html>
