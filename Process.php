<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Penduduk</title>
    <link rel="stylesheet" href="src/styles.css">    
    <script src="src/script.js"></script>
</head>
    <body>
        <form name="register">
            <h2 style="text-align: center">Data Penduduk</h2>
                <?php
                if (isset($_POST['submit'])){
                    $nama = $_POST['name'];
                    echo "Nama: " . $nama . "<br />";
                    $nik = $_POST['noik'];
                    echo "NIK: " . $nik . "<br />";
                    $nkk = $_POST['nokk'];
                    echo "No KK: " . $nkk . "<br />";
                    $fotoktp = $_POST['fktp'];
                    echo "Foto KTP: " . $fotoktp . "<br />";
                    $fotokartukeluarga = $_POST['fkartukeluarga'];
                    echo "Foto KK: " . $fotokartukeluarga . "<br />";
                    $umur = $_POST['age'];
                    echo "Umur: " . $umur . "<br />";
                    $jenisKelamin = $_POST['gender'];
                    echo "Jenis Kelamin: " . $jenisKelamin . "<br />";
                    $provinsi = $_POST['prov'];
                    echo "Provinsi: " . $provinsi . "<br />";
                    $kabupaten = $_POST['kab'];
                    echo "Kab/kota: " . $kabupaten . "<br />";
                    $kecamatan = $_POST['kec'];
                    echo "Kecamatan: " . $kecamatan . "<br />";
                    $kelurahan = $_POST['kel'];
                    echo "Kelurahan/desa: " . $kelurahan . "<br />";
                    $alamat = $_POST['address'];
                    echo "Alamat: " . $alamat . "<br />";
                    $rt = $_POST['rtt'];
                    echo "RT: " . $rt . "<br />";
                    $rw = $_POST['rww'];
                    echo "RW: " . $rw . "<br />";
                    $penghasilanSebelumpandemi = $_POST['psebp'];
                    echo "Penghasilan sebelum pandemi: " . $nama . "<br />";
                    $penghasilanSetelahpandemi = $_POST['psetp'];
                    echo "Penghasilan setelah pandemi: " . $penghasilanSetelahpandemi . "<br />";
                    $alasanMembutuhkanbantuan = $_POST['amb'];
                    echo "Alasan membutuhkan bantuan: " . $alasanMembutuhkanbantuan . "<br />";
                }
                ?>
        </form>
    </body>
</html>