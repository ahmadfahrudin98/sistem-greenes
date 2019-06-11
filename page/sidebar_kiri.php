<?php
if ($_SESSION[leveluser]=='members'){
  echo "<div class='widget_kanan'><div class='subtitle'></b> Menu Members</div></div>
  		<center>
  		Selamat Datang! <br> 
  		<b style='font-size:14px' >$_SESSION[fakultas]</b><br><br>
  		</center>
  		<a href='laporan-pemesanan.html'><button>Isi Survey</button></a>
  		<a href='kelola-profile.html'><button>Kelola Profile</button></a>
  		<a href='ganti-password.html'><button>Ganti Password</button></a>
  		<a href='logout.php'><button>Logout</button></a>";

	  
}else{
  echo "<div class='widget_kanan'><div class='subtitle'></b> Login User</div></div>
   <center> <table width=92% style='background:#339900; padding:20px; border:1px solid #cecece;'>
		<form method=POST name='formku' onSubmit='return valid()' action=cek_login.php>
				<td align=center><div align='center'>
					<table width='100%'>
						<tr><td><input type=text name=id_user class=input placeholder='Username. . .' style='width:93%;'></td></tr>
								<input type=hidden name=level value='members' class=input>
						<tr><td><input type=password name=password placeholder='Password. . .' class=input style='width:93%;'></td></tr>
						<td><center>
							<input style='' type=submit value=Login class=button> 
							<input style='' type=reset value=Ulangi class=button> &nbsp;
							<a style='color:white; text-decoration:underline' href='daftar.html'>Daftar?</a>
							</center></td>
					</table>
				</div></td>
			</table>
		</form>
	</center>";

	 }
	 echo "<div class='widget_kanan'><div class='subtitle'></b> ALAMAT </div></div>";
	 
		echo "<center><table width=92% style='background:#339900; padding:20px; margin-bottom:15px; border:1px solid #cecece;'>
		<td align=center>
				<p style='bottom:14px; color:#fff;'>Universitas Negeri Semarang<br/>
				Kampus Pusat: Kampus Sekaran, Gunungpati, Semarang<br/>
				Telp: (024) 8508093<br/>
				Email: timgrennes@greennes.com<br/>
				 <br/>
				Ikuti Kami di<br/>
				<li> <a href='facebook.com/greennes'><text>Facebook</text></a></li>
				<li> <a href='twitter.com/greennes'><text>Twitter</text></a></li>
				<li> <a href='instagram.com/greennes'><text>Instagram</text></a></li>
				<li> <a href='youtube.com/greennes'><text>YouTube</text></a></li>
				</p>
			  </td></table></center>";
?>

