<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <?php
// je verifie si mon boutton est bien soumis
if (isset($_POST["submit"])) {
    
$nom = $_POST ["name"];
$mail = $_POST ["email"];
$commentaire = $_POST ["comment"];

echo "nom = $nom";
echo "<br>";
echo "adresse mail :$mail";
echo "<br>";
echo "Commentaire : $commentaire";

} 

?>
</body>

</html>