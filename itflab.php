<html>
<head>
<title>ITF Lab</title>
</head>
<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'lab31.mysql.database.azure.com', 'itflab2@lab31', 'Sammantha111', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM guestbook');
?>
<table width="700" border="1">
  <tr>
    <th width="100"> <div align="center">Id</div></th>
    <th width="200"> <div align="center">name</div></th>
    <th width="200"> <div align="center">height</div></th>
    <th width="100"> <div align="center">weight</div></th>
    <th width="100"> <div align="center">bmi</div></th>
  </tr>
<?php
while($Result = mysqli_fetch_array($res))
{
?>
  <tr>
    <td><?php echo $Result['Id'];?></div></td>
    <td><?php echo $Result['name'];?></td>
    <td><?php echo $Result['height'];?></td>
    <td><?php echo $Result['weight'];?></td>
    <td><?php echo $Result['bmi'];?></td>
  </tr>
<?php
}
?>
</table>
<?php
mysqli_close($conn);
?>
</body>
</html> 
