<html>

<head>
    <title>YPlane | Tiket Pesawat Murah</title>
    <link rel="icon" href="image/logo.png">
    <link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
</head>

<body>
    <?php include "nav.php"; ?>
    <div class="container">
        <div class="row">
            <div class="col s12">
                <div class="card-panel default">
                    <center>
                        <h1>Daftar Tiket Yang Tersedia</h1>
                    </center>
                    <?php
                    $tgl= array("10/02/2021","10/02/2021","10/02/2021","10/02/2021");
                    $dari= array("samarinda","balikpapan","surabaya","jakarta");
                    $tujuan= array("surabaya","surabaya","balikpapan","balikpapan");
                    $harga= array(1000000,1500000,1200000,1100000);                         
                    $type= array("ekonomi","ekonomi","ekonomi","ekonomi");
                    $totalarray = count($tgl);
                    echo "<table>";
                    echo "<thead>";
                    echo "<tr>";
                    echo "<td>Tanggal Berangkat</td>";
                    echo "<td>Dari</td>";
                    echo "<td>Tujuan Ke</td>";
                    echo "<td>Harga Tiket</td>";
                    echo "<td>Type</td>";
                    echo "</tr>";
                    echo "</thead>";
                    echo "<tbody>";
                    for($i=0; $i<4; $i++){
                        echo "<tr>";
                        echo "<td>$tgl[$i]</td>";
                        echo "<td>$dari[$i]</td>";
                        echo "<td>$tujuan[$i]</td>";
                        echo "<td>$harga[$i]</td>";
                        echo "<td>$type[$i]</td>";
                        ?>
                        <td><a href="booking.php?id_rute=<?=$i;?>"><button class="btn waves-effect"><i class="ion-ios-book"></i> Pesan</button></a></td>
                        <?php                        
                        echo "</tr>";
                        }    
                    echo "</tbody>";
                    echo "</table>";
                    ?>
                </div>
            </div>
        </div>
    </div>
    <?php include "footer.php";?>
</body>

</html>
