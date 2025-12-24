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



$title=$_POST['title'];


$query = " SELECT * FROM book WHERE Title =  '$title' ";

 $result = mysqli_query($conn,$query);

     

echo " <center> <h2> Book Record </h2> <br><br>";

if(mysqli_num_rows($result) >  0)
{
  
   echo "<table>
       <tr>
           
           <th>Book Title</th>
           <th>Author</th>
           <th>Category</th>
           <th>PublisherName</th>
           <th>YearOfPublishing</th>
           <th>Edition</th>
           <th>No.of Pages</th>
           
            </tr> ";
    while($row = mysqli_fetch_assoc($result))
     {
    echo " <tr> ";

      
       echo "<td>" . $row['Title'] . "</td>";
       echo "<td>" . $row['Author'] . "</td>";
       echo "<td>" . $row['Category'] . "</td>";
       echo "<td>" . $row['PublisherName'] . "</td>";
       echo "<td>" . $row['YearOfPublishing'] . "</td>";
       echo "<td>" . $row['Edition'] . "</td>";
       echo "<td>" . $row['No.of_Pages'] . "</td>";
      
       echo " </tr> "; 

     }     
       echo " </table>";
  }

else
{

	  echo " No Records...";
}




?>