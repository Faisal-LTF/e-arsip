<?php

session_start();
if (!isset($_SESSION['nama'])) {
    echo "<script> alert('Silahkan login terlebih dahulu'); </script>";
    echo "<meta http-equiv='refresh' content='0; url=../e-arsip/index.php'>";
} else {

    include '../layouts/header.php';
    include '../layouts/sidebar.php';
    include '../db/koneksi.php';

    $id = $_SESSION['id_user'];


?>
<?php
    error_reporting(0);
    switch ($_GET['page']) {
        default:

            if ($level === '0') {
                include "../public/dashboard.php";
            } elseif ($level === '2') {
                include "../public/dashboard-masyarakat.php";
            } elseif ($level === '3') {
                include "../public/dashboard-camat.php";
            }
            break;


            /////////////////////////////////////////////// START ADMIN PAGE
        
            // PEGAWAI
        case "data_pegawai";
            include "../pages/admin/pegawai/data.php";
            break;
        case "tambah_pegawai";
            include "../pages/admin/pegawai/add.php";
            break;
        case "edit_pegawai";
            include "../pages/admin/pegawai/edit.php";
            break;
        case "hapus_pegawai";
            include "../pages/admin/pegawai/delete.php";
            break;
        case "detailPegawai";
            include "../pages/admin/pegawai/detail.php";
            break;

            // PROFILE
        case "data_profile";
            include "../pages/admin/profile/data.php";
            break;

            // GOLONGAN
        case "data_golongan";
            include "../pages/admin/golongan/data.php";
            break;
        case "edit_golongan";
            include "../pages/admin/golongan/edit.php";
            break;
        case "hapus_golongan";
            include "../pages/admin/golongan/delete.php";
            break;

        

            // MASYARAKAT
        case "data_masyarakat";
            include "../pages/admin/masyarakat/data.php";
            break;
        case "tambah_masyarakat";
            include "../pages/admin/masyarakat/add.php";
            break;
        case "detail_masyarakat";
            include "../pages/admin/masyarakat/detail.php";
            break;
        case "edit_masyarakat";
            include "../pages/admin/masyarakat/edit.php";
            break;
        case "hapus_masyarakat";
            include "../pages/admin/masyarakat/delete.php";
            break;

            // USERS
        case "data_user";
            include "../pages/admin/user/data.php";
            break;
        case "tambah_user";
            include "../pages/admin/user/add.php";
            break;
        case "edit_user";
            include "../pages/admin/user/edit.php";
            break;
        case "edit_user_password";
            include "../pages/admin/user/edit_password.php";
            break;
        case "hapus_user";
            include "../pages/admin/user/delete.php";
            break;
"../pages/admin/surat-perjalanan-dinas/delete.php";
            break;

            // SURAT MASUK
        case "data_suratMasuk";
        include "../pages/admin/surat-masuk/data.php";
        break;
    case "tambah_suratMasuk";
        include "../pages/admin/surat-masuk/add.php";
        break;
    case "edit_suratMasuk";
        include "../pages/admin/surat-masuk/edit.php";
        break;
    case "hapus_suratMasuk";
        include "../pages/admin/surat-masuk/delete.php";

        // SURAT KELUAR
        case "data_suratKeluar";
        include "../pages/admin/surat-keluar/data.php";
        break;
    case "tambah_suratKeluar";
        include "../pages/admin/surat-keluar/add.php";
        break;
    case "edit_suratKeluar";
        include "../pages/admin/surat-keluar/edit.php";
        break;
    case "hapus_suratKeluar";
        include "../pages/admin/surat-keluar/delete.php";
            //////////////////////////////////////////////////////////////////////// END ADMIN PAGE -----------


            //////////////////////////////////////////////////////// START  PAGAWAI PAGE--------------
            // PEGAWAI
        case "dataPegawai";
            include "../pages/other/pegawai/data.php";
            break;
        case "tambahPegawai";
            include "../pages/other/pegawai/add.php";
            break;
        case "editPegawai";
            include "../pages/other/pegawai/edit.php";
            break;
        case "hapusPegawai";
            include "../pages/other/pegawai/delete.php";
            break;
        
            // USERS
        case "dataUser";
            include "../pages/other/user/data.php";
            break;
        case "editUser";
            include "../pages/other/user/edit.php";
            break;
        case "edit_User_password";
            include "../pages/other/user/edit_password.php";
            break;
        case "hapusUser";
            include "../pages/other/user/delete.php";
            break;

            ///////////////////////////////////////////////////////////////// END PEGAWAI PAGE ---------



            ///////////////////////////////////////////////////////////// START MASYARAKAT PAGE------------------
        // MASYARAKAT
        case "dataMasyarakat";
            include "../pages/masyarakat/data-masyarakat/data.php";
            break;
        case "tambahMasyarakat";
            include "../pages/masyarakat/data-masyarakat/add.php";
            break;
        case "editMasyarakat";
            include "../pages/masyarakat/data-masyarakat/edit.php";
            break;
        case "hapusMasyarakat";
            include "../pages/masyarakat/data-masyarakat/delete.php";
            break;
            case "detailMasyarakat";
            include "../pages/masyarakat/data-masyarakat/detail.php";
            break;
            /////////////////////////////////////////////////////////////////END PAGE MASYARAKAT --------

            ///////////START PAGE CAMAT---------------------
        //    ???????

            //////////// END QRCODE PREVIEW ////////////////////
    }
?>

<?php
    include '../layouts/footer.php';
}
?>