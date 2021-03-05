<?php
include 'config.php';

session_start();

if (isset($_POST['account'])) {
    $account = $_POST['account'];
    $password = $_POST['password'];

    $passwordDecrypte = md5($password);
    $sql = "SELECT id FROM adminLogin WHERE account='$account' AND account_password= '$passwordDecrypte' ";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    
    if($count > 0)  
    {  
        /*  $_SESSION["username"] = $username;   */
         echo 'Yes';  
    }  
    else  
    {  
         echo 'No';  
    } 
            
}


$nom = "";
$prenom = "";
$email = "";
$telephone = "";
$date_creation = "";
$departement = "";
$ficher = "";
$ip = "";
$port = "";
$mot_de_passe = "";


if (isset($_POST["buttonSubmit"])) {

    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $telephone = $_POST["telephone"];
    $departement = $_POST["departement"];
    $date_creation = $_POST["date_creation"];
    $fname = $_FILES["ficher"]["name"];
    $tname = $_FILES["ficher"]["tmp_name"];
    $uploads = "/uploads";

    $departement = $_POST["departement"];

    move_uploaded_file($tname, $uploads . '/' . $fname);



    $query = "INSERT INTO userLab(nom,prenom,email,telephone,date_creation,ficher, ip, port, mot_de_passe, idDepartement)VALUES(?,?,?,?,?,?,?,?,?,?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("sssssssssi", $nom, $prenom, $email, $telephone, $date_creation, $fname, $ip, $port, $mot_de_passe, $departement);
    $stmt->execute();

    $_SESSION['response'] = "Inséré avec succès dans la base de données";
    $_SESSION['res_type'] = "success";
    header('location:index.php');

};


if (isset($_POST['mot_de_passe'])) {
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $date_creation = $_POST['date_creation'];
    $departement = $_POST['departement'];
    $oldficher = $_POST['ficher'];
    $ip = $_POST['ip'];
    $port = $_POST['port'];
    $mot_de_passe = $_POST['mot_de_passe'];
   
    if(isset($_FILES['ficher']['name'])&&($_FILES['ficher']['name']!="")){
        $newfile = $_FILES["ficher"]["name"];
        $tname = $_FILES["ficher"]["tmp_name"];
        $uploads = "/uploads";
        unlink($oldimage);
        move_uploaded_file($tname, $uploads . '/' . $newfile);
    }
    else{
        $newfile = $oldficher;
    }

/*     $query = "UPDATE userLab INNER JOIN departement ON idDepartement = departement.id_departement SET nom='$nom',prenom='$prenom' ,email='$email',telephone='$telephone',date_creation='$date_creation',ficher='$newfile' ,ip='$ip',port='$port',mot_de_passe='$mot_de_passe', idDepartement='$departement' WHERE id='$id'";
 */
    $query = "UPDATE userLab SET nom='$nom',prenom='$prenom' ,email='$email',telephone='$telephone',date_creation='$date_creation',ficher='$newfile' ,ip='$ip',port='$port',mot_de_passe='$mot_de_passe', idDepartement='$departement' WHERE id='$id'";
    $result = mysqli_query($conn, $query);
   

    $_SESSION['response'] = "Informations modifier avec succès!";
    $_SESSION['res_type'] = "primary";


    header('location:index.php');;
}


if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $query = "DELETE FROM userLab WHERE id=?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $id);
    $stmt->execute();

    $_SESSION['response'] = "Étudiant supprimer";
    $_SESSION['res_type'] = "danger";
    header('location:index.php');
}
