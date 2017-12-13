<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Midi Conf - Ch1.1</title>
    <link rel="stylesheet" href="css/ch1.css">

  </head>
  <body>
    <img id="logo" src="assets/znk.png">
    <div id="content">
        <h2>Midi Conf : Notions de base de sécurité des webapps</h1>
        <h3><em>Chapitre 1.1 : La base des notions de base</em></h3>
        <p>Trouvons ensemble les credentials de cette page pour commencer l'aventure !</p>
        <div id="chall">
            <img width="300" height="400" src="assets/kevin.jpg">
            <h2>BIENVENUE sur le site de k3v1nl3h4xx0r</h2>
            <h3>Ceci est la section d'administration de mon site, interdit aux noobs ;)</h3>
            <br />
            <form action="ch1.php" method="POST">
                <table align="center">
                    <tr>
                        <td>
                              <label for="username">Pseudo :</label>
                         </td>
                         <td>
                              <input type="text" name="username">
                        </td>
                   </tr>
                    <tr>
                        <td>
                            <label for="password">Mot de passe :</label>
                        </td>
                        <td>               
                            <input type="password" name="pw">
                        </td>
                    </tr>
                </table>
                <input type="submit">
            </form>

            <?php if (isset($_POST['username']) && isset($_POST['pw'])){
                    if ($_POST['username'] === 'admin' && $_POST['pw'] = "password") 
                        echo '<a href="adminkevin.php"><img src="assets/matrix.jpg"></a>'; 
                    else 
                        echo 'Essaye encore';
                  }
                  ?>
        </div>
    </div>
  </body>
</html>


