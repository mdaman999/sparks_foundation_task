<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank System</title>
    <style>
        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Times New Roman', Times, serif;
}
nav{
    position: fixed;
    width: 100%;
    height: 15vh;
    background-color: rgba(0, 0, 0,0.6);
    display: flex;
    align-items: center;
    justify-content: space-around;
    z-index: 3;
}
nav img{
    width: 60px;
    height: 10vh;
    cursor: pointer;
}
nav ul{
display: flex;
width: 60%;
justify-content: space-around;

}
nav ul li{
position: relative;
list-style: none;
}
nav ul li::before{
    content: '';
    position: absolute;
    bottom: -30%;
    width: 40%;
    height: 3px;
    background-color: #fff;
   transition:all 0.4s ease;
}
nav ul li:hover::before{
    width: 100%;
}
nav ul li a{
    text-decoration: none;
    text-transform: uppercase;
    letter-spacing:3px;
    color: #fff;
}
.content{
    width: 100%;
    height: 120vh;
    background-image: url('b5.jpg');
    background-position: center;
    background-repeat: no-repeat;
    background-size: 100% 100%;
}
.overlay{
    width: 100%;
    height: 100%;
    background-color: rgba(0,0,0,0.7);
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
.content .overlay h1,
.content .overlay h2,
.content .overlay p{
    z-index: 2;
    color: #fff;
    padding: 10px 0;
}
.act{
    width: 100%;
    height: 70vh;
    display: grid;
    place-items:center;
    grid-template-columns: repeat(3,1fr);
    grid-template-rows:70vh;
}
.box{
    margin: 20px;
    background-color: #878787;
    display: flex;
    flex-direction: column;
    border-radius: 10px;
    align-items: center;
}
.act .box img{
    width: 100%;
    height:60%;
    border-radius: 10px 10px 0 0;
}
.act .box a{
    text-decoration: none;
    text-transform: uppercase;
    background-color: #fff;
    color: #000;
    font-weight:600;
    margin: 20px 0;
    width: 60%;
    text-align: center;
    padding: 7px;
    border-radius:5px;
    transition: all 0.4s ease;
}
.act .box a:hover{
    background-color: #000;
    color: #fff;
}

    </style>
</head>
<body>
    <nav>
        <a href="index.php"><img src="logo.png" alt="logo not found"></a>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="newuser.php">New User</a></li>
            <li><a href="alluser.php">All Users</a></li>
            <li><a href="transfer.php">Transfer</a></li>
            <li><a href="#">Contact Us</a></li>
        </ul>
    </nav>
    <div class="content">
        <div class="overlay">
            <h1>Welcome to Sparks Foundation Bank</h1>
            <h2>#GRIPOCTOBER21</h2>
            <p>Here, it is a demo banking system which have some features like view all user with their details and transfer money from one user toanother user.</p>
        </div>

    </div>
    <div class="act">
        <div class="box box1">
            <img src="b2.jpg">
            <a href="newuser.php">New User</a>
        </div>
        <div class="box box2">
            <img src="b5.jpg">
            <a href="alluser.php">All User</a>
        </div>
        <div class="box box3">
            <img src="b3.jpg">
            <a href="transfer.php">Transfer Money</a>
        </div>
    </div>
</body>
</html>