
<?php



     //create connection

     $conn =  new mysqli("localhost","root","","lms",3306);

if($conn == false)
     die ("\n  Database not connected successfully ...");



if(isset($_POST['AddBook']))
{

   
   
$BookCode = $_POST['code'];
$Title = $_POST['title'];
$ISBN = $_POST['isbn'];
$Author = $_POST['author'];
$Category = $_POST['category'];
$Publisher = $_POST['publisher'];
$Year= $_POST['year'];
$Edition = $_POST['edition'];
$Pages = $_POST['pages'];


$query = " INSERT INTO book VALUES ('$BookCode', '$Title', '$ISBN', 
'$Author', '$Category', '$Publisher', '$Year', '$Edition','$Pages')";

if(mysqli_query($conn,$query))
{


  echo " Record Inserted Successfully..";

}

else
{

	  echo " Record Not Inserted Successfully..";
}

}



?>