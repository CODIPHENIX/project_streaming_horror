<?php
include_once('connectdb.php');

if(isset($_POST['valider'])){
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $password = $_POST['pwd'];
    $mail = $_POST['mail'];
    $ville = $_POST['ville'];
    $pays = $_POST['pays'];

    $qry_addusr = "INSERT INTO user(nom,prenom,user_password,user_email,ville_user,pays_user)
    Values ('$nom','$prenom','$password','$mail','$ville','$pays')";

    $run_qry_addusr = mysqli_query($conn,$qry_addusr);

    if($run_qry_addusr){
        echo "user was succesfully added to database";
        header("location:../location.html");
        exit();

    }
    else{
        echo "An erreur occured";
        header("location:../S’inscrire.html");
        exit();
    }


}