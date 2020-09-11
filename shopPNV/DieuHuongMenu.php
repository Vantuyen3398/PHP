<?php
           if (isset($_GET['option']))
          {
                switch($_GET['option'])
          {
            case "Bai1":
              include 'thuchanh/Bai1.php';break;
            case "Bai2":
              include 'thuchanh/Bai2.php';break;
            case "Bai3":
              include 'thuchanh/Bai3.php';break;
            case "Bai4":
              include 'thuchanh/Bai4.php';break;
            case "Bai5":
              include 'thuchanh/Bai5.php';break;
            case "Bai6":
              include 'thuchanh/Bai6.php';break;
            case "Bai7":
              include 'thuchanh/bai7/theloai.php';break;
            case "Bai8":
              include 'thuchanh/bai8/bai8.php';break;
            case "Bai9":
              include 'thuchanh/bai9/bai9.php';break;
            case "Bai10":
              include 'thuchanh/Bai10/session/index.php';
               case "Bai11":
              include 'thuchanh/Bai11/bai11.php';
              break;
            case "xuat_mot_tin":
              include 'chuc_nang/xuat_mot_tin.php'; 
                        break;
            case "xuat_san_pham_2":
            include 'chuc_nang/san_pham/xuat_toan_bo_san_pham_cho_menu_NGANG.php';          break;
          }
          }
        ?>         