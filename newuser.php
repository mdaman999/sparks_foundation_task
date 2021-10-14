<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New User</title>
    <style>
        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, Helvetica, sans-serif;
}
body{
    width: 100%;
    height: 100vh;
    display: grid;
    place-items: center;
}
h1{
    margin-bottom:-50px;
}
form{
    width: 60%;
    height: 70vh;
    border-radius: 10px;
    border: none;
    background-color:#000;
    color: #fff;
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    padding: 30px;
}
form .profile{
    width: 100px;
    height: 100px;
    border-radius: 50%;
    align-self: center;
    background-image: url('profile.jfif');
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
form .ar{
    display: flex;
}
form .text
    {
    display: flex;
    flex-direction: column;
    width: 20%;
}
form .value{
    display: flex;
    flex-direction: column;
    width: 80%;
}
form .text label,form .value input{
    margin: 10px 0;
}

form input[type='submit']{
    width: 30%;
    padding: 10px;
    text-transform: uppercase;
    font-weight:600;
    letter-spacing:3px;
    border-radius: 5px;
    border: none;
    align-self: center;
    background-color: greenyellow;
}
    </style>
</head>
<body>
    <h1>New User</h1>
    <form method="POST">
    <div class="profile"></div>
    <div class="ar">
    <div class="text">
        <label for="name">Username:</label>
        <label for="email">Email:</label>
        <label for="acc">Account No:</label>
        <label for="amount">Bank Balance:</label>
    </div>
    <div class="value">
        <input type="text" id="name" name="name" required>
        <input type="text" id="email" name="email" required>
        <input type="text" id="acc" name="acc" required>
        <input type="text" id="amount" name="amount" required>
    </div>
</div>
    <input type="submit" name="transfer" value="Apply">
    </form>
</body>
</html>

<?php
include 'conection1.php';
if(isset($_POST['transfer']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $acc=$_POST['acc'];
    $amt=$_POST['amount'];

    $query="insert into user(name,email,account,amount) values('$name','$email','$acc','$amt')";
    $res=mysqli_query($con,$query);
    if($res){
    ?>
    <script>
    alert('User inserted');
    </script>
    <?php
    }
    else{
    ?>
    <script>
    alert('Not Inserted');
    </script>
    <?php
    }
}
?>