<?php
require_once "includes/header.php";
?>

<section class="logo-sec">
        <div class="container flex">
            <div class="logo_1 display">
                <img src="asset/LOGOProject-01.png" alt="logo">
            </div>
            <div class="display text">
                <h1>Films d'horreur, thriller et bien plus en illimité.</h1>
            </div>
        </div>

    </section>

    <section>
        <div class="container">
            <div class="content-1">

                <div class="m-1 p-1">
                    <p>Tous les mois profitez de toutes les nouveautés cinéma. A partir
                        du mois prochain on vous propose tous les classiques du cinema 
                    d’horreur ou thriller. 0u que vous soyez. Tous les films en VO. 
                    VOST, VF et plus d'options</p>

                </div>
             </div>
        </div>
    </section>

    <main>
        <div class="container">
            <div class="content-2 ">
                <div class="text-center">
                    <h2>Connectez vous ou initialisez votre mot de passe</h2>
                </div>
                <form action="location.html" class="login">
                    <label for="login">Login ou email</label>
                    <input type="text" name="Login" id="Login" placeholder="Votre Login ou email">
                    <label for="pwd">Mot de passe</label>
                    <input type="password" name="pwd" id="pwd" placeholder="Mot de passe">
                    
                    <input type="submit" id="connecter" value="Se connecter">
                </form>
              

             </div>
        </div>

    </main>

<?php
    require_once "includes/footer.php";
?>