<?php
    try{
        $conn= new PDO('mysql:host=localhost;dbname=ensam-casa;charset=utf8', 'root', '1002');
        //$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        echo "la connexion a ete bien etablie";
    }catch(PDOException $e){
        echo "la connexion a echoué :" . $e->getMessage()."<br>";
    }

    if(isset($_POST['register'])){
        var_dump($_POST);
        $CNE = $_POST['CNE'];
        $Nom = $_POST['Nom'];
        $Prenom = $_POST['Prenom'];
        $Age = $_POST['Age'];
        $DateInscription = $_POST['DateInscription'];
        $Adresse = $_POST['Adresse'];
        $Sexe = $_POST['Sexe'];
        $Moyenne = $_POST['Moyenne'];
        try {
            // Prepare and execute the SQL statement
            $sql = "INSERT INTO etudiant (CNE, Nom, Prenom, Age, DateInscription, Adresse, Sexe, Moyenne) VALUES (:CNE, :Nom, :Prenom, :Age, :DateInscription, :Adresse, :Sexe, :Moyenne)";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':CNE', $CNE);
            $stmt->bindParam(':Nom', $Nom);
            $stmt->bindParam(':Prenom', $Prenom);
            $stmt->bindParam(':Age', $Age);
            $stmt->bindParam(':DateInscription', $DateInscription);
            $stmt->bindParam(':Adresse', $Adresse);
            $stmt->bindParam(':Sexe', $Sexe);
            $stmt->bindParam(':Moyenne', $Moyenne);
            $stmt->execute();
            echo "Data inserted successfully!";
        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }   

    if(isset($_POST['delete'])){
        var_dump($_POST);
        $CNE=$_POST['CNE'];
        try{
            $sql2="DELETE FROM etudiant WHERE CNE=:CNE";
            $stmt2=$conn->prepare($sql2);
            $stmt2->bindParam(':CNE',$CNE);
            $stmt2->execute();
            echo "Data deleted successfully!";
        }catch(PDOException $E){
            echo "Error:" . $e->getMessage();
        }
        
    }
    if(isset($_POST['update'])){
        var_dump($_POST);
        $CNE=$_POST['CNE'];
        $newNom = $_POST['Nom'];
        $newPrenom = $_POST['Prenom'];
        $newAge = $_POST['Age'];
        $newDateInscription = $_POST['DateInscription'];
        $newAdresse = $_POST['Adresse'];
        $newSexe = $_POST['Sexe'];
        $newMoyenne = $_POST['Moyenne'];
    
        try{
            // Prepare and execute the SQL statement for update
            $sql = "UPDATE etudiant SET Nom=:newNom, Prenom=:newPrenom, Age=:newAge, DateInscription=:newDateInscription, Adresse=:newAdresse, Sexe=:newSexe, Moyenne=:newMoyenne WHERE CNE=:CNE";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':CNE', $CNE);
            $stmt->bindParam(':newNom', $newNom);
            $stmt->bindParam(':newPrenom', $newPrenom);
            $stmt->bindParam(':newAge', $newAge);
            $stmt->bindParam(':newDateInscription', $newDateInscription);
            $stmt->bindParam(':newAdresse', $newAdresse);
            $stmt->bindParam(':newSexe', $newSexe);
            $stmt->bindParam(':newMoyenne', $newMoyenne);
            $stmt->execute();
            echo "Data updated successfully!";
        } catch(PDOException $e) {
            echo "Error:" . $e->getMessage();
        }
    }
    
    $conn=null;
?>




<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Formulaire</title>
</head>
<body >
    <h1><b>Welcome to our register:</b></h1>
    <form action="" method="post">
        CNE:   <input type="number" name="CNE" placeholder="veuillez saisie le CNE"><br><br>
        Nom:   <input type="text" name="Nom" placeholder="veillez saisir le nom"><br><br>
        Prenom: <input type="text" name="Prenom" placeholder="veuillez saisir le prenom"><br><br>
        Age:    <input type="text" name="Age" placeholder="veuillz saisir l'age"><br><br>
        DateInscription:<input type="date" name="DateInscription" placeholder="dateInscription"><br><br>
        Adresse: <input type="text" name="Adresse" placeholder="Adresse"><br><br>
        Sexe:    <select name="Sexe" id="Sexe" ><br><br>
            <option >F</option>
            <option >H</option>
            
        </select><br><br>
        Moyenne: <input type="text" name="Moyenne" placeholder="moyenne"><br><br>
        <input type="submit" name="register" value="Envoyer">
        
        <input type="submit" name="delete" value="delete">
        <input type="submit" name="update" value="update">

    </form>
</body>
</html>