<?php
    $firstname="";
    $lastname="";
    $email="";
    $password="";
    $adresse="";
    $numero="";
    $naissance="";
    include ('database.php');

    if(isset($_GET["id"])){
        $stmt = $connexion->prepare("SELECT * FROM user WHERE id=? LIMIT 1"); 
        $stmt->execute(array($_GET['id'])); 
        $row = $stmt->fetch();
        $prenom= $row["Prénom"];
        $nom= $row["Nom"];
        $email= $row["email"];
        $nameuser= $row["Nom d'utilisatuer"];
        $mot_de_passe= $row["Mot de passe"];
        
        
    }else if(isset($_POST['prenom'])){
        try{
            $stmt = $connexion->prepare("INSERT INTO `user`
                                        (`firstname`, `lastname`, `email`, `password`, `adresse`, `numero`, `naissance`, `type`)
                                        VALUES (:prenom, :nom, :email, :password, :adresse, :numero, :naissance, :type);");
            $stmt->execute(array("prenom"=>$_POST["prenom"],
                                    "nom"=>$_POST["nom"],
                                    "email"=>$_POST["email"],
                                    "password"=>password_hash($_POST["password"], PASSWORD_DEFAULT),
                                    "adresse"=>$_POST["adresse"],
                                    "numero"=>$_POST["numero"],
                                    "naissance"=>$_POST["naissance"],
                                    "type"=>2));
            }
            catch(PDOException $e){
                printf("Erreur lors de l'inscription : %s\n", $e->getMessage());
                exit();
            }finally{
                echo "<p style='color:green'>Inscription réussie!</p>";
            }
    }  
?>