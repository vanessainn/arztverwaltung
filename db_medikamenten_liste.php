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

  <h2>Arztpraxis - Medikamente</h2>

  <table>
    <tr>
      <th class="th_medium">Medikament</th>
      <th class="th_large">Beschreibung</th>
      <th class="th_small">Marke</th>
      <th class="th_small">Preis</th>
      <th class="th_small">Einheit</th>
      <th class="th_medium">Adjektive</th>
    </tr>

    <?php 
    
      include 'db_connect.php';

      if ($conn) {
        $sql = "SELECT * FROM wda_arzt_medi;";
        $result = mysqli_query($conn, $sql);

        if ($result) {
          while ($row = mysqli_fetch_assoc($result)) {
            extract($row);

            echo '<tr>';
            echo '<td>' . $wda_arzt_mediname . '</td>';
            echo '<td class="td_large">' . $wda_arzt_medibeschreibung . '</td>';
            echo '<td>' . $wda_arzt_medimarke . '</td>';
            echo '<td>' . $wda_arzt_medipreis . '</td>';
            echo '<td>' . $wda_arzt_medieinheit . '</td>';
            echo '<td>' . $wda_arzt_mediadjektive . '</td>';
            echo '</tr>';

          }
        }

      }

    ?>

  </table>

</body>
</html>