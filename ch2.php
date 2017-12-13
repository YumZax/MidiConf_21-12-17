<?php 
if (isset($_GET['usr']) && $_GET['usr'] === "kevin"){
    setcookie("admin", "k3vinCookie", time()+1500, "localhost");
}
else{
    setcookie("admin", "lambda", time()+1500, "localhost");
}
 if (isset($_POST['roi'])){
     if ($_COOKIE['admin'] === "k3vinCookie"){
         file_put_contents("txt/roi.txt", $_POST['roi']);
     }
 }
?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Midi Conf - Ch2.1</title>
    <link rel="stylesheet" href="css/ch1.css">

  </head>
  <body>
    <img id="logo" src="assets/znk.png">
    <div id="content">
        <h2>Midi Conf : Notions de base de sécurité des webapps</h1>
        <h3><em>Chapitre 2.1 : Vulnérabilités CSRF</em></h3>
        <p>Exécuter des actions au nom de quelqu'un d'autre</p>
        <div id="chall">
        <h2>Site de k3v1nl3h4xx0r</h2>
        <a href="ch2.php?usr=kevin">Simuler connexion admin</a><br />
        <a href="ch2.php?usr=lambda">Simuler connexion user lambda</a><br />
            <img width="300" height="400" src="assets/roi.jpg">
            <h3>Ici vous pouvez voir qui est le roi du site !</h3>

            Le roi du site est : <span class="roi"><?php echo file_get_contents("txt/roi.txt"); ?></span>
            <br />
            <br />
            <form action="ch2.php" method="POST">
                <table align="center">
                    <tr>
                        <td>   
                             <label for="roi">Définir un nouveau roi (réservé à l'admin)</label>  
                        </td>
                        <td>   
                            <input type="text" name="roi">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="demande">Demander à l'admin de nommer ce pseudo roi :</label>
                        </td>
                        <td>   
                            <input type="text" name="demande">
                        </td>
                    </tr>
                    
                    
                <table>
                <input type="submit"><br /><br />
            </form>
<?php

if (isset($_POST['demande'])){
    file_put_contents("txt/demanderoi.txt", $_POST['demande']);
}

if (isset($_POST['roi']) && $_COOKIE['admin'] !== "k3vinCookie" ){
    echo '<span style="color:red">Tu n\'es pas admin !</span>';
}

echo $_COOKIE['admin'];
if ($_COOKIE['admin'] === "k3vinCookie" && file_get_contents("txt/demanderoi.txt") !== "" ){
    echo 'Un utilisateur te demande de nommer '.file_get_contents("txt/demanderoi.txt").' roi.';
}
?> 
           
        </div>
    </div>
  </body>
</html>


