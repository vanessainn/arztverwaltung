<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Arztverwaltung</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <?php include 'arzt_menu.php'; ?>

  <h2>Neuen Patienten erfassen</h2>

  <form action="db_patient_insert.php" method="post" class="form_patienten">
    <label for="wda_arzt_vorname">Vorname:</label>
    <input type="text" id="wda_arzt_vorname" name="wda_arzt_vorname" required=""><br>
    <label for="wda_arzt_nachname">Nachname:</label>
    <input type="text" id="wda_arzt_nachname" name="wda_arzt_nachname" required=""><br>
    <label for="wda_arzt_strasse">Strasse:</label>
    <input type="text" id="wda_arzt_strasse" name="wda_arzt_strasse" required=""><br>
    <label for="wda_arzt_ort">Ort:</label>
    <input type="text" id="wda_arzt_ort" name="wda_arzt_ort" required=""><br>
    <label for="wda_arzt_tel">Telefonnummer:</label>
    <input type="text" id="wda_arzt_tel" name="wda_arzt_tel" required=""><br>
    <label for="wda_arzt_email">E-Mail:</label>
    <input type="text" id="wda_arzt_email" name="wda_arzt_email" required=""><br><br>
    <div class="btn_container">
      <button type="submit" name="submit" id="submit" value="Neuen Patienten erfassen" class="btn">Neuen Patienten erfassen</button>  
    </div>
  </form>

</body>
</html>