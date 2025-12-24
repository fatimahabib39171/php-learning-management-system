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



if(isset($_POST['AddLibrarian']))
{

   
   
$dbID = $_POST['ID'];
$dbName = $_POST['Name'];
$dbPhoneNo = $_POST['Phone'];
$dbAddress = $_POST['Address'];
$dbJoiningDate = $_POST['JoiningDate'];


$query = " INSERT INTO librarian(ID, Name, PhoneNo, Address, JoiningDate) VALUES ('$dbID', '$dbName', '$dbPhoneNo', '$dbAddress', '$dbJoiningDate')";

if(mysqli_query($conn,$query))
{


  echo " Record Inserted Successfully..";
  echo "<table>
       <tr>
           <th>ID</th>
           <th>Name</th>
           <th>Phone No</th>
           <th>Address</th>
           <th>JoiningDate</th>
           

       </tr>
       <tr>
            <td>$dbID</td>
           <td>$dbName</td>
           <td>$dbPhoneNo</td>
           <td>$dbAddress</td>
           <td>$dbJoiningDate</td>
           
       </tr>      
      
       </table>";


}

else
{

	  echo " Record Not Inserted Successfully..<br>";
    echo " ID is already in use..";

}

}



?>