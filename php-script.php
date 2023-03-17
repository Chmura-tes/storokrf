<?php
include('database.php');
$db=$conn;
 $nazwagry = legal_input($_POST['nazwagry']);
 $opis = legal_input($_POST['opis']);
 $nazwawydawcy = legal_input($_POST['nazwawydawcy']);
 $nazwaproducenta = legal_input(($_POST['nazwaproducenta']));
 $linkobrazka = legal_input(($_POST['linkobrazka']));
 $linkstrony = legal_input(($_POST['linkstrony']));
   
if(!empty($nazwagry) && !empty($opis) && !empty($nazwawydawcy) && !empty($nazwaproducenta)){

    Insert_data($nazwagry,$opis,$nazwawydawcy,$nazwaproducenta);
}else{
 echo "All fields are required";
}

function legal_input($value) {
    $value = trim($value);
    $value = stripslashes($value);
    $value = htmlspecialchars($value);
    return $value;
}

 function insert_data($nazwagry,$opis, $nazwawydawcy, $nazwaproducenta){
 
     global $db;
      $query="INSERT INTO usertable(nazwagry,opis,nazwawydawcy,nazwaproducenta) VALUES('$nazwagry','$opis','$nazwawydawcy','$nazwaproducenta')";
     $execute=mysqli_query($db,$query);
     if($execute==true)
     {
       echo "User data was inserted successfully";
     }
     else{
      echo  "Error: " . $sql . "<br>" . mysqli_error($db);
     }
 }
?>