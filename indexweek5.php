<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>

</head>

<body>




<!--opdracht 1-->

<?php

$tijd = date("16:55");




if ($tijd < "12") {

  echo "goedemorgen!";

} else  {

  echo "goedemiddag!";

}





?>




<!--opdracht2 -->

<?php

function gemiddelde($a, $b) {

  return $a ; $b;

}




echo gemiddelde(90, 180) ."\n"




?>




<!--opdracht3-->

<?php

function tijd(){




  $currentDate = date('d-m-Y');

 

  $endOfYear = date('31-12-2023');

 

  $remainingDays = (strtotime($endOfYear) - strtotime($currentDate)) / (60 * 60 * 24);

 

 

 

 

  echo "Aantal resterende dagen tot het einde van het jaar: " . $remainingDays . " dagen";

 

  }




  tijd()

?>





<?php

$telefoon = array('IPHONE','SAMSUNG', 'OPPO', 'BLACKBERRY');




function countArray($inputArray){

  foreach($inputArray as $merk){

    echo $merk . "\n";

  }





}




countArray($telefoon);

?>




</body>

</html>