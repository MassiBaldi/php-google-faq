<?php include 'data.php'; ?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="dist/app.css">
    <title>google-faq</title>
  </head>
  <body>
    <div class="logo">
      <img src="https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_74x24dp.png" alt="">
      <h2>Privacy e termini</h2>
    </div>
    <div class="nav">
      <div class="navLeft">
        <ul>
          <li>
            <a href="#">Introduzione</a>
          </li>
          <li>
            <a href="#">Norme sulla privacy</a>
          </li>
          <li>
            <a href="#">Termini di servizio</a>
          </li>
          <li>
            <a href="#">Tecnologie</a>
          </li>
          <li>
            <a class="active" href="#">Domande frequenti</a>
          </li>
        </ul>

      </div>
      <div class="navRight">
        <a href="#">Account Google</a>
      </div>
    </div>
    <div class="main">
      <?php foreach ($domandeRisposte as $data) { ?>
              <h2><?php echo $data['domanda']; ?></h2>

              <p><?php echo $data['risposta']; ?></p>
      <?php }?>
    </div>

  </body>
</html>
