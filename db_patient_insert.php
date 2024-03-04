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
      $sql = "INSERT INTO wda_arzt_adr 
      (wda_arzt_vorname, 
      wda_arzt_nachname, 
      wda_arzt_strasse, 
      wda_arzt_ort, 
      wda_arzt_tel,
      wda_arzt_email) 
      VALUES ('$wda_arzt_vorname', '$wda_arzt_nachname', '$wda_arzt_strasse', '$wda_arzt_ort', '$wda_arzt_tel', '$wda_arzt_email')";

      // echo $sql;
      
      $result = mysqli_query($conn, $sql);
      if ($result) {
      echo '<br><h2>Neuer Patient wurde in die Datenbank eingetragen!</h2>';
      echo '<div class="buttons">';
      echo '<button type="button" class="btn_neu"><a href="db_patient_neu.php">Weitern Patienten anlegen</a></button>';
      echo '<button type="button" class="btn_neu"><a href="db_patienten_liste.php">Patientenübersicht ansehen</a></button>';
      echo '</div>';
      } else {
      echo "FEHLER!";
      }
    }

    

  }

?>

</body>
</html>