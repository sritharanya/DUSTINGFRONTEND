<!DOCTYPE>
<html>
    <head>
        <title>
            php while test</title>
</head> 
<body>
    <h1>
        Please select any of the folowing links:</h1>
    
    <h1>presenting the beatles</h1>
        <?php
        $con=mysqli_connect("localhost","root","","test");
        if(!$con){
            echo "sorry i could not connect to the database";
            exit;
        }
        else
        echo"connected";
     
    $query="SELECT * FROM t";
    $conresult= mysqli_query($con,$query);
    echo "<table border='1'>";
    while($row= mysqli_fetch_assoc($conresult)){
        echo "<tr>";
        echo"<td>ID:$row[id]<br>\n";
        echo"NAME:$row[name]<br>\n";
        echo"QUANTITY:$row[qty]<br>\n";
        echo"OREDERED:$row[order]</td>\n";
        echo "</tr>";
    }
    echo "</table>";