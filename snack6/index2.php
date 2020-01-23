<!-- CORREZIONE IN CLASSE -->

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

  <?php foreach ($db as $ruolo => $persone) {
    if ($ruolo == 'teachers') { ?>
      <div class="grey">
        <?php
    } else { ?>
      <div class="green">
      <?php
    }
    echo $ruolo . '<br>';
    foreach ($persone as $persona) {
      echo $persona['name'] . ' ';
      echo $persona['lastname'] . '<br>';
    }?>
      </div>
<?php
  } ?>

  </body>
</html>
