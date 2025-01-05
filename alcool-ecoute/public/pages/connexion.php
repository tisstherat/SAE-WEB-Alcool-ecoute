<!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Se connecter - Alcool Ecoute</title>
        <link rel="stylesheet" href="../style/connecter.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">

        <script src="../script/connexion.js" type="module" defer></script>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    </head>

    <body class="connecter-page">

        <div class="wrapper">
            <form action="../php/signin.php" method="post" id="connexion">
                <h1>Login</h1>
                <div class="input-box">
                    <input type="text" placeholder="Adresse email" name="email" required="required">
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box">
                    <input type="password" placeholder="Mot de passe" name="password" required="required">
                    <i class='bx bxs-lock-alt'></i>
                </div>
                <div class="souvenir-oublier">
                    <label><input type="checkbox"> Se souvenir de moi</label>
                    <a href="#">Mot de passe oublié ?</a>
                </div>
                <button type="submit" class="btn">Se connecter</button>
                <div class="enregistrer-link">
                    <p>Vous n'avez pas de compte ?<a href="#" id="inscription-redirection">Enregistrer</a></p>
        </div>
            </form>
            <form action="../php/signup.php" method="post" id="inscription">
                <h1>Enregistrer</h1>
                <div class="input-prenom-nom-box">
                    <div class="input-box">
                        <input type="text" placeholder="Nom" name="lastname" required="required">
                    </div>
                    <div class="input-box">
                        <input type="text" placeholder="Prenom" name="firstname" required="required">
                    </div>
                </div>
                <div class="input-box">
                    <input type="text" placeholder="Adresse email" name="email" required="required">
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box">
                    <input type="password" placeholder="Mot de passe" name="password" required="required">
                    <i class='bx bxs-lock-alt'></i>
                </div>
                <div class="input-box">
                    <input type="password" placeholder="Confirmer Mot de passe" name="repassword" required="required">
                    <i class='bx bxs-lock-alt'></i>
                </div>
                <button type="submit" class="btn">S'inscrire</button>
                <div class="enregistrer-link">
                    <p>Vous avez déjà un compte ?<a href="#" id="connexion-redirection">Se connecter</a></p>
                </div>
            </form>
        </div>

    </body>
</html>