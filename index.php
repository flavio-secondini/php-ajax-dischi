<?php
    $database = [
        [
            'title' => 'New Jersey',
            'author' => 'Bon Jovi',
            'year' => 1988,
            'poster' => 'https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg'
        ],
        [
            'title' => 'Live at Wembley 86',
            'author' => 'Queen',
            'year' => 1992,
            'poster' => 'https://images-na.ssl-images-amazon.com/images/I/71g40mlbinL._SX355_.jpg'
        ],
        [
            'title' => 'Ten\'s Summoner\'s Tales',
            'author' => 'Sting',
            'year' => 1993,
            'poster' => 'https://images-na.ssl-images-amazon.com/images/I/411BQR6BHRL.jpg'
        ],
        [
            'title' => 'Steve Gadd band',
            'author' => 'Steve Gadd Band',
            'year' => 2018,
            'poster' => 'https://m.media-amazon.com/images/I/81UtLzBDoEL._SS500_.jpg'
        ],
        [
            'title' => 'Brave new World',
            'author' => 'Iron Maiden',
            'year' => 2000,
            'poster' => 'https://i.ebayimg.com/images/g/1GwAAOSwFytaKr7l/s-l300.jpg'
        ],
        [
            'title' => 'One more car, one more rider',
            'author' => 'Eric Clapton',
            'year' => 2002,
            'poster' => 'https://images-na.ssl-images-amazon.com/images/I/81MDAIdh78L._SY355_.jpg'
        ]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Music gallery</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Train+One&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Gochi+Hand&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Calligraffitti&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
  <link rel="stylesheet" href="master.css">
</head>
<body>

  <section class="container" style="background-image:url('https://i.pinimg.com/originals/e9/51/93/e95193e990a95fb24c07a4966a82c16e.jpg')">
    <div>

      <div class="upper-bar">
        <div class="options">
          <select name="" id="" v-model="selezione">
            <option value="" disabled selected>Scegli un genere</option>
            <option value="">Tutti</option>
            <option v-for="genere in generi" :value="`${genere}`">{{genere}}</option>
          </select>
        </div>
        <div class="title-container">
          <div class="title">
            <h1>Welcome to Bricktune <i class="fas fa-headphones-alt"></i></h1>
          </div>
          <div class="title-sign">
            <h2>LOGIN <i class="fas fa-long-arrow-alt-right"></i></h2>
          </div>
        </div>
        <div class="subscribe">
          <button>Subscribe now!</button>
        </div>
      </div>

      <div class="album-container">

        <?php foreach ($database as $album) { ?>

        <div class="album">
          <img src="<?= $album['poster'] ?>" alt="">
          <h3><?= $album['author'] . "-" . $album['title'] ?></h3>
          <p><?= $album['year'] ?></p>
        </div>

        <?php } ?>
        
      </div>

    </div>
  </section>

</body>
</html>
