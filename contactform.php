<!doctype html>
<html lang="en">
    <head>
        <title>Raoul's Art - Home</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Chewy&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <header>
            <?php
            include("includes/header.php");
            ?>
        </header>

        <main>
            <h2 class="contacth2 chewy-regular">Contactez-nous !</h2>
            <div class="card contactform chewy-regular">
                <form action="index.php" method="post">
                    <div class="label-group">
                        <label for="prenom">Prenom : </label>
                        <input type="text" name="prenom" required/>
                    </div>
                    <div class="label-group">
                        <label for="nom">Nom : </label>
                        <input type="text" name = "nom" required/>
                    </div>
                    <div class="label-group">
                        <label for="mail">Mail : </label>
                        <input type="email" name = "mail" required/>
                    </div>
                    <input type="submit" value="Envoyer" id="boutonEnvoie"/>
                </form>
            </div>
        </main>

        <footer>
            <?php
            include("includes/footer.php");
            ?>
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>