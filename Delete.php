 <?php

require_once('Connection.php');

$nidn = isset($_POST['NIDN']) ? $_POST['NIDN'] : '';
$nama = isset($_POST['Nama']) ? $_POST['Nama'] : '';
$matakuliah = isset($_POST['MataKuliah']) ? $_POST['MataKuliah'] : '';
$jurusanmengajar = isset($_POST['JurusanMengajar']) ? $_POST['JurusanMengajar'] : '';
$hadir =  isset($_POST['Hadir']) ? (int)$_POST['Hadir'] : 0;
$sakit =  isset($_POST['Sakit']) ? (int)$_POST['Sakit'] : 0;
$izin =  isset($_POST['Izin']) ? (int)$_POST['Izin'] : 0;
$alpha = isset($_POST['Alpha']) ? (int)$_POST['Alpha'] : 0;
$jammasuk = isset($_POST['JamMasuk']) ? $_POST['JamMasuk'] : '';
$jamkeluar = isset($_POST['JamKeluar']) ? $_POST['JamKeluar'] : '';
$tanggal = isset($_POST['Tanggal']) ? $_POST['Tanggal'] : '';
$tanggaltidakhadir = isset($_POST['TanggalTidakHadir']) ? $_POST['TanggalTidakHadir'] : '';

// warning, dont make nidn empty in here 
$query = mysqli_query($CON,"DELETE FROM dosen WHERE NIDN ='$nidn'");

    if($query){
        echo json_encode(array('message' => 'data successfull deleted'));
    } else {
        echo json_encode(array('message' => 'data fail deleted'));
    }

?>