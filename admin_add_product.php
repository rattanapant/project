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
<style type="text/css">
.style2{ color:red; }
</style>
</head>
<body id="Page3">
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
          <td align="left" valign="top"><div class="title">
            <h2><img src="images/plus_48.png" width="48" height="48" /> เพิ่มสินค้าเข้าระบบ</h2>
          </div>
		  <form action="<?PHP $_SERVER['PHP_SELF']?>" method="post"  id="form1"  name="form1" enctype="multipart/form-data" onsubmit="return chk_txt();">
            <p>
              <script language="JavaScript" type="text/javascript">
				  	function chk_txt(){
					 if(document.form1.txt_name.value==""){
									alert("กรุณากรอก ชื่อสินค้าด้วยนะ");
									document.form1.txt_name.focus();
									return false;
						}
						else if(document.form1.txt_type.value=="0"){
									alert("กรุณาเลือกประเภทสินค้าด้วยนะ");
									return false;
							}
							else if(document.form1.prd_link_line.value==""){
									alert("กรุณากรอก Link Line Shop ด้วยนะ");
									document.form1.prd_link_line.focus();
									return false;
							} 
							
							else if(document.form1.txt_detail.value==""){
									alert("กรุณากรอก กรอกรายละเอียดสินค้าในถูกต้องด้วยนะ");
									document.form1.txt_detail.focus();
									return false;
							} 
							else if(document.form1.txt_price.value==""){
									alert("กรุณากรอก ราคาขายหน้าร้านด้วยนะ");
									document.form1.txt_price.focus();
									return false;
							}
							else {
									return true;
							}
						
					}
				  </script>
              </p>
            <p>&nbsp;</p>
            <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="21%" height="25" align="right" valign="middle"><strong>ชื่อสินค้า : </strong></td>
      <td width="79%" height="25"><input name="txt_name" type="text" id="txt_name"  style="width: 70%;" value="<?=$_POST['txt_name']?>"/>
          <span class="style2">*</span></td>
    </tr>
    <tr>
      <td height="25" align="right" valign="middle"><strong>ประเภทสินค้า : </strong></td>
      <td height="25"><select name="txt_type" id="txt_type" style="width: 50%; height:22px;">
        <option value="0" selected="selected">----เลือกประเภทสินค้า --------------</option>
        <?php
							include "connect_db.php";
							$sql_select = mysqli_query($con,"SELECT * FROM ".$product_type."");
							while($rs=mysqli_fetch_array($sql_select)) {
									$id =$rs['type_id'];
									$name =$rs['type_name'];
									
								if($_POST['txt_type']==$id){
										echo  "<option value =".$id." selected>".$name."</option>";
										}else{
										echo  "<option value = ".$id.">".$name."</option>";
										}					
							}
						?>
      </select>
          <span class="style2">*</span></td>
    </tr>
    <tr>
      <td height="25" align="right" valign="middle"><strong>Link Line Shop : </strong></td>
      <td height="25"><input name="prd_link_line"  type="text"  id="prd_link_line"  style="width:70%;" value="<?=$_POST['prd_link_line']?>"/>
          <span class="style2">*</span></td>
    </tr>
    <tr>
      <td height="25" align="right" valign="top"><strong>รายละเอียด : </strong></td>
      <td height="25"><textarea name="txt_detail" rows="5" id="txt_detail" style="width: 85%;"><?=$_POST['txt_detail']?></textarea>
          <span class="style2">*</span></td>
    </tr>
    <tr>
      <td height="25" align="right" valign="middle"><strong>ราคา : </strong></td>
      <td height="25"><input name="txt_price" type="number" min="1" max="1000000" id="txt_price"  style="width:20%;" value="<?=$_POST['txt_price']?>"/>
          <span class="style2">*</span></td>
    </tr>
    <tr>
      <td height="25" align="right" valign="middle"><strong>รูปสินค้า : </strong></td>
      <td height="25"><input name="FileUpload" type="file" id="FileUpload" size="45" />
          <span class="style2">*</span></td>
    </tr>
    <tr>
      <td height="25" align="right" valign="middle">&nbsp;</td>
      <td height="25"><input type="submit" name="Submit2" value="บันทึกข้อมูลสินค้า" /></td>
    </tr>
  </table>
