<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>view</title>
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

        table {
  border-collapse: collapse;
  width: 100%;

}

th, td {
  text-align: center;
  padding: 8px;
}

tr:nth-child(even){
    background-color: #f2f2f2;
    color:black;
    }

th {
  background-color: #4CAF50;
  color: white;
}


#myInput {
            background-image: url('/css/ra.jpg');
            background-position: 10px 10px;
            background-repeat: no-repeat;
            width: 30%;
            font-size: 12px;
            padding: 10px 12px 8px 25px;
            border: 1px solid #ddd;
            margin-bottom: 12px;
        }

        #myInput1 {
            background-image: url('/css/ra.jpg');
            background-position: 10px 10px;
            background-repeat: no-repeat;
            width: 30%;
            font-size: 12px;
            padding: 10px 12px 8px 25px;
            border: 1px solid #ddd;
            margin-bottom: 12px;
        }
        .dd{
            font-size:2em;
            color: #FFFFFF;
            text-align:center;
            text-shadow: 0 -1px 4px #FFF, 0 -2px 10px #ff0, 0 -10px 20px #ff8000, 0 -18px 40px #F00;
            padding:50px;
        }
        span{
            color:#fff ;
            font-size:25px;
        }

		.but{
        text-decoration: none;
        font-size: 2em;
        letter-spacing: 2px;
        color: #fff;
        background-color: #000;
        border-radius: 10px;
        padding: 10px;
        margin: 20px;
    }
    .but:hover{
        background-color: #fff;
        color: red;
    }

    </style>
</head>
<body>

<span>Search Patitent</span>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search By ID.." title="Type in a name">
    <input type="text" id="myInput1" onkeyup="myFunction1()" placeholder="Search By Name.." title="Type in a name">


<div id="printableArea">
     <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "restaurent";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT a.Id, a.Name,a.Phone,a.Address,b.Id,b.Name,b.Phone,b.Type FROM patient a INNER JOIN doctor b ON a.Id=b.Id";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    echo "<table id='myTable'>";
	echo "<tr><th>ID</th><th>Patient Name</th><th>Phone</th><th>Desease</th><th>Doctor Name</th><th>Phone</th><th>Type</th><th>Action</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
	echo "<tr>";
        echo "<td>" . $row["Id"]. "</td><td>" . $row["Name"]. "</td><td>" .$row["Phone"]."</td><td>" . $row["Address"]. "</td><td>" . $row["Name"]. "</td><td>" .$row["Phone"]."</td><td>" . $row["Type"]. "</td>";

	echo "</tr>";
    }
echo "</table>";
} else {
    echo "0 results";
}



mysqli_close($conn);
?>
</div>

<center>
<input type="button" class="but" onclick="printDiv('printableArea')" value="Print Data!" />
</center>

<script>
function printDiv(divName) {
    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;
    document.body.innerHTML = printContents;
    window.print();
    document.body.innerHTML = originalContents;
}</script>


<script>
        function myFunction() {
            var input, filter, table, tr, td, i;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0];
                if (td) {
                    if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>

    <script>
        function myFunction1() {
            var input, filter, table, tr, td, i;
            input = document.getElementById("myInput1");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[1];
                if (td) {
                    if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>
<br/>
<br/>

</body>
</html>
<?php include 'footer.php'; ?>
