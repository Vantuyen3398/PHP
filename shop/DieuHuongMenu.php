<?php
           if (isset($_GET['option']))
          {
                switch($_GET['option'])
          {
            case "Bai1":
              include 'thuchanh/bai1.php';break;
            case "Bai2":
              include 'thuchanh/bai2.php';break;
            case "Bai3":
              include 'thuchanh/bai3.php';break;
            case "Bai4":
              include 'thuchanh/bai4.php';break;
            case "Bai5":
              include 'thuchanh/bai5.php';break;
            case "Bai6":
              include 'thuchanh/bai6.php';break;
            case "Bai7":
              include 'thuchanh/bai7/theloai.php';break;
            case "Bai8":
              include 'thuchanh/bai8/bai8.php';break;
            case "Bai9":
              include 'thuchanh/bai9/bai9.php';break;
            case "Bai10":
              include 'thuchanh/bai10/session/index.php';break;
            case "Bai11":
              include 'thuchanh/bai11/bai11.php';
              break;
            case "Bai12":
              include 'thuchanh/bai12/index.php';
              break;
            case "Bai13":
              include 'thuchanh/bai13/index.php';
              break;
            case "Bai14":
              include 'thuchanh/bai14/index.php';
              break;
            case "Bai15":
              include 'thuchanh/bai15/index.php';
              break;
            case "xuat_mot_tin":
              include 'chuc_nang/xuat_mot_tin.php'; 
                        break;
            case "xuat_san_pham_2":
            include 'chuc_nang/san_pham/xuat_toan_bo_san_pham_cho_menu_NGANG.php';          break;
            case "gio_hang":
              include("chuc_nang/gio_hang/gio_hang.php");
              break;

          }
          }
        ?>         