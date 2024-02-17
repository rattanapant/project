<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<ul class="Head-Menu" style="margin-left: 50px; font-size: 13px;">
					<li class="Page3" id="limenuHead"><a href="admin_product.php?m_page=3"> ข้อมูลสินค้าในร้าน</a></li>		
                    <?PHP
					  if(!$_SESSION['sess_emp_userid']==""){
					    echo " <li class=\"Page\" id=\"limenuHead\">
						<a href=\"logout.php\" title=\"ออกจากระบบ\" class=\"vtip\">ออกระบบ</a></li>";
					  }
					?>
</ul>
<p style="clear:both;"></p>
