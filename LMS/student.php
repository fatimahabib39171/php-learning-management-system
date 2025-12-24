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



if(isset($_POST['AddStudent']))
{

   
   
$ID = $_POST['ID'];
$Name = $_POST['Name'];
$Department = $_POST['dep'];
$Program = $_POST['prg'];
$Semester = $_POST['sem'];
$PhoneNo = $_POST['Phone'];
$Address = $_POST['add'];



$query = " INSERT INTO student VALUES ('$ID', '$Name', '$Department', '$Program', '$Semester', '$PhoneNo', '$Address')";

if(mysqli_query($conn,$query))
{


  echo " Record Inserted Successfully..";

  echo "<table>
       <tr>
           <th>ID</th>
           <th>Name</th>
           <th>Department</th>
           <th>Program</th>
           <th>Semester</th>
           <th>Phone No</th>
           <th>Address</th>
           
           

       </tr>
       <tr>
            <td>$ID</td>
           <td>$Name</td>
           <td>$Department</td>
           <td>$Program</td>
           <td>$Semester</td>
           <td>$PhoneNo</td>
           <td>$Address</td>
           
       </tr>      
      
       </table>";

}

else
{

	  echo " Record Not Inserted Successfully..<br>";
    
}

}



?>