// Fetch List Provinsi
function loadProvinsi(){
    let xhr = new XMLHttpRequest();
    xhr.open(
        "GET",
        `https://www.emsifa.com/api-wilayah-indonesia/api/provinces.json`
    );

    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            let provinsi = JSON.parse(xhr.responseText);
            for (let i = 0; i < provinsi.length; i++) {
                console.log(provinsi[i]);
                let provinsiSelect = document.getElementById("provinsi");
                let option = document.createElement("option");
                option.value = provinsi[i].id;
                option.text = provinsi[i].name;
                provinsiSelect.add(option);
            }
        }
    };
    xhr.send();
}

// Fetch List Kab/Kota
function loadKabko(){
    let xhr = new XMLHttpRequest();
    let provinsiId = document.getElementById("provinsi").value;
    let kabkoSelect = document.getElementById("kabko");
    xhr.open(
        "GET",
        `https://www.emsifa.com/api-wilayah-indonesia/api/regencies/${provinsiId}.json`
    );

    while (kabkoSelect.firstChild){
        kabkoSelect.removeChild(kabko.firstChild);
    }
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            let kabko = JSON.parse(xhr.responseText);
            kabkoSelect.innerHTML = "<option value=''> -- Pilih Kab/Kota"
            for (let i = 0; i < kabko.length; i++) {
                // console.log(kabko[i]);

                let option = document.createElement("option");
                option.value = kabko[i].id;
                option.text = kabko[i].name;
                kabkoSelect.add(option);
            }
        }
    };
    xhr.send();
}

// Fetch List Kecamatan
function loadKecamatan(){
    let xhr = new XMLHttpRequest();
    let kabkoId = document.getElementById("kabko").value;
    let kecamatanSelect = document.getElementById("kecamatan");
    xhr.open(
        "GET",
        `https://www.emsifa.com/api-wilayah-indonesia/api/districts/${kabkoId}.json`
    );

    while (kecamatanSelect.firstChild){
        kecamatanSelect.removeChild(kecamatan.firstChild);
    }
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            let kecamatan = JSON.parse(xhr.responseText);
            kecamatanSelect.innerHTML = "<option value=''> -- Pilih Kecamatan"
            for (let i = 0; i < kecamatan.length; i++) {
                // console.log(kecamatan[i]);

                let option = document.createElement("option");
                option.value = kecamatan[i].id;
                option.text = kecamatan[i].name;
                kecamatanSelect.add(option);
            }
        }
    };
    xhr.send();
}

// Fetch List Kelurahan/Desa
function loadKeldes(){
    let xhr = new XMLHttpRequest();
    let kecamatanId = document.getElementById("kecamatan").value;
    let keldesSelect = document.getElementById("keldes");
    xhr.open(
        "GET",
        `https://www.emsifa.com/api-wilayah-indonesia/api/villages/${kecamatanId}.json`
    );

    while (keldesSelect.firstChild){
        keldesSelect.removeChild(keldes.firstChild);
    }
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            let keldes = JSON.parse(xhr.responseText);
            keldesSelect.innerHTML = "<option value=''> -- Pilih Kelurahan/Desa"
            for (let i = 0; i < kecamatan.length; i++) {
                // console.log(keldes[i]);

                let option = document.createElement("option");
                option.value = keldes[i].id;
                option.text = keldes[i].name;
                keldesSelect.add(option);
            }
        }
    };
    xhr.send();
}
