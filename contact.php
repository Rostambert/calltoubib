<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CALLTOUBIB - Accueil</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body class='contact'>
                  
    
    <?php include 'header.php';?>
    <div class="container mt-3"  >
        <div class="row justify-content-center">
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                    <h5 class="card-title text-success">Vous cherchez à nous contactez ? </h5>
                    <h6 class="card-title text-success">Numéro d'Urgence: </h6>
                    <p>07282826</p>
                    <h6 class="card-title text-success">Adresse mail: </h6>
                   <input type="text" name="email" placeholder="votre email" />
                    <select name="maliste">
  <option value="Urgence">Urgence</option>
  <option value="crise">Crise d'angoisse</option>
  <option value="crise">Crise cardiaque</option>
  <option value="choc">Choc septique</option>
  <option value="coma">Coma éthylique</option>
  <option value="hemorragie">Hémorragie</option>
  <option value="hemorragie">Hémorragie cérébrale</option>

  </select>
  <div class="float-end">
                                <button type="submit" class="btn btn-success">Envoyer</button>
                            </div>
  
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>




    </select>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>


</body>
</html>