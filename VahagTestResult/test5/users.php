<?php  

//Create Connnection
$sqlLink = mysqli_connect('localhost', 'root', '', 'registration');

//If Error Connecting
if(!$sqlLink) {
    die('<center><br><h3>Error connecting to servers Database.');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>users</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<center>  <a href="index.php"><button class='mpButton'> MAIN PAGE </button></a> </center>
    <table>
    
        <tr> <td>id</td> <td>username</td> <td>Email</td></tr>
        <?php 
            $query = $sqlLink->query("SELECT * FROM users ORDER by id");
            while($row = $query->fetch_array()){
                echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['username']."</td>";
                echo "<td>".$row['email']."</td>";
                echo "</tr>";
            }

        ?>

    </table>
</body>
</html>