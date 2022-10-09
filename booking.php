<html>

<head>
    <title>YPlane | Tiket Pesawat Murah</title>
    <link rel="icon" href="image/logo.png">
    <link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
</head>

<body>
    <?php include "nav.php"; ?>
    <?php
        $tgl= array("10/02/2021","10/02/2021","10/02/2021","10/02/2021");
        $dari= array("samarinda","balikpapan","surabaya","jakarta");
        $tujuan= array("surabaya","surabaya","balikpapan","balikpapan");
        $harga= array(1000000,1500000,1200000,1100000);                           
        $type= array("ekonomi","ekonomi","ekonomi","ekonomi");                           
        $user= array("232","456","111","311");                           
        $customer= array("01","02","03","04");                           
        $rute= array(0,1,2,3);                                   
        $seat= array("33","5","23","11");
    ?>
    <div class="container">
        <div class="row">
            <div class="col s7">
                <div class="card-panel">
                    <h3>Customer</h3>
                    <form method="post" action="pesan.php">
                    <label for="name">Kode Booking</label>
                        <div class="input-field">
                            <?php
                            $rang = range(1, 9);
                            shuffle($rang);
                            $c = implode($rang);
                            $res_code = $c;
                            ?>
                            <input type="text" name="res_code" id="name" value="<?=$res_code;?>">
                        </div>
                        <?php
                        $id_rute = $_GET['id_rute'];
                        ?>
                            
                            <label for="phone">Kode Kursi</label>
                            <div class="input-field">
                                
                                    <input type="text" name="seat" id="phone" value="<?=$seat[$id_rute];?>">
                            </div>
                            <div class="input-field">
                                <p class="grey-text">Berangkat Tanggal</p>
                                <input type="text" name="depart" value="<?=$tgl[$id_rute];?>">
                            </div>
                                <label for="h">Harga Tiket</label>
                            <div class="input-field">
                                <input type="number" name="price" id="h" value="<?=$harga[$id_rute];?>">
                            </div>
                                    <label for="iu">ID User</label>
                            <div class="input-field">
                                    <input type="text" name="id_user" id="iu" value="<?=$user[$id_rute];?>">
                            </div>
                                    <label for="ic">ID Customer</label>
                            <div class="input-field">
                                    <input type="text" name="id_customer" id="ic" value="<?=$customer[$id_rute];?>" required>
                            </div>
                                <label for="ir">ID Rute</label>
                            <div class="input-field">
                                <input type="text" name="id_rute" id="ir" value="<?=$rute[$id_rute];?>">
                            </div>
                                <label for="status">Status</label>
                            <div class="input-field">
                                <input type="text" name="status" id="status" value="Proses" class="disabled">
                            </div>
                            <a href="booking.php?id_rute=<?=$id_rute;?>"><button class="btn waves-effect"><i class="ion-load-c"></i> pesan</button></a>
                           
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php include "footer.php";?>
</body>

</html>
