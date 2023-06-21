<html lang="en">
  <head>
    <title>Customers in Forecast Inc.</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
  </head>
  <body>
    <h1>Regions</h1>
    <table>
      <tr>
        <th>id</th>
        <th>name</th>
        <th>salary</th>
      </tr>
<?php
	$mysqli = new mysqli("host.docker.internal", "user", "password", "reg1");
	$result = $mysqli->query("SELECT * FROM customers");
	foreach ($result as $row) 
	{
      	  echo "
      	<tr>
       	 <td>{$row['id']}</td>
       	 <td>{$row['name']}</td>
       	 <td>{$row['salary']}</td>
     	</tr>"; 
	} ?>
    </table>
    <?php phpinfo();?>
  </body>
</html>
