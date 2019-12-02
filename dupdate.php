<?php
   //connection
   $con = mysqli_connect('127.0.0.1','root','');
   //databas
   mysqli_select_db($con,'restaurent');
   //update
   $sql =  " update doctor set Name = '$_POST[Name]',Phone = '$_POST[Phone]',Type = '$_POST[Type]' where Id = '$_POST[Id]'" ;
   //execute
   if(mysqli_query($con,$sql))
   header("refresh:1; url=dinfor.php");
   else
	   echo "Not update";
   ?>