
<?php
$nom="";
$email="";
$password="";
$role="";
$errorMessage="";
$successMessage="";
if($_SERVER['REQUEST_METHOD']=='POST'){
    $nom=$_POST['nom'];
    $email=$_POST['email'];
    $role=$_POST['role'];
do{
    if(empty($nom)||empty($email)||empty($role)){
        $errorMessage="Verifier les champs";
        break;
    }
    //insertion d utilisateur
    $nom="";
    $email="";
    $password="";
    $role="";

    $successMessage="Utilisateur ajouter avec success";
}while(false);


}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create.php</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>

<body>
    <div class="container my-5">
        <h2>New user</h2>
        <?php if(!empty($errorMessage)){
            echo"<div class='alert alert-warning alert-dismissible fade show' role='alert'>

            <strong>$errorMessage</strong>
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
        }?>
        <form action="" method="post">
            <div class="row mb-3">
                <label for="nom" class="col-sm-3 col-form-label">Nom</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="nom" value="<?php echo $nom ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="nom" class="col-sm-3 col-form-label">email</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="email" value="<?php echo $email ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="nom" class="col-sm-3 col-form-label">role</label>
                <div class="col-sm-6">
                <select name="role" class="form-select">
                    <option value="admin" <?php if ($role == 'admin') echo 'selected'; ?>>admin</option>
                    <option value="docteur" <?php if ($role == 'docteur') echo 'selected'; ?>>docteur</option>
                    <option value="infermier" <?php if ($role == 'infermier') echo 'selected'; ?>>infermier</option>
                    <option value="patient" <?php if ($role == 'patient') echo 'selected'; ?>>patient</option>
                </select>
                </div>
            </div>
            <?php if(!empty($successMessage)){
                echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                <strong>$successMessage</strong>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>";
            
                
            }?>
            <div class="row mb-3">
                <div class="col-sm-6 offset-sm-3">
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <a href="testt.php" class="btn btn-danger">Cancel</a>
                </div>
            </div>
        </form>
    </div>
</body>

</html>
