
<?php
if{isset($_POST['xcoord']) && isset($_POST['ycoord'])}
{
	 $a= $_POST['xcoord'];
	 $b =$_POST['ycoord'];
	 echo $a;
}
?>
<form method="POST" action="ram.php">
x-coordinate:<input type="number" name="xcoord"/><br>
y-coordinate:<input type="number" name="ycoord"/><br>
Imagepath:<input type="text" name="imgpath"/><br>
Text:<input type="text" name="text"/><br>

<input type="submit" value="Submit">
</center>

</form>