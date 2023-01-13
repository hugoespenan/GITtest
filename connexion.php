<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="assets/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <div class="main">


        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="assets/images/signin-image.jpg" alt="sing up image"></figure>
                        <a href="inscription.html" class="signup-image-link">Create an account</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Se connecter</h2>
                        <form method="POST" class="register-form" id="login-form" action="connexion.php">
                            <div class="form-group">
                                <label for="your_email"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="email" name="email" id="your_email" placeholder="Votre email"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="mdp" id="your_pass" placeholder="Votre mot de passe"/>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Se connecter.."/>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>

<?php
if (isset($_POST['email']) && isset($_POST['mdp'])) {
    $login = $_POST['email'];
    $mdp = $_POST['mdp'];

    try {
        $bdd = new PDO('mysql:host=localhost;dbname=agnhen_projgit;charset=utf8', 'root', '');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

    $req = $bdd->prepare("SELECT * FROM utilisateur where email = :email AND mdp = :mdp");
    $req->execute(array('email' => $login, 'mdp' => $mdp));
    $res = $req->fetch();

    if ($res == true) {
        session_start();
        $_SESSION['email'] = $login;
        $_SESSION['mdp'] = $mdp;
        header("Location: index.php");
    }

}
if($res == false) {
    header("Location: connexion.php");
}

echo "erreur"
?>

