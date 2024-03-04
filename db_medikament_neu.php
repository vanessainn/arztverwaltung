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

  <h2>Neues Medikament erfassen</h2>

  <form action="db_medikament_insert.php" method="post" class="form_medikament">
    <label for="wda_arzt_mediname">Medikament:</label>
    <input type="text" id="wda_arzt_mediname" name="wda_arzt_mediname" required=""><br>
    <div class="textfeld">
      <label for="wda_arzt_medibeschreibung">Beschreibung:</label>
      <textarea name="wda_arzt_medibeschreibung" id="wda_arzt_medibeschreibung" rows="8" cols="55" maxlength="300" required=""></textarea><br>
    </div>
    <label for="wda_arzt_medimarke">Marke:</label>
    <input type="text" id="wda_arzt_medimarke" name="wda_arzt_medimarke" required=""><br>
    <label for="wda_arzt_medipreis">Einzelpreis:</label>
    <input type="text" id="wda_arzt_medipreis" name="wda_arzt_medipreis" required=""><br>
    <label for="wda_arzt_medieinheit">Einheit:</label>
    <input type="text" id="wda_arzt_medieinheit" name="wda_arzt_medieinheit" required=""><br>
    <label for="wda_arzt_mediadjektive">Adjektiv:</label>
    <input type="text" id="wda_arzt_mediadjektive" name="wda_arzt_mediadjektive" required=""><br><br>
    <div class="btn_container">
      <button type="submit" name="submit" id="submit" value="Neues Medikament erfassen" class="btn">Neues Medikament erfassen</button>  
    </div>
  </form>

</body>
</html>