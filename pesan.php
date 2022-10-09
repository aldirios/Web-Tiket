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
    ?>
    <div class="container">
        <div class="row">
            <div class="col s5">
                <div class="card-panel black-text" style= "font-size:18;">
                    <h4>Proses Booking</h4>
                    <?php
                        $id = $_POST['id_rute'];
                        $bocode = $_POST['res_code'];
                        ?>
                        <b>Tanggal Berangkat</b>
                        <p class="black-text">
                            <?=$tgl[$id];?>
                        </p>
                        <br/>
                        <b>Dari</b>
                        <p class="black-text">
                            <?=$dari[$id];?>
                        </p>
                        <br/>
                        <b>Tujuan Ke</b>
                        <p class="black-text">
                            <?=$tujuan[$id];?>
                        </p>
                        <br/>
                        <b>Harga Tiket</b>
                        <p class="black-text"><i>Rp.</i>
                            <?=$harga[$id];?>
                        </p>
                        <br/>
                </div>
            </div>
            <div class="col s7">
                <div class="card-panel">
                    <h3>Customer</h3>
                    <form method="post" action="cetak.php">
                        <label for="name">code booking</label>
                        <div class="field">
                            <input type="text" name="res_code" id="code" value="<?=$bocode;?>">
                        </div>
                        <label for="name">id</label>
                        <div class="input-field">
                            <input type="text" name="id_rute" id="ir" value="<?=$id;?>">
                        </div>
                        <label for="name">Nama</label>
                        <div class="input-field">
                            <input type="text" name="name" id="name" >
                        </div>
                        <label for="addr">Alamat</label>
                        <div class="input-field">
                            <input type="text" name="address" id="addr">
                        </div>
                        <label for="phone">No. Telp/ No. HP</label>
                        <div class="input-field">
                            <input type="text" name="phone" id="phone" value="+62">
                        </div>
                        <select class="browser-default" name="gender">
                            <option disabled selected>Jenis Kelamin :</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                        <button class="btn waves-effect"><i class="ion-load-c"></i> Booking</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php include "footer.php";?>
</body>

</html>
