<?php
 error_reporting(0);
 error_reporting(E_ERROR | E_PARSE);
date_default_timezone_set("Asia/Bangkok");
 
$host="localhost";
$user="root";
$pass="12345678";
$dbname="db_project";
$con=mysqli_connect("$host","$user","$pass","$dbname");
@mysqli_query($con,"SET NAMES UTF8");
// Check connection
if (mysqli_connect_errno()){
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 
 

			//ชื่อตารางทั้งหมดมีดังนี้ 
			
			$member ="member"; //ตารางสมาชิกหรือลูกค้า
			$order ="tb_order"; //ตารางใบสั่งซื้อสินค้าของลูกค้า
			$product ="product"; //ตารางสินค้าของร้าน
			$product_type ="product_type"; //ตารางประเภทสินค้า

?>