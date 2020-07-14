<!-- snack 1 -->
<?php
  // array delle partite con le squadre e i loro relativi punteggi
  $arrayPartite = [
    [
      'squadra_1'=> 'Pescara',
      'squadra_2'=> 'Inter',
      'punteggio_1'=> 3,
      'punteggio_2'=> 0
    ],
    [
      'squadra_1'=> 'Pescara',
      'squadra_2'=> 'Milan',
      'punteggio_1'=> 1,
      'punteggio_2'=> 0
    ],
    [
      'squadra_1'=> 'Pescara',
      'squadra_2'=> 'Juve',
      'punteggio_1'=> 2,
      'punteggio_2'=> 1
    ]
  ];
?>
<!-- lista partite -->
<ul>
  <!-- ciclo for per prendere tutte le partite -->
  <?php for ($i=0; $i < count($arrayPartite); $i++) { ?>
    <!-- variabile per definire la singola partita e prendere i valori -->
    <?php $singolaPartita = $arrayPartite[$i]; ?>
    <!-- partite stampate  -->
    <li>
      <?php echo $singolaPartita['squadra_1']; ?> - <?php echo $singolaPartita['squadra_2']; ?>
      |
      <?php echo $singolaPartita["punteggio_1"]; ?> - <?php echo $singolaPartita["punteggio_2"]; ?>
    </li>
  <?php } ?>
</ul>
<!-- fine snack 1 -->

<!-- snack 2 -->
<?php
  // variabili che prendono il valore immesso nel campo relativo
  $nome = $_GET['nome'];
  $email = $_GET['email'];
  $eta = $_GET['eta'];

  // condizioni per effettuare l'accesso
  // con i campi vuoti non è possibile fare l'accesso
  if (empty($nome) || empty($email) || empty($eta)) {
    echo "Non sei riuscito ad effettuare l'accesso";
  } // se il nome è lungo meno di 3 lettere non è possibile fare l'accesso
    elseif (strlen($nome) <= 3) {
    echo "Non sei riuscito ad effettuare l'accesso";
  } // se l'email non ha la chiocciola e non ha il punto non è possibile fare l'accesso
    elseif (strpos($email, '@' ) === false || strpos($email, '.') === false) {
    echo "Non sei riuscito ad effettuare l'accesso";
  } // se l'età non è un numero non è possibile fare l'accesso
    elseif (is_numeric($eta) === false) {
    echo "Non sei riuscito ad effettuare l'accesso";
  } // se le condizioni vengono soddisfatte è possibile effettuare l'accesso
    else {
    echo "sei riuscito a effettuare l'accesso";
  }
?>
