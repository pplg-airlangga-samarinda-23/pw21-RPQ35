<?php
include 'db.php';

if(isset($_POST['submit'])){
    $username = md5($_POST['username']);
    $password = md5($_POST['password']);

    $mwehe=$conne->query("SELECT * from `data` WHERE username = '$username'")->fetch_assoc();
    if($mwehe){
        echo "<script> alert('username already in use');</script>";
    }
    else{
    $SQL_pass = "INSERT INTO `data` (`username`, `password`, `id`) VALUES ('$username', '$password', null)";
    $conne->query($SQL_pass);
    $conne->close();
    header('Location: login.php');}
}


    echo"
    <body style='overflow:hidden;'>
    <main style='width:100vw;height:100vh;display:flex;justify-content:center;    align-items: center;overflow:hidden;'>
        <form method='post' action='' style='border:1px solid black;border-radius:15px;scale:150%;display:flex;flex-direction:column;background-color:aquamarine;padding:2%;text-align:left;'>
        <label>new username</label>
        <input name='username' type='text'>
        <label>new passsword</label>
        <input name='password' type='password'>
        <button name='submit' style='margin-top:5%;' >submit</button>
        </form>
    </main>
    </body>
    ";


?>