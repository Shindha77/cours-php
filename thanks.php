<?php
  
  echo nl2br("Merci" . " " . $_POST['user_fname'] . " " . $_POST['user_lname'] . " " . "de nous avoir contacté à propos de" ." ". $_POST['topic'] . ".\n\nUn de nos conseiller vous contactera soit à l’adresse" . " " . $_POST['user_email'] . " " . "ou par téléphone au" . " " . $_POST['user_phone'] . " " . "dans les plus brefs délais pour traiter votre demande :\n\n");
  echo $_POST['user_message'];

//{message}