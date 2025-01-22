<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    table,th,tr,td {
            border: 1px solid black;background-color: white;}
    html{overflow: hidden;}
    body{
        display: flex;justify-content: center;align-items: center;height: 100vb;
        div{background-color:aquamarine ;padding: 2%;border-radius: 10px;scale: 120%;display: flex;justify-content: center;align-items: center;flex-direction: column;}
    }
    </style>
</head>
<?php
    include "db.php";
if(!$_SESSION['login']){
    header("location:login.php");
};

$user_data = $conne->query("SELECT * FROM data ");
  
?>
<body>
<div>
<table>
    <tr>
        <th>username</th><th>password</th>
    </tr>
    <?php
    $user_data->fetch_assoc();
    foreach ($user_data as $a){
        print "<tr><td>".$a["username"]."</td><td>".$a['password']."</td></tr>";
    }
    ?>
</table>
<a href="index.php">back</a>
</div>
</body>
</html>