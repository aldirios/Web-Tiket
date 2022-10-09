<html>

<head>
    <title>YPlane | Tiket Pesawat Murah</title>
    <link rel="icon" href="image/logo.png">
    <link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
</head>

<body>
    <?php
        $tgl= array("10/02/2021","10/02/2021","10/02/2021","10/02/2021");
        $dari= array("samarinda","balikpapan","surabaya","jakarta");
        $tujuan= array("surabaya","surabaya","balikpapan","balikpapan");
        $harga= array(1000000,1500000,1200000,1100000);                           
        $type= array("ekonomi","ekonomi","ekonomi","ekonomi");                                     
        $seat= array("33","5","23","11");
    ?>
    <div class="container">
        <div class="row">
            <div class="col s7">
                <div class="card">
                    <div class="card-title blue white-text">
                    <p>YPlane</p>
                    </div>
                    <?php
                    $id=$_POST['id_rute'];
                    $nama=$_POST['name'];
                    $add=$_POST['address'];
                    $hp=$_POST['phone'];
                    $jk=$_POST['gender'];
                    $bocode=$_POST['res_code'];
                    ?>
                    <div class="card-content">
                        <div class="row">
                            <div class="col s6">
                                    <form>
                                        <div class="input-field">
                                            <p>From</p>
                                            <input type="text" id="form" value="<?=$dari[$id];?>">
                                        </div>
                                            <div class="input-field">
                                            <p>To</p>
                                            <input type="text" id="to" value="<?=$tujuan[$id];?>">
                                        </div>
                                            <div class="input-field">
                                            <p>Date</p>
                                            <input type="text" id="date" value="<?=$tgl[$id];?>">
                                        </div>
                                    </form>
                            </div>
                            <div class="col s6">
                                <div class="input-field">
                                    <p>Class</p>
                                    <input type="text" id="depat" value="<?=$type[$id];?>">
                                </div>
                                <div class="input-field">
                                    <p>Seat</p>
                                    <input type="text" id="seat" value="<?=$seat[$id];?>">
                                </div>
                                <div class="input-field">
                                    <p>Price</p>
                                    <input type="text" id="price" value="Rp. <?=$harga[$id];?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col s6">
                                <img src="image/logo.png" class="center" style="width: 75px; height: 75px; margin-left: 100px;">
                            </div>
                            <div class="col s6">
                                <form>
                                    <div class="input-field">
                                        <p class="center">Booking Code</p>
                                        <input class="center" type="text" id="bocode" value="<?=$bocode;?>">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col s5">
                <div class="card">
                    <div class="card-title blue white-text">
                        <p>Customer</p>
                    </div>
                    <div class="card-content">
                            <form>
                                <div class="input-field">
                                    <p>Name</p>
                                    <input type="text" id="nama" value="<?=$nama;?>">
                                </div>
                                <div class="input-field">
                                    <p>Address</p>
                                    <input type="text" id="addr" value="<?=$add;?>">
                                </div>
                                <div class="col s6">
                                    <div class="input-field">
                                        <p>Phone Number</p>
                                        <input type="text" id="phone" value="<?=$hp;?>">
                                    </div>
                                </div>
                                <div class="col s6">
                                    <div class="input-field">
                                        <p>Gender</p>
                                        <input type="text" id="gender" value="<?=$jk;?>">
                                    </div>
                                </div>
                            </form>
                    </div>
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col s6">
                                <form>
                                    <div class="input-field">
                                        <p class="center">Booking Code</p>
                                        <input class="center" type="text" id="bocode" value="<?=$bocode;?>">
                                    </div>
                                </form>
                            </div>
                            <div class="col s6">
                                <img src="image/logo.png" class="center" style="width: 75px; height: 75px; margin-left: 10px;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<script>
    window.print();

</script>
