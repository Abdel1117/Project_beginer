<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="main.css">
    <title>Document</title>

</head>
<body>
    <div class="main-container" id="main-container">
        <nav class="nav-container" id="nav-container">
            <div class="logo" id="logo">
                <i class="bi bi-person"></i>
                <a class="login-link" href="Login.php">Login</a></div>

            <div class="link-container" id="nav-list">
                <a href="index.php" class="links" id="link1">Acceuil</a>
                <a href="boutique.php" class="links" id="link2">Boutique</a>
                <a href="Chat.php" class="links" id="link3">Chat</a>
                <a href="News.php" class="links" id="link4">News</a>
                <a href="" class="links" id="link5">Panier</a>
            </div>

            <div class="search-container" id="search-container">
                <div class="container">
                    <i class="bi bi-search"></i>
                    <input placeholder="Rechercher" type="text" >
                    <button>Rechercher</button>
                </div>
            </div>
        </nav>
        <section class="create_Account">
            <fieldset class="input_Field">
                <form action="Creation.php" method="POST">
                    <h3 id="form_title">Cree un Compte</h3>
                    <label for="pseudo">Pseudo <input type="text" name="pseudo" id="pseudo" placeholder="Pseudo"></label>
                    <label for="email">Email <input type="email" name="email" id="email" placeholder="Email"></label>
                    <label for="password">Mot de passe <input type="password" name="password" id="password" placeholder="Mot de passe"></label>
                    <label for="password_check">Retapez votre Mot de Passe <input type="password" name="password_check" id="password_check" placeholder="Password_Check"></label>
                    <input type="submit" name="submit">
                </form>
            </fieldset>


            <fieldset class="input_Field2">
                <form action="Identification.php" method="POST">
                        <h3 id="form_title">Conexion</h3>
                    
                        <label for="pseudo">Pseudo <input type="text" name="pseudo_identificator" id="pseudo" placeholder="Pseudo"></label>
                    
                        <label for="password">Mot de passe <input type="password" name="password_identificator" id="password" placeholder="Mot de passe"></label>

                        <input type="submit">
                    </form>
                </fieldset>
            </section>
        </div>
            </body>
        <footer>
    </footer>
</html>