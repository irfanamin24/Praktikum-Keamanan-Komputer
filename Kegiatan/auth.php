<?php
    session_start();
    if ($_POST['TbLogin']) {
        $TxtUserID = $_POST['TxtUserID'];
        $TxtPassID = $_POST['TxtPassID'];
        
        if (trim($TxtUserID)=="") {
            $pesan[] = "Data User Name kosong";
        }
        if (trim($TxtPassID)=="") {
            $pesan[] = "Data Password kosong";
        }
        if (($TxtUserID=="admin") && ($TxtPassID=="admin")) {
            $SES_USERPLG = $TxtUserID;
            session_register("SES_USERPLG");
            $SES_UIDPLG = $TxtPassID;
            session_register("SES_UIDPLG");
            echo "<B>Berhasil Login.<br> Menu Admin ada disini</b>";
            exit;
        }
        else {
            $pesan[] = "User dan Passord belum benar";
        }
        if (! count($pesan)==0 ) {
            $TxtUserID = $_POST['TxtUserID'];
            echo "<br><br>";
            echo "<div align='left'>";
            echo "&nbsp; <b> Kesalahan Input : </b><br>";
            foreach ($pesan as $indeks=>$pesan_tampil) {
                echo "<font color='#FF0000'>";
                echo "&nbsp; &nbsp;";
                echo "$pesan_tampil <br>";
                echo "</font>";
            }
            echo "</div><br>";
        }
    }
?>