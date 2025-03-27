<?php 
include_once 'functions.php';

$albums = getDiscs();

$titolo = $_POST['titolo'];
$artista = $_POST['artista'];
$cover_url = $_POST['cover_url'];
$anno = $_POST['anno'];
$genere = $_POST['genere'];

$albums[] = [
  'titolo' => $titolo,
  'artista' => $artista,
  'cover_url' => $cover_url,
  'anno' => $anno,
  'genere' => $genere,
];

$albums = json_encode($albums);

file_put_contents('./albums.json', $albums);

header('Location: ./index.php');

?>