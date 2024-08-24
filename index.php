
        <?php 
        if(isset($_GET['x']) && $_GET['x']=='beranda'){
            $page = "beranda.php";
            include "main.php";
        }elseif (isset($_GET['x']) && $_GET['x']=='booking'){
            $page = "booking.php";
            include "main.php";
        }elseif(isset($_GET['x']) && $_GET['x']=='room'){
            $page = "room.php";
            include "main.php";
        }elseif(isset($_GET['x']) && $_GET['x']=='tentang'){
            $page = "tentang.php";
            include "main.php";
        }elseif(isset($_GET['x']) && $_GET['x']=='kontak'){
            $page = "kontak.php";
            include "main.php";
        }elseif(isset($_GET['x']) && $_GET['x']=='login'){
            include "login.php";
        }else {
            include "main.php";
        }
        ?>
    