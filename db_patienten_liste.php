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

  <h2>Arztpraxis - Pazienten</h2>

  <table>
    <tr>
      <th class="th_patienten">Vorname</th>
      <th class="th_patienten">Nachname</th>
      <th class="th_patienten">Strasse</th>
      <th class="th_patienten">Ort</th>
      <th class="th_patienten">Telefonnummer</th>
      <th class="th_patienten">Email</th>
    </tr>

    <?php 
    
      include 'db_connect.php';

      if ($conn) {
        $sql = "SELECT * FROM wda_arzt_adr;";
        $result = mysqli_query($conn, $sql);

        if ($result) {
          while ($row = mysqli_fetch_assoc($result)) {
            extract($row);

            echo '<tr>';
            echo '<td>' . $wda_arzt_vorname . '</td>';
            echo '<td>' . $wda_arzt_nachname . '</td>';
            echo '<td>' . $wda_arzt_strasse . '</td>';
            echo '<td>' . $wda_arzt_ort . '</td>';
            echo '<td>' . $wda_arzt_tel . '</td>';
            echo '<td>' . $wda_arzt_email . '</td>';
            echo '</tr>';

          }
        }

      }

    ?>

  </table>

</body>
</html>