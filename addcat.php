<?php
session_start() ;
require_once('config.php') ;
require_once('authadmin.php');
?>
<!DOCTYPE HTML>
<html>
    <meta charset="utf-8">
    <head>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
            <title>
        สินค้า OTOP 
        </title>
    </head>
        <body>
            <div class="container" style="width:100%;height:ๅ0%;margin:auto;padding:1em;text-align:right;top:0px;positon:fixed;background-color:#996515;color:white;">  
                <?php 
                echo "<span style='font-size:20px;'> ยินดีต้อนรับแอดมิน  ".$_SESSION['mem_user']."      " ;
                
                ?>
                <br>
                <a href="logout.php" style="font-size:10px;" class="btn btn-danger">ออกจากระบบ</a>
                <span style="float:left;font-size:26px;"> ระบบขายสินค้าออนไลน์ </span>
                </div>
            <br><br><br><br><br><br>
     
     <div class="container" style="font-size:26px;text-align:center;">
         
         <span style="font-size:36px;">เพิ่มประเภทสินค้า</span><br><br>
        
            <div class="container" style="width:80%;">
         <form action="addcatdb.php" method="post" >
        
        ชื่อประเภทสินค้า: <input type="text" style="width:50%;" placeholder="ขนม" name="cat_name"> 
             
            <br><br><br> <input type="submit" value="เพิ่ม" class="btn btn-success" style="font-size:24px;">
             <a href="admincat.php" style="font-size:24px;" class="btn btn-danger">กลับ</a>
             
         </form>
            </div>
         
                </div>
                
    </body>
</html>