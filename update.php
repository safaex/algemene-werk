<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$host = 'localhost:3307';
$db   = 'winkel';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
try 
{
     $pdo = new PDO($dsn, $user, $pass, $options);
     echo "Connectie gemaakt!";
} 
catch (\PDOException $e) 
{
     throw new \PDOException($e->getMessage(), (int)$e->getCode());
}


?>

<form method="POST" action="">

<input type="text" name="product_naam" placeholder="product_naam" required> <br>

<input type="text" name="prijs_per_stuk" placeholder="prijs_per_stuk" required> <br>

<input type="text" name="omschrijving" placeholder="omschrijving" required> <br>

<input type="submit" name="verzenden" placeholder="verzenden" required><br>

</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {




    $product_naam = $_POST['product_naam'];

    $prijs_per_stuk = $_POST['prijs_per_stuk'];

    $omschrijving = $_POST['omschrijving'];




 

       $data = [

       

          'product_naam' => $product_naam,

          'prijs_per_stuk' => $prijs_per_stuk,

          'omschrijving' => $omschrijving,

         

        ];

        $sql = "UPDATE producten SET  product_naam=:product_naam, prijs_per_stuk=:prijs_per_stuk, omschrijving=:omschrijving  WHERE product_code=2";

        $pdo->prepare($sql)->execute($data);




       

        $stmt=$pdo->prepare($sql);

        $stmt->execute($data);

   

      }
?>

</body>
</html>