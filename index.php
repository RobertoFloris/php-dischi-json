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
  <div class="row row-cols-4 justify-content-start">
    <?php foreach($albums as $album) { ?>
    <div class="col">
      <div class="card m-3" style="width: 18rem;">
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
</body>
</html>