<?php
function getDiscs(){
  $discs_json = file_get_contents('./albums.json');
  return json_decode($discs_json, true);
}
?>