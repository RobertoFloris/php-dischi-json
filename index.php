<?php 

require_once './functions.php';

$albums = getDiscs();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css' integrity='sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==' crossorigin='anonymous'/>
  <title>PHP DISCHI</title>
</head>
<body>
  <div class="container">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4">
      <?php foreach($albums as $album) { ?>
      <div class="col">
        <div class="card my-3" style="width: 18rem;">
          <img src="<?php echo $album['cover_url']; ?>" class="card-img-top" alt="<?php echo $album['titolo']; ?>">
          <div class="card-body">
            <h5 class="card-title"><?php echo $album['titolo']; ?></h5>
            <p class="card-text"><?php echo $album['artista']; ?></p>
            <p class="card-text"><?php echo $album['anno']; ?></p>
            <p class="card-text"><?php echo $album['genere']; ?></p>
          </div>
        </div>
      </div>
      <?php } ?>
    </div>

    <h2>Inserisci nuovo album</h2>

    <div class="row">
      <div class="col">
        <form action="server.php" method="post">

          <div class="form-control  mb-5">
            <input type="text" id="titolo" name="titolo" value="Titolo">
            <label for="titolo">Titolo</label>
          </div>

          <div class="form-control mb-5">
            <input type="text" id="cover_url" name="cover_url" value="https://www.altrasoluzione.com/images/blog/siti-per-scaricare-immagini-gratis-legalmente/immagini-gratis-big.jpg">
            <label for="cover_url">Immagine</label>
          </div>

          <div class="form-control mb-5">
            <input type="text" id="artista" name="artista" value="Artista">
            <label for="artista">Artista</label>
          </div>

          <div class="form-control mb-5">
            <input type="text" id="anno" name="anno" value="2025">
            <label for="anno">Anno</label>
          </div>

          <div class="form-control mb-5">
            <input type="text" id="genere" name="genere" value="Genere">
            <label for="genere">Genere</label>
          </div>

          <button class="btn btn-primary mb-5">Aggiungi</button>

        </form>
      </div>
    </div>

  </div>
  
</body>
</html>