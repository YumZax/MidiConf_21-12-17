<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Midi Conf - Ch1.3</title>
    <link rel="stylesheet" href="css/ch1.css">

  </head>
  <body>
    <img id="logo" src="assets/znk.png">
    <div id="content">
        <h2>Midi Conf : Notions de base de sécurité des webapps</h1>
        <h3><em>Chapitre 1.3 : Entrons dans le vif du sujet</em></h3>
        <p>File Upload : blacklist</p>
        <div id="chall">
            <h2>BIENVENUE sur la VRAIE section d'administration de k3v1nl3h4xx0r</h2>
            <h3>L'4dm1n de K3v1n : G4113R13 P3R50</h3>
            <img src="assets/blingee.gif">
            <br />
           
            <form method="POST" action="kevinupload.php" enctype="multipart/form-data">
                <!-- On limite le fichier à 100Ko -->
                <input type="hidden" name="MAX_FILE_SIZE" value="100000">
                Fichier : <input type="file" name="avatar">
                <input type="submit" name="envoyer" value="Envoyer le fichier">
            </form>
            

            
            <?php    
 
            if(isset($_FILES['avatar']))
            { 
                 $dossier = '/Users/pc/Documents/www/midiconf_21-12-2017/uploads/';
                 $fichier = $_FILES['avatar']['name'];

                 if (strrchr($_FILES['avatar']['name'], '.') === '.php'){
                    echo "Hophophop, tu ne croyais quand même pas pouvoir uploader du PHP sur mon site !? ><";
                 }
                 else{ 
                    if(move_uploaded_file($_FILES['avatar']['tmp_name'], $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
                    {
                         echo "L'image se situe " . '<a href="uploads/'.$fichier.'">ici</a>';
                    }
                    else //Sinon (la fonction renvoie FALSE).
                    {
                         echo 'Echec de l\'upload !';
                    }
                 }
                
            }
            ?>
            
        </div>
    </div>
  </body>
</html>


