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
            <div class="content-2">
           
                <div class="img_p2">
                    <img src="asset/portrait-terrifing-clown.jpg" alt="img cover" loading="lazy">
                 </div>
            
        </div>

    </section>
    

    <main>
        <div class="container">
            <div class="content-2 ">
                <div class="text-center">
                    <h1>Inscription rapide</h1>
                </div>
                <div id="error"></div>
                <form action="php/recup_signin.php" method="post" class="login">
                    <label for="nom">Nom</label>
                    <input type="text" name="nom" id="nom" placeholder="Nom"
                    value="<?php echo isset($_SESSION['nom']) ? htmlspecialchars($_SESSION['nom']) : ''; ?>">
                    <label for="prenom">Prénom</label>
                    <input type="text" name="prenom" id="prenom" placeholder="Prénom"
                    value="<?php echo isset($_SESSION['prenom']) ? htmlspecialchars($_SESSION['prenom']) : ''; ?>">
                    <label for="pwd">Mot de passe</label>
                    <input type="password" name="pwd" id="pwd" placeholder="mot de passe"
                    value="<?php echo isset($_SESSION['nom']) ? htmlspecialchars($_SESSION['nom']) : ''; ?>">
                    <label for="c_pwd">Confirmer mot de passe</label>
                    <input type="password" name="c_pwd" id="c_pwd" placeholder="Confirmer mot de passe">
                    <label for="mail">E-mail</label>
                    <input type="text" name="mail" id="mail" placeholder="E-mail">
                    <label for="ville">Ville</label>
                    <input list="ville"  name="ville" placeholder="Ville">
                    <datalist id="ville">
                        <option value="paris">paris</option>
                    </datalist>
                    <label for="pays">Pays</label>
                    <input list="pays" name="pays" placeholder="Pays">
                    <datalist id="pays">
                        <option value="Belgique">Belgique</option>
                        <option value="Cameroun">Cameroun</option>
                        <option value="France">France</option>
                        <option value="Italy">Italy</option>
                        <option value="Nigeria">Nigeria</option>
                        <option value="suisse">suisse</option>
                    </datalist>
                    <input type="submit" name="valider" id="valider" value="valider">
                 
                </form>
           
            </div>
        </div>

    </main>

<?php
    require_once "includes/footer.php";
?>