<?php 




require('UserInfo.php');




?>

<!DOCTYPE html>
<html>
<head>
  <title>Center Data</title>
  <style>

  
  body

  {
    background-color: inherit;
  }
    
  

table {
  margin-top: 20px;
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;

}

 th {
    border: 1px solid #dddddd;
    text-align: center;
    padding: 8px;
    color:black;

}

td{
border: 1px solid #dddddd;
    text-align: center;
    padding: 8px;
    color:blue;

}

tr:nth-child(even) {
    background-color: #dddddd;
    color: blue;
}





</style>

</head>






<?php









if (isset($_POST ['submitted'] ))

{
// connection
  include ('conn.php');

$text = $_POST ['text'];

$menu = $_POST ['menu'];

$batch = $_POST['batch'];



   




            
           

  $result = mysqli_query ($dbcon, "SELECT * FROM center WHERE district = '$menu' AND roll LIKE '%".$text."%' AND batch like '%".$batch."%' ")





  or

  die("Error: " .mysqli_error($dbcon));






  

$num_rows = mysqli_num_rows ($result);

echo "$num_rows results found";


  echo "<table>";

  echo "<tr>

   <th>Serial No. </th>

    <th>Name </th>

    <th>Parentage </th>

     <th>Address </th>

      <th> D.O.B </th> 

      <th> Qualification </th>

       <th> Institute </th>

        <th> Center </th> 

        <th> Batch </th>

         <th> Date </th>

          <th> Roll No. </th> 

          <th> Timing </th>

          <th> District </th> 

              </tr>";

  



while ($row = $result-> fetch_assoc())
{
                


                echo



                "<tr> <td>"

                
                . $row["serial"]

                . "</td><td>"

                
                . $row["name"]

                 . "</td> <td>"


                . $row["parentage"]

                 . "</td> <td>"

                . $row["address"]

                 . "</td> <td>"

                . $row["dob"] 

                . "</td> <td>"

                . $row["qualification"] 

                . "</td> <td>"

                . $row["inst"] 

                . "</td> <td>"

                . $row["examcenter"] 

                . "</td> <td>"

                . $row["batch"] 

                . "</td> <td>"

                . $row["date"] 

                . "</td> <td>"

                . $row["roll"] 

                . "</td> <td>"

                . $row["timing"] 

                . "</td> <td>"

                . $row["district"] 

                . "</td></tr>";

                

              }





          echo "</table>";

        








}// end of main if statement 




?>







</table>








<body>





  <table>
    




    <tr>
      <th>Ip</th>
      <th>Device</th>
      <th>Os</th>
      <th>Browser</th>
    </tr>
    



    <tr>
      <td><?= UserInfo::get_ip();?></td>
      <td><?= UserInfo::get_device();?></td>
      <td><?= UserInfo::get_os();?></td>
      <td><?= UserInfo::get_browser();?></td>
    </tr>
  



  </table>

</body>
</html>