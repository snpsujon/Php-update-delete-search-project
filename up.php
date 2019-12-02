<?php include'header.php';?>
<html>

<body>
<?php
   //connection
   $con = mysqli_connect('127.0.0.1','root','');
   //databas
   mysqli_select_db($con,'restaurent');

   $id = $_GET["id"];
   //select
   $sql =  " select * from patient WHERE patient.Id='$id'";
   //execute
   $records=mysqli_query($con,$sql);
   ?>
   <center>
<h7 style="color:White;">Edit Informetion.</h7>
   <table>
   <tr>
   <th>ID</th>
   <th>Patient Name</th>
   <th>Phone</th>
   <th>Desease</th>
      <th>  </th>

   </tr>
 </center>
   <?php
   while ($row =mysqli_fetch_array($records))
   {
	   echo"<tr><form action = update.php method=post>";
   echo"<td><input type = text name=Id value='".$row['Id']."'></td>";
   echo"<td><input type = text name=Name value='".$row['Name']."'></td>";
   echo"<td><input type = text name=Phone value='".$row['Phone']."'></td>";
   echo"<td><input type = text name=Address value='".$row['Address']."'></td>";
   echo"<td><input type = submit>";
   echo"</form></tr>";
   }
   ?>
</table>
</body>
</center>
   </html>

<?php include'footer.php';?>
