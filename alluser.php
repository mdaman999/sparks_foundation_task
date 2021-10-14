<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction</title>
    <style>
        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}
body{
    width: 100%;
    min-width: 100vh;
    display: grid;
    place-items: center;
}
table{
    width: 80%;
    min-height: 70vh;
    border-radius: 10px;
    background-color: #333;
    color: #fff;
}
table,tr,td{
    border: 2px solid #fff;
    border-collapse: collapse;
    text-align: center;
    padding: 20px;
}
thead{
    font-weight: 600;
    letter-spacing: 3px;
    text-transform: uppercase;
    background-color: #000;
}
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <td>SR.No.</td>
                <td>User Name</td>
                <td>Email</td>
                <td>Account No</td>
                <td>Current Amount</td>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'conection1.php';
            $selectquery="select * from user";
            $query=mysqli_query($con,$selectquery);
            while($res=mysqli_fetch_array($query))
            {
            ?>
            <tr>
                <td><?php echo $res['id']?></td>
                <td><?php echo $res['name']?></td>
                <td><?php echo $res['email']?></td>
                <td><?php echo $res['account']?></td>
                <td><?php echo $res['amount']?></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</body>
</html>