</form>
		  <p>&nbsp;</p>
		  <p>&nbsp;</p>
		  <div class="title">
            <h2><img src="images/icon-05.png" width="32" height="32" /> ข้อมูลสินค้า </h2>
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
$limit = 10;//$NUMMAX; // แสดงผลหน้าละกี่หัวข้อ
$Search = trim($_POST['txtSearch']); //ตัดซ่องวางของสตริง
//
$Qtotal = mysqli_query($con,"SELECT * FROM  ".$product.""); //คิวรี่ คำสั่ง
$total = mysqli_num_rows($Qtotal); // หาจำนวน record 
//
$Date = date("Y-m-d");
$Query = mysqli_query($con,"SELECT * FROM ".$product." ORDER BY prd_id DESC LIMIT $start,$limit"); //คิวรี่คำสั่ง
 $totalp = mysqli_num_rows($Query); // หาจำนวน record ที่เรียกออกมา
$page = ceil($total/$limit); // เอา record ทั้งหมด หารด้วย จำนวนที่จะแสดงของแต่ละหน้า
//
$cols = 5; 
$c = $cols;
?>
                  <table style="width: 100%;">
                    <tr>
 <?php
while($result = mysqli_fetch_array($Query)){
$DetailPrd = substr($result['prd_detail'], 0, 15) . "...";
$c --;2
?>
        <td align="left" valign="top"><div style="text-align:left;  padding:5px; float:left; width: 110px;">
             <?PHP
			 //มีหรือไม่มีรูป
			  if(!$result['prd_photo']==""){ ?>
								<a href="Product/<?=$result['prd_photo']?>" rel="lightbox" title="<?=$result['prd_name']?>" >
									<img  class="photo" src="Product/<?=$result['prd_photo']?>" width="110" height="130" border="0" />									</a>

						<?php }else{ ?>
						  		<a href="images/photo.jpg" rel="lightbox" title="รอรูปสินค้า" >
								<img class="photo" src=images/photo.jpg width="110" height="132" border="0" />								</a> 
						<?php } ?>
                        </div>
						
<div style="float:left; line-height:18px;">
		<ul style="list-style:none; padding-left:5px;">
			<li><b></b><a href="admin_detail_product.php?m_page=3&amp;ID=<?=$result['prd_id']?>"><?=$result['prd_name']?></a></li>
			<li><img src="images/14724.png" width="16" height="16" /> ราคา:  <?=number_format($result['prd_price'],2)?></li>
			<li><img src="images/buy_16.png" width="16" height="16" /> <a target="_blank" href="<?=$result['prd_link_line']?>">Line Shop</a> </li>
			<li>
				<a href="edit_product.php?m_page=<?=$_GET['m_page']?>&ID=<?=$result['prd_id']?>">
					  แก้ไข</a> | 
					
				<a href="del_product.php?m_page=<?=$_GET['m_page']?>&ID=<?=$result['prd_id']?>" onclick=" return confirm('ยืนยัน การลบข้อมูลสินค้า <?=$result['prd_name']?> ออกจากระบบ')">
					 ลบ</a>	 
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
		  <p><span style="padding-top:10px;">
		    <?php  
		if($total ==0){
			echo "<p style='color: red; font-size: 20px;'>ไม่มีข้อมูล</p>";
		}else{
		//echo "<hr>";
		$i=1;
		echo "<center>";
		//echo "หน้าแรก";
		echo "<ul id='ulBangNa' style='text-align: left;'>
				<li>
		";

		echo "<a href='?m_page=".$_GET['m_page']."&start=".$limit*($i-1)."&page=$i' style='border:0px;'><B>หน้าแรก</B></a>";
		echo "</li>";
		echo "<li id='liBangNa'>";
		for($i=1;$i<=$page;$i++){
if($_GET['page']==$i){ //ถ้าตัวแปล page ตรง กับ เลขที่วนได้
echo "<a href='?m_page=".$_GET['m_page']."&start=".$limit*($i-1)."&page=$i' style='border:0px;'><B id='onHoverN''>$i</B></a>"; //ลิ้งค์ แบ่งหน้า เงื่อนไขที่ 1
}else{
echo "<a href='?m_page=".$_GET['m_page']."&start=".$limit*($i-1)."&page=$i' style='border:0px;'>$i</a>"; //ลิ้งค์ แบ่งหน้า เงื่อนไขที่ 2
}
}  
echo "</li>";
echo "<li>";
//echo "หน้าสุดท้าย";
echo "<a href='?m_page=".$_GET['m_page']."&start=".$limit*($i-2)."&page=$i' style='border:0px;'><b>หน้าสุดท้าย</b></a>";
	
echo "
		</li>
		</ul>
		";
echo "</center>";
}
?>
		  </span></p>		  
		  <p>&nbsp;</p></td>
        </tr>
      </table>
	  <p>&nbsp;</p>
	  	  <p>&nbsp;</p>
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
        <span style="padding-top:30px; text-align:center; font-size:11px; ">
        <?PHP
if($_POST){

if(!is_numeric($_POST['txt_price'])) { 
							echo "<script>alert('กรุณากรอกราคาสินค้าให้ถูกต้องด้วยนะ')</script>"; exit();
							}	
							
if($_POST['txt_price']<=0){

echo "<script>alert('กรุณากรอกราคาสินค้าให้ถูกต้องด้วยนะ')</script>"; exit();

}

	//ติดต่อฐานข้อมูล
	include "connect_db.php";
	//เลือกข้อมูลในตารางเพื่อหาข้อมูลที่ซ้ำกัน
	$sql_select2 = mysqli_query($con,"SELECT * FROM ".$product." WHERE prd_name='".$_POST['txt_name']."' and prd_type='".$_POST['txt_type']."'");
			$num2 = mysqli_num_rows($sql_select2);
			$rs2 = mysqli_fetch_array($sql_select2);

	//ถ้ามีข้อมูลซ้ำกัน
	if($num2 >= 1){
		$Name = $rs2['prd_name'];
		echo "<script>alert(' สินค้า $Name มีในระบบแล้ว')</script>"; exit();
		}
		
	$FileName 	= $_FILES['FileUpload'] ['name'];
	$Filetype 		= $_FILES['FileUpload'] ['type'];
	$FileSize 		= $_FILES['FileUpload'] ['size'];
	$FileUpLoadtmp = $_FILES['FileUpload'] ['tmp_name'];
			
if($FileUpLoadtmp){					 
	$array_last = explode(".",$FileName); // เป็น array หาจำนวน จุด . ของชื่อตัวแปร์		
	$c = count($array_last) - 1; //นับจำนวน จุด "." ของชื่อตัวแปร์ 
	$lname = strtolower($array_last [$c]); // หา นามสกุลไฟล์ ตัวสุดท้ายของ ตัวแปร์
	$NewFileupload = date("U"); 
	$NewFile = $NewFileupload.".$lname"; //รวม ชื่อและนามสกลุดไฟล์เข้าด้วยกัน 
	}
//สถานะสินค้า 
$status = "1";
$null = "";
$Date = date("Y-m-d");
$Date_Promotion = date("0000-00-00 00:00:00");
$Promotion = 0;

//เพิ่มข้อมูลลงในตาราง
$Str = "INSERT INTO ".$product." VALUES "
		."(0,
		'".$_POST['txt_name']."', 
		'".$_POST['txt_type']."',
		'".$_POST['txt_detail']."',
		'".$_POST['txt_price']."',
		'".$_POST['prd_link_line']."',
		'".$NewFile."',
		'".$status."')";
		
$sql_add = mysqli_query($con,$Str);

//ถ้าเพิ่มข้อมูลได้ให้ตรวจสอบไฟล์ นามสกุล ดอท gif , jpg, jpeg, png แล้ว move ลงในโฟลเด้อ Product
if($sql_add){
			if($lname=="gif" or $lname=="jpg" or $lname=="jpeg" or $lname=="png"){
				//Upload File รูปภาพลงในโฟลเดอร์  Table
				$UploadFile = move_uploaded_file($FileUpLoadtmp, "Product/".$NewFile);					
			}	
			
			   echo "<script>alert('บันทึกข้อมูลเสร็จแล้ว')</script>";
			   echo "<meta http-equiv='refresh' content='0; url=admin_product.php?m_page=3'>";
			}else{
			   echo "<script>alert('error: บันทึกข้อมูลไม่ได้')</script>";
			   echo "<meta http-equiv='refresh' content='0; url=admin_product.php?m_page=3'>";
		}		
}

?>
      </span></p>
      
	</div>
	
</div>
<div style="clear:both;"></div>
	   <!-- End menu -->
</div>
	<!-- end Container -->
</body>
</html>
