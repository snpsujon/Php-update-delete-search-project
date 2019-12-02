<?php include 'header.php'; ?>

<!doctype html>
<html>
<style>
pre{
text-align:center;
}
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
</head>
<body>


<pre>
<form action="update.php" method="POST">

ID:<input type="text" name="Id" "><br>
Patient Name:<input type="text" name="Name"><br><br>
Phone:<input type="text" name="Phone"><br><br>
Deasese:<input type="text" name="Address"><br>

<input type="submit" value="submit">
</form>
</pre>

</body>
</html>
<?php include 'footer.php'; ?>
