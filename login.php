<html>

<head>
    <title>YPLane | login</title>
    <link rel="icon" href="image/logo.png">
    <link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <style>
        .b {
            background-size: cover;
        }

    </style>
</head>

<body style="background: url(image/bg.jpg); background-size: cover;" class="trans">
    <div class="white-text" style="background-color: rgba(0, 0, 0, 0.50); width: 80%; height:85%; margin-top: 3%; margin-left: 10%;">
        <center>
            <div style="padding-top: 20px;">
                <a href="index.php" onclick="window.close();">
                    <img src="image/logo.png" class="img-responsive" style="width: 100px; height: 100px;">
                </a>
                <p style="font-family: News701 BT; font-size: 21px; font-color:rgba(255, 255, 255); padding-bottom: 10px;"><b>YPLane</b></p>
                <p style="font-family: News701 BT; font-size: 21px;">Login dulu bro, baru <b>Beli Tiket</b></p>
                <div class="container" style="width: 500px;">
                    <form method="post" action="login_p.php">
                        <label class="left" style="font-size: 16px;" for="pass">Username = a</label>
                        <div class="input-field">
                            <input type="text" name="username" id="user">
                        </div>
                        <label class="left" style="font-size: 16px;" for="pass">Password = a</label>
                        <div class="input-field">
                            <input type="password" name="password" id="pass">
                        </div>
                        <a href="login_p.php" style="font-family: segoe ui light;"><button class="btn waves-effect">login  <i class="ion-log-in"></i></button></a>
                    </form>
                </div>
            </div>
        </center>
    </div>
</body>

</html>
