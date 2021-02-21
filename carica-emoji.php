<?php
  $emojis = glob("emoji/svg/*.svg");
  for ($i=0; $i < count($emojis); $i++) {
      $emojis[$i] = explode("emoji/svg/", $emojis[$i])[1];
      $emojis[$i] = explode(".svg", $emojis[$i])[0];
  }
  echo json_encode($emojis);
?>
