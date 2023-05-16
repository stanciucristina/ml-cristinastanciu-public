<?php

// Open the file. Read mode
$file = fopen("places.csv", "r"); 

// New array. One position - One file line
$places = array();

// Read the file until End Of File
while(!feof($file)) {
    // One position of the array - One file
    // We use explode funtion to separate the fields
    $places[] = explode(";",fgets($file));
}

//  DEBUG CODE
/*
echo "<pre>";
print_r($places);
echo "</pre>";
*/


?>
<!DOCTYPE html>
<html>
<head>
	<title>Informacion</title>
	<link rel="icon" type="image/x-icon" href="./1683022998.ico">
    <style>
		body {
			background-color: white;
			margin: 0;
			padding: 0;
			padding-top: 50px;
			padding-bottom: 50px;
		}
		h1 {
			font-family: "Times New Roman", Times, serif;
			color: rgb(0, 0, 0);
			background-color: rgb(51, 47, 47);
      color: white;
			text-align: center;
			padding: 20px;
			margin: 0;
		}

    h2 {
			font-family: "Times New Roman", Times, serif;
			color: rgb(0, 0, 0);
			background-color: white;
      color: black;
			text-align: center;
			padding: 20px;
			margin: 0;
		}

		button {
			font-family: "Times New Roman", Times, serif;
			font-size: 18px;
			color: black;
			background-color: transparent;
			border: none;
			cursor: pointer;
			margin: 10px;
			padding: 10px 20px;
			transition: color 0.2s, background-color 0.2s;
		}
		button:hover {
			color: white;
			background-color: black;
		}
        .image-container {
           display: flex;
           justify-content: center;
   }
       a{
		color: black;
		text-decoration: none;
		margin-top: 20px;
		font-family: "Times New Roman", Times, serif;
			font-size: 18px;
			color: black;
			background-color: transparent;
			border: none;
			cursor: pointer;
			margin: 10px;
			padding: 10px 20px;
			transition: color 0.2s, background-color 0.2s;
	   }
	   a.linkplace:hover{
		width: 240px;
		height: 30px;
		background-color: black;
		color: white;
	   }
       
  table thead th {
    background-color: green;
    color: white;
    font-size: 18px;
    padding: 10px;
    text-align: center;
  }
  
  
  table tbody td {
    background-color: #ffffff;
    color: #444444;
    font-size: 16px;
    padding: 10px;
    text-align: center;
  }
  
 
  table tbody td img {
    
    max-width: 80px;
  }
  
 
  table tbody tr:nth-child(even) {
    background-color: #f8f8f8;
  }
  table{
    margin: auto;
  }
  .okb{
           font-size: 35px;
           font-family: 'Times New Roman', Times, serif;
           text-align: center;
           color:black;
        }

	</style>
</head>
<body>
  <a href="index.htm"><h1>Descubriendo Gran Canaria</h1></a>
	<div style="display: flex; justify-content: center;">
        
          </div>
          
	</div>
  
  
  <h2>Lugares que no me puedo perder</h2>
  
	<div style="display: flex; justify-content: center;">
		<a class="linkplace" href=/formular.htm>Nuevo Lugar que visitar</a>
		<a class="linkplace" href=/tabel.php>Lugares que no me puedo perder</a>
	</div>
  
   
      <table>
        <thead>
          <tr>
            <th>Visitado</th>
            <th>Municipio</th>
            <th>Description</th>
            <th>Name</th>
            <th>Url</th>
            <th>Location maps</th>
            <th>Photo</th>
          </tr>
        </thead>
        <tbody>
        <?php

// Iterate over the $places array
// $place will contain one place on every iteration
foreach ($places as $place) {
    
    echo "<tr>";
    echo "<td><input type='checkbox' checked='checked'></td>";
    echo "<td>$place[0]</td>";
    echo "<td>$place[1]</td>";
    echo "<td>$place[2]</td>";
    echo "<td><a href='$place[3]'>$place[3]</a></td>";
    echo "<td><a href='$place[4]'>$place[4]</a></td>";
    echo "<td><img src='upload/".$place[5]."' width='200px'></td>";
    echo "</tr>";

}

?>
          
          </tbody>
        </tbody>
      </table>
      <div class="okb">
      <input type="submit" value="Submit" class="noo"></div>
      <footer>
        <p>&copy; Stanciu Cristina</p>
      </footer>
      
</body>
</html> 