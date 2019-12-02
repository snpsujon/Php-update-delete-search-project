<?php include 'header.php'; ?>
<style>

body{
            background: linear-gradient(rgba(0,0,0,.7),rgba(0,0,0,.7)),url(https://png.pngtree.com/thumb_back/fw800/background/20190222/ourmid/pngtree-hospital-building-green-trees-cartoon-background-image_60703.jpg);
              background-position: center;
            background-size: cover;
            height: 100vh;
            color: white;
            align-content: center;
            margin:0;
            padding:0;
        }
</style>


<center>
<form method="POST" style="text-align:center">

<h1 style="font-size:200%;">Patient Information Search Form</h1>
<h2 style="font-size:150%;"> Search By  ID:
</h2>
<input type="text" style="font-size:150%;" name="search_id"><br>
<br>
 <button class="button" ><b><big>Search</big></button>
  <br><br>
</form>

<article class="article">

  <table border="1" align="center">

  <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "restaurent";
$id="";
if(isset($_POST["search_id"])){
$id=$_POST["search_id"];
}
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT a.Id, a.Name,a.Phone,a.Address,b.Id,b.Name,b.Phone,b.Type FROM patient a INNER JOIN doctor b ON a.Id=b.Id WHERE a.id='$id'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row


  echo "<tr><th>ID</th><th>Patient Name</th><th>Phone</th><th>Desease</th><th>Doctor Name</th><th>Phone</th><th>Type</th><th>Action</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
  echo "<tr>";
        echo "<td>" . $row["Id"]. "</td><td>" . $row["Name"]. "</td><td>" .$row["Phone"]."</td><td>" . $row["Address"]. "</td><td>" . $row["Name"]. "</td><td>" .$row["Phone"]."</td><td>" . $row["Type"]. "</td><td> "."<a href='dprint.php?id=".$row["Id"]."'>Print</a>"."</td>";
  echo "</tr>";
    }
echo "</table>";
} else {
    echo "<h2><font color='black'>No Data Found </font></h2>";
}

mysqli_close($conn);
?>
</div>

</div>

</center>
<?php include 'footer.php'; ?>
