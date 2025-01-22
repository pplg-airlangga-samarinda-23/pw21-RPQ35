<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            overflow: hidden;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        main{scale: 150%;}
        form{
            background-color: aquamarine;
            display: flex;
            flex-direction: column;
            gap: 1%;
            width: 30vb;
            height: 30vb;
            padding: 10px;
            border-radius: 20px;border: 2px solid gray;
            a{margin: auto;}
        }
    </style>
</head>
<body>
<?php
include 'db.php';
$_SESSION['login']=false;

if(isset($_POST['open'])){
    // $data = $conn->query("SELECT * from login_data WHERE username = '$username'")->fetch_assoc();
    // if (!$data || $password != $data['pass']) {
    //     echo "<script>alert('Login gagal')</script>";
    //     return; 
    // }

    // if(array_key_exists($nama,$data)){
        // if(in_array($pass,$data)){
    $user=md5($_POST['user']);
    $pass=md5($_POST['password']);
    
    if($user_data = $conne->query("SELECT * from data WHERE username = '$user'")->fetch_assoc()){
        if(in_array($pass,$user_data = $conne->query("SELECT * from data WHERE username = '$user'")->fetch_assoc())){
        $_SESSION['login']=true;
        header('location: index.php');
    }else{echo"<script>alert'password / username salah'</script>";}}
}
?>    

<main>
    <form action="" method="post">
        <label for="">username</label>
        <input type="text" name="user" id="">
        <label for="">password</label>
        <input type="password" name="password" id="">
        <button name="open">login</button>
        <a href="new_pass.php">lupa akun</a>
    </form>
</main>

</body>
</html>