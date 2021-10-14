<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction</title>
    <style>
        *{
    margin: 0;padding: 0;box-sizing: border-box;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
}
body{
    width: 100%;
    height: 100vh;
    display: flex;
    flex-direction: column; 
    align-items: center;
    justify-content: space-around;
}

form{
    width: 70%;
    height: 70vh;
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    background-color:#000;
    color: #fff;
    padding: 30px 50px;
    border-radius: 10px;
}

form select,
form input[type="text"]{
    padding: 10px;
    border-radius: 5px;
    border: none;
}
form input[type="submit"]{
    width: 30%;
    padding:10px 20px;
    border: none;
    border-radius: 10px;
    letter-spacing: 3px;
    text-transform: uppercase;
    align-self: center;
    background-color: greenyellow;
    transition: 0.4s;
}
form input[type="submit"]:hover{
    background-color: green;
    color: #fff;
}

    </style>
</head>
<body>
    <h1>Transaction Process</h1>
    <form method="POST">
    <label for="from">From:</label>
        <select id="from" name="from" required>
        <option></option>
        <?php
           include 'conection1.php';
           $selectquery="select * from user";
           $query=mysqli_query($con,$selectquery);
           while($res1=mysqli_fetch_array($query))
           {
        ?>
        <option>
        <?php echo $res1['name'];?>
        </option>
        <?php
           }
        ?>
        </select>

        <label for="to">To:</label>
        <select id="to" name="to" required>
        <option></option>
        <?php
           include 'conection1.php';
           $selectquery="select * from user";
           $query=mysqli_query($con,$selectquery);
           while($res2=mysqli_fetch_array($query))
           {
        ?>
        <option>
        <?php echo $res2['name'];?>
        </option>
        <?php
           }
        ?>
        </select>
        <label for="amount">Amount:</label>
        <input type="text" name="amount" id="amount" required>
        <input type="submit" name="transfer" value="Transfer">
        </form>
</body>
</html>

<?php
include('conection1.php');
if(isset($_POST['transfer']))
{
    $from=$_POST['from'];
    $to=$_POST['to'];
    $amount=$_POST['amount'];

    $selectquery="select * from user where name='$from'";
    $query=mysqli_query($con,$selectquery);
    $res1=mysqli_fetch_array($query);

    $selectquery = "select * from user where name='$to'";
    $query = mysqli_query($con,$selectquery);
    $res2 = mysqli_fetch_array($query);
    
    if($amount<0){
?>
        <script>alert("Zero value not Inserted")</script>
<?php
    }
    else if($amount==0){
?>
        <script>alert("Zero value not Inserted")</script>
<?php
    }
    else if($amount>$res1['amount']){
?>
        <script>alert("Zero value not Inserted")</script>
<?php
    }
    else{
        $newbalance = $res1['amount'] - $amount;
        $sql = "UPDATE user set amount=$newbalance where name='$from'";
        mysqli_query($con,$sql);
             
        $newbalance = $res2['amount'] + $amount;
        $sql = "UPDATE user set amount=$newbalance where name='$to'";
        mysqli_query($con,$sql);
?>
        <script>alert("Transfred successful")</script>
<?php
       }
}
?>