<?php
//ambil value yang diinput user dan disimpan dalam variable
$proses = $_POST["proses"];
$nama = $_POST["nama"];
$matkul = $_POST["matkul"];
$uts = $_POST["uts"];
$uas = $_POST["uas"];
$praktikum = $_POST["praktikum"];
$rata_rata = ($uts+$uas+$praktikum)/3;
$keterangan = keterangan($rata_rata);
$grade = grade($rata_rata);

function keterangan ($rata_rata){
    if($rata_rata >= 55 && $rata_rata <=100) {
        return 'Anda Lulus';
    }else{
        return 'Anda tidak lulus';
    }
}

function grade($rata_rata){
    if ($rata_rata >= 85 && $rata_rata <=100) {
        return "A (Sangat baik)";
    } elseif ($rata_rata >= 70 && $rata_rata <=84) {
        return "B (baik)";g
    } elseif ($rata_rata >= 56 && $rata_rata <=69) {
        return "C (Cukup)";
    }  elseif ($rata_rata >= 36 && $rata_rata <=55) {
        return "D (Kurang)";
    } elseif ($rata_rata >= 0 && $rata_rata <=35) {
        return "E (Sangat Kurang)";
    }else{
        return "I (Tidak Nilai)";
    }
    }

//panggil variabel yang meiliki value kolom, tampilkan menggunkana echo
echo "Proses : $proses";
echo "<br>Nama Lengkap : $nama";
echo "<br>Mata Kuliah : $matkul";
echo "<br>Nilai UTS : $uts";
echo "<br>Nilai UAS : $uas";
echo "<br>Nilai Praktikum : $praktikum";
echo "<br>Rat-rata Nilai : $rata_rata";
echo "<br>Rat-rata Nilai : $rata_rata";
echo "<br>Keterangan : $keterangan";
echo "<br>Grade : $grade"
?>