<?php 
include "session_admin.php";
include "function.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<meta name="description" content="" />
<title>ร้านค้าออนไลน์</title>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
<script type="text/javascript" src="images/jquery-1.5.2.min.js"></script>
<script type="text/javascript" src="slimbox/js/slimbox2.js"></script>
<link rel="stylesheet" href="slimbox/css/slimbox2.css" type="text/css" media="screen" />

<link rel="stylesheet" type="text/css" href="css_style_index.css" />
<link rel="stylesheet" type="text/css" href="css_style_menu.css" />
<link rel="stylesheet" type="text/css" href="css_style_board.css" />
<link rel="stylesheet" type="text/css" href="css_style_page.css" />
</head>
<body id="Page0">
<div id="container">
  <div id="bander_back">
    <?PHP include "bander_back.php"; ?>
    <div id="menu_top">
     	 <p>
       	 <?PHP include "menu_top2.php"; ?>
      	</p>
    </div>
  </div>
  
 <div class="menu_left"><!-- เมนูด้านซ้าย -->
	<?PHP  include "menu_left_back.php"; ?>
  </div><!-- จบเมนูด้านซ้าย --> 

<div class="data_center"><!-- ส่วนกลางของเว็บ -->
	<div class="data_center_back">
	  <table width="100%" height="850" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td align="left" valign="top">
                <div class="title">
                    <h2> ข้อมูลส่วนตัว</h2>
                </div>
				<table border="0" cellpadding="0" cellspacing="0" style="border-top: 0px solid #eee; width:100%; padding:0px; margin:0px;">
                  <tr>
                    <td align="left" valign="middle">
<?php
//ติดต่อฐานข้อมูล
include "connect_db.php";

//
if(!isset($start)){
$start = 0;
}
$limit = 5;//$NUMMAX; // แสดงผลหน้าละกี่หัวข้อ
$Search = trim($_POST['txtSearch']); //ตัดซ่องวางของสตริง

	$Qtotal = mysqli_query($con,"SELECT * FROM  ".$member." WHERE mb_id='".$_GET['ID']."' "); //คิวรี่ คำสั่ง
	$total = mysqli_num_rows($Qtotal); // หาจำนวน record 
	$Query = mysqli_query($con,"SELECT * FROM ".$member." WHERE mb_id='".$_GET['ID']."' ORDER BY mb_id DESC LIMIT $start,$limit"); //คิวรี่คำสั่ง

$totalp = mysqli_num_rows($Query); // หาจำนวน record ที่เรียกออกมา
$page = ceil($total/$limit); // เอา record ทั้งหมด หารด้วย จำนวนที่จะแสดงของแต่ละหน้า
//
$cols = 1; 
$c = $cols;
?>
                        <table style="width: 100%; ">
                          <tr>
                            <?php
while($result = mysqli_fetch_array($Query)){
$detail_product = substr($result['prd_detail'], 0, 70) . "";
$c --;2
?>                   
                                <?PHP
			 ?>
                              </div>
                                <div id="prd_line_height">
                                  <ul id="prd_ul" style="margin-left: -100px;">
                                    <li id="prd_li2" style="background:none;">  <img src="images/diagram32.png" width="32" height="32" /><strong>Login เข้าระบบ </strong>: <?=$result['mb_user']?></li>
                                    <li id="prd_li2"><strong>
									  ชื่อ - สกุล :   </strong>
                                      <?=$result['mb_name']?>
									</li>
                                    <li id="prd_li2"><strong>ที่อยู่ :</strong> 
                                    <?=$result['mb_address']?></li>
									<li id="prd_li2"><strong>เบอร์โทร :</strong> 
								    <?=$result['mb_tel']?></li>
									<li id="prd_li2"><strong>อีเมล์ :</strong> 
								    <?=$result['mb_email']?></li>
									
                                    
                                    <li id="prd_li2" style="background:none;">
									<ul class="ul_type" style="margin-top: 3px; margin-left: 5px;">
 		 								<li id="li_type" style="border-left: 1px solid #ddd; font-size:15px;"> 
										<a href="edit_profile.php?m_page=<?=$_GET['m_page']?>&amp;ID=<?=$result['mb_id']?>">
									   <img src="images/pencil_16.png" width="16" height="16" border="0" /> แก้ไขข้อมูลส่วนตัว </a></li>
		 							</ul>
									</li>
                                  </ul>
                              </div>
                            </td>
                            <?php
	if($c == 0) {
	$c = $cols;
?>
                          </tr>
                          <?php } } ?>
                      </table></td>
                  </tr>
                </table>
                </td>
            </tr>
          </table>
	  	  <p>&nbsp;</p>

    </div>
	  
		<!-- เมนูด้านซ้าย -->
	    <p style="clear:both;"></p>
  		<!-- ปิด เมนูด้านซ้าย -->
	  
  </div>
<div id="footer_front">
	<div class="data_footer">
      <p>
        <?PHP include "footer.php"; ?>
      </p>
      
	</div>
	
</div>
<div style="clear:both;"></div>
	   <!-- End menu -->
</div>
	<!-- end Container -->
</body>
</html>
