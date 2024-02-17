<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<table width="185" border="0" cellpadding="0" cellspacing="0">
<tr>
<td>
<div class="title_data_type" style="margin-top: 5px;"><img src="images/icon-05.png" width="32" height="32" /><b> ประเภทสินค้า</b></div>
<ul class="ul_type" style="list-style:none;">
 <?PHP
include "connect_db.php";
	$sql_select = mysqli_query($con,"SELECT * FROM ".$product_type." ORDER BY type_id ASC");
		while($result = mysqli_fetch_array($sql_select)){
?>
		<li id="li_type"><a href="type_product.php?type_id=<?=$result['type_id']?>">
		<img src="images/bookmark_16.png" border="0" />  <?=$result['type_name']?> </a></li>
<?
}
?>
 </ul> 
        
</td>
 </tr>     
</table>
<br />
		<? if($_SESSION['sess_mb_id']==""){ ?>
		
  	<div class="title_data_type"><img src="images/diagram32.png" width="32" height="32" /><strong> ผู้ดูแลระบบ </strong></div>
	 
	 <form method="post" action="check_password.php" name="from_login1"  id="from_login1" onSubmit="return chk_txt();" style="padding-top: 5px; margin-left: 0px;">
           <table width="100%" border="0" cellpadding="0" cellspacing="0">
         <tr>
                   <td height="25" align="left" valign="middle" style="text-align:left; padding-left: 18px;">
				   <div style="font-size: 10px;">Username</div>
				   <input name="txt_user" type="text" id="txt_user" style="width: 92%; background:#FFF; border:1px solid #ccc;" accesskey="p"/>		   </td>
</tr>
                 <tr>
                   <td height="25" align="left" valign="middle" style="text-align:left; padding-left: 18px;">
				   <div style="font-size: 10px;">Password</div> 
				   <input name="txt_pass" type="password" id="txt_pass" style="width: 92%; background:#FFF; border:1px solid #ccc;" /></td>
         </tr>
                 <tr>
                   <td height="27" align="left" valign="middle" style="padding-left: 18px;">
				     <input type="submit" name="Login" id="Login" value="เข้าระบบ" class="buttom_login" style="border:1px solid #333; background:#DDD; color:#333;"/>
					 
 

				   
				   </td>
         </tr>
				 <? }else{?>
				   <tr>
                   <td colspan="2" style="border-bottom: 0px solid #ddd;">

<div class="title_data_type">
<img src="images/diagram_v2-29.png" width="32" height="32" />ยินดีต้อนรับ<br />
<b>คุณ : </b><?=$_SESSION['sess_mb_name']?></div> 
<br />

		  </ul>
<br />
		  <li id="li_type"> <a href="logout.php"><img src="images/icon-02.png" width="16" height="16" border="0" /> ออกจากระบบ </a></li>
		  </ul>
		<?  } ?>
</p> </td>
                 </tr>
       </table>
</form>
<p>&nbsp;</p>

<div class="title_data_type">
<form id="form1" name="form1" method="post" action="index.php">
<img src="images/Search.png" />ชื่อสินค้า<br />
  <input name="txtSearch" type="text" id="txtSearch" style="width: 120px;" class="txt_frm" />
				    <input type="submit" name="Submit" value="ค้าหา" class="txt_btn" />
  </form>
</div>
</ul>
<p>&nbsp;</p>
		<p>&nbsp;</p>