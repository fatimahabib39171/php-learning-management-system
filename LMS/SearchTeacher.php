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



$id=$_POST['ID'];


$query = " SELECT * FROM teacher WHERE ID =  $id ";
$result = mysqli_query($conn,$query);

echo " <center> <h2> Teacher Record </h2> <br><br>";

if(mysqli_num_rows($result) > 0)
{
  $row = mysqli_fetch_assoc($result);
   echo "<table>
       <tr>
           <th>ID</th>
           <th>Name</th>
           <th>Department</th>
           <th>Designation</th>
           <th>PhoneNo</th>
           <th>Address</th>
           
            </tr> ";

    echo " <tr> ";

       echo "<td>" . $row['ID'] . "</td>";
       echo "<td>" . $row['Name'] . "</td>";
       echo "<td>" . $row['Department'] . "</td>";
       echo "<td>" . $row['Designation'] . "</td>";
       echo "<td>" . $row['PhoneNo'] . "</td>";
       echo "<td>" . $row['Address'] . "</td>";
      
       echo " </tr> ";    
       echo " </table>";
}

else
{

	  echo " No Records...";
}




?>