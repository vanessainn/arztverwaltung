<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Arztverwaltung</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php 

  include 'arzt_menu.php'; 

  if (isset($_POST['submit'])) {
    extract($_POST);

    include 'db_connect.php';

    if ($conn) {
      $sql = "INSERT INTO wda_arzt_medi 
      (wda_arzt_mediname, 
      wda_arzt_medibeschreibung, 
      wda_arzt_medimarke, 
      wda_arzt_medipreis, 
      wda_arzt_medieinheit,
      wda_arzt_mediadjektive) 
      VALUES ('$wda_arzt_mediname', '$wda_arzt_medibeschreibung', '$wda_arzt_medimarke', '$wda_arzt_medipreis', '$wda_arzt_medieinheit', '$wda_arzt_mediadjektive')";

      // echo $sql;
      
      $result = mysqli_query($conn, $sql);
      if ($result) {
      echo '<br><h2>Neues Medikament wurde in die Datenbank eingetragen</h2>';
      echo '<div class="buttons">';
      echo '<button type="button" class="btn_neu"><a href="db_medikament_neu.php">Weiters Medikament anlegen</a></button>';
      echo '<button type="button" class="btn_neu"><a href="db_medikamenten_liste.php">Medikamentenübersicht ansehen</a></button>';
      echo '</div>';
      } else {
      echo "FEHLER!";
      }
    }

    

  }

?>

</body>
</html>