<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Midi Conf - Ch1.2</title>
    <link rel="stylesheet" href="css/ch1.css">

  </head>
  <body>
    <img id="logo" src="assets/znk.png">
    <div id="content">
        <h2>Midi Conf : Notions de base de sécurité des webapps</h1>
        <h3><em>Chapitre 1.2 : Attention aux effets de bord des IDE</em></h3>
        <p>Certains logiciels facilitent la récupération des fichiers en cours de traitement en cas de plantage !</p>
        <div id="chall">
            <h2>BIENVENUE sur la VRAIE section d'administration de k3v1nl3h4xx0r</h2>
            <h3>Hahaha ! Tu croyais qu'un hacker comme moi allait laisser le mdp par défaut ? ;)</h3>
            <img src="assets/pwned.jpg">
            <br />
            <form action="adminkevin.php" method="POST">
                <table align="center">
                    <tr>
                        <td>
                              <label for="username">VRAI Pseudo :</label>
                         </td>
                         <td>
                              <input type="text" name="username">
                        </td>
                   </tr>
                    <tr>
                        <td>
                            <label for="password">VRAI Mot de passe :</label>
                        </td>
                        <td>               
                            <input type="password" name="pw">
                        </td>
                    </tr>
                </table>
                <input type="submit">
            </form>

            <?php if (isset($_POST['username']) && isset($_POST['pw'])){
                    if ($_POST['username'] === 'k3vin' && $_POST['pw'] === "h4xx43v3h") 
                        echo '<a href="kevinupload.php"><img src="assets/gifnaze.gif"></a>'; 
                    else 
                        echo 'Essaye encore';
                  }
                  ?>
        </div>
    </div>
  </body>
</html>


