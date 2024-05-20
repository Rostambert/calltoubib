<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CALLTOUBIB - Accueil</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <?php include 'header.php';?>
    <?php include 'formuser.php';?>
    


    <div class="container mt-3">
        <div class="row">
            <div class="col-8">
                <div class="row">

                    <h5 class="text-success text-center"><i>CALLTOUBIB vous permet de prendre rendez-vous facilement !</i></h5>
                    <img src="https://nurseguidance.com/wp-content/uploads/2018/01/Depositphotos_50474079_l-2015.jpg" class="img-fluid" alt="">

                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="text-success">Vous êtes patients ? Inscription</h5>
                        <form method="POST" action="patient.php">
                            <div class="mb-3">
                              <label class="form-label">Prénom</label>
                              <input type="text" class="form-control" name="prenom">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nom</label>
                                <input type="text" class="form-control" name="nom">
                            </div>
                              
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" name="email">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Mot de passe</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Adresse</label>
                                <input type="text" class="form-control" name="adresse">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Numéro</label>
                                <input type="text" class="form-control" name="numero">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Naissance</label>
                                <input type="date" class="form-control" name="naissance">
                            </div>
                            <div>
                            <a class="text-success" href="login.php"> Vous avez déjà un compte ?</a>
                            </div>

                            <div class="float-end">
                                <button type="submit" class="btn btn-success">Enregistrer</button>
                                <a class="text-success" href="index.php"></a>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'database.php';?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

</body>
</html>