<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form LPM Jabar</title>
    <link rel="stylesheet" href="src/styles.css">    
    <script src="src/script.js"></script>
</head>
    <body>    
        <form name="register" id="uploadForm" action="Process.php" method="post" autocomplete="off">
            <h2 style="text-align: center">Form LPM	Jabar</h2>
                <div>
                    Nama <input type="string" name="name">
                </div>
                <div>
                    NIK <input type="number" name="noik">
                </div>
                <div>
                    Nomor Kartu Keluarga <input type="number" name="nokk">
                </div>
                <div>
                    Foto KTP <input type="file" name="fktp" accept="image/jpeg, image/png, image/bmp">
                </div>
                <div>
                    Foto Kartu Keluarga <input type="file" name="fkartukeluarga" accept="image/jpeg, image/png, image/bmp">
                </div>
                <div>
                    <p>Umur</p> <input type="number" name="age" min="25">
                </div>
                <div>
                    <p>Jenis Kelamin</p>
                    <select type="jenis" id="jenisKelamin" name="gender">
                        <option value="">Pilih Jenis Kelamin</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div>
                    <p>Provinsi</p>
                    <select type="jenis" id="provinsi" name="prov" onchange="loadKabko()" onclick="loadProvinsi()">
                        <option value="">Pilih Provinsi</option>
                    </select>
                </div>
                <div>
                    <p>Kab/Kota</p>
                    <select type="jenis" id="kabko" name="kab" onchange="loadKecamatan()">
                        <option value="">Pilih Kab/Kota</option>
                    </select>
                </div>
                <div>
                    <p>Kecamatan</p>
                    <select type="jenis" id="kecamatan" name="kec" onchange="loadKeldes()">
                        <option value="">Pilih Kecamatan</option>
                    </select>
                </div>
                <div>
                <p>Kelurahan/Desa</p>
                    <select type="jenis" id="keldes" name="kel">
                        <option value="">Pilih Kelurahan/Desa</option>
                    </select>
                </div>
                <div>
                    Alamat <textarea type="string" name="address" cols="30" rows="5"></textarea>
                </div>
                <div>
                    RT <input type="string" name="rtt">
                </div>
                <div>
                    RW <input type="string" name="rww">
                </div>
                <div>
                    Penghasilan sebelum pandemi <input type="number" name="psebp"></div>
                <div>
                    Penghasilan setelah pandemi <input type="number" name="psetp">
                </div>
                <div>
                    Alasan membutuhkan bantuan <textarea type="string" name="amb" cols="30" rows="5"></textarea>
                </div>
                <div>
                    <input type="checkbox" id="pernyataan" name="pernyataan" required>
                    Saya menyatakan bahwa data yang diisikan adalah benar dan siap mempertanggungjawabkan apabila ditemukan ketidaksesuaian dalam data tersebut.
                </div><br>
                <div>
                    <input type="submit" name="submit" value="Submit">
                </div>
        </form>
    </body>
</html>