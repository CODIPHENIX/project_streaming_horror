<?php
session_start();
include_once('connectdb.php');


if(isset($_POST['valider'])){
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $password = $_POST['pwd'];
    $c_password = $_POST['c_pwd'];
    $mail = $_POST['mail'];
    $ville = $_POST['ville'];
    $pays = $_POST['pays'];

    // Stocker les valeurs dans la session
    $_SESSION['nom'] = $nom;
    $_SESSION['prenom'] = $prenom;
    $_SESSION['pwd'] = $password;
    $_SESSION['c_pwd'] = $c_password;
    $_SESSION['mail'] = $mail;
    $_SESSION['ville'] = $ville;
    $_SESSION['pays'] = $pays;



    if (empty($nom) || empty($prenom) || empty($password) || empty($c_password) || empty($mail) || empty($ville) || empty($pays))
        {  
            $errorMsg = urlencode("Veuillez remplir tous les champs");
            header("location:../S’inscrire.php?error=".$errorMsg);
            exit();
        }else{

            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $qry_addusr = $conn->prepare("INSERT INTO user(nom,prenom,user_password,user_email,ville_user,pays_user)
        Values (?,?,?,?,?,?)");

        $qry_addusr->bind_param("ssssss", $nom, $prenom, $hashed_password, $mail, $ville, $pays);

        if($qry_addusr->execute()){
            $succesmsg = "Vous êtes connecté";
            header("location:../location.php?success=".$succesmsg);
            exit();
        }
        else{
            $errorMsg = urlencode("une erreur c'est produite, veillez reessayer");
            header("location:../S’inscrire.php?error=".$errorMsg);
            exit();
        }
    }
}
      
