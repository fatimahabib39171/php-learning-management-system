<html>
<style>
    
   table, th,td{

       border: 2px solid black;
       padding:10px;
       text-align:center;
       border-collapse: collapse;
    }

     body
    {

      background-image: url('images/L4.jpg');
    }

</style>
</html>


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
   

   echo "<table>
       <tr>
           <th>Book Code</th>
           <th>Title</th>
           <th>ISBN</th>
           <th>Author</th>
           <th>Category</th>
           <th>PublisherName</th>
           <th>YearOfPublishing</th>
           <th>Edition</th>
           <th>No.ofPages</th>

       </tr>
       <tr>
            <td>$BookCode</td>
           <td>$Title</td>
           <td>$ISBN</td>
           <td>$Author</td>
           <td>$Category</td>
           <td>$Publisher</td>
           <td>$Year</td>
           <td>$Edition</td>
           <td>$Pages</td>

       </tr>      
      
       </table>";


}

else
{

	  echo " Record Not Inserted Successfully..<br>";
    echo " Enter Unique BookCode and ISBN..";
}

}



?>