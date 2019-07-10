<?php
if ($_GET[module]=='home'){
  $sql=mysql_query("SELECT * FROM statis WHERE halaman='home'");
  $r=mysql_fetch_array($sql);
    echo "<div class='post_title'>$r[judul]</div>
		  <img src='gambar/unnes.jpg' width='600'>
          <div class='text_area'>".nl2br($r[detail])."</div>";      
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
elseif ($_GET[module]=='gantipassword'){
	if (isset($_POST[pass])){
		$e=mysql_fetch_array(mysql_query("SELECT * FROM users WHERE username='$_SESSION[namauser]'"));
		$lama = md5($_POST[a]);
		if ($lama != $e[password]){
			echo "<script>window.alert('Maaf, Inputan Password Lama anda Salah.');
        			window.location=('ganti-password.html')</script>";
		}elseif ($_POST[b] != $_POST[c]){
			echo "<script>window.alert('Maaf, Password Baru dan Konf Password Tidak Sama.');
        			window.location=('ganti-password.html')</script>";
		}else{
			$passwords = md5($_POST[b]);
			mysql_query("UPDATE users SET password='$passwords' where username = '$_SESSION[namauser]'");
			echo "<script>window.alert('Sukses, Ganti Password...');
        			window.location=('ganti-password.html')</script>";
		}
	}
	    echo "<div class='post_title'><b>Edit User.</b></div><br/>
			 <div class='h_line'></div>
	          <form  style='margin-bottom:30%' method=POST action=''>
	          <table width='100%'>
	          <tr><td>Password Lama</td>     <td> : <input type=text name='a'> *) </td></tr>
			  <tr><td>Password Baru</td>     <td> : <input type=text name='b'> *) </td></tr>
			  <tr><td>Konf. Password</td>     <td> : <input type=text name='c'> *) </td></tr>
	          <tr><td colspan=2><br><br><input type=submit value='Ganti Password' name='pass'>
	                            <input type=button value=Batal onclick=self.history.back()></td></tr>
	          </table></form>";  
}


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
elseif ($_GET[module]=='kelolaprofile'){
	if (isset($_POST[update])){
		    mysql_query("UPDATE users SET fakultas   = '$_POST[fakultas]',
		                                  jabatan    = '$_POST[jabatan]',
		                                  no_telp    = '$_POST[tanggal_lahir]',  
		                                  alamat_lengkap = '$_POST[alamat_lengkap]'
		                           WHERE  username       = '$_POST[id]'");
		  echo "<script>window.alert('Sukses Update Data Profile.');
        			window.location=('kelola-profile.html')</script>";
	}
    $edit=mysql_query("SELECT * FROM users WHERE username='$_SESSION[namauser]'");
    $r=mysql_fetch_array($edit);
    echo "<div class='post_title'><b>Edit Data Anda</b></div><br/>
		 <div class='h_line'></div>
          <form style='margin-bottom:20%' method=POST action=''>
          <input type=hidden name=id value='$r[username]'>
          <table width='100%'>
          <tr><td width='120px'>Username</td>     
		  <td><input type=text name='username' value='$r[username]' disabled> **)</td></tr>
          <tr><td>fakultas</td> 
		  <td> <input type=text name='fakultas' size=30  value='$r[fakultas]'></td></tr>
          <tr><td>Jabatan</td>       
		  <td> <input type=text name='jabatan' size=30 value='$r[jabatan]'></td></tr>
          <tr><td>tanggal lahir</td>   
		  <td> <input type=date name='tanggal_lahir' size=30 value='$r[tanggal_lahir]'></td></tr>
          <tr><td></td>
		  <td><input type=submit value=Update class='button' name='update'>
      <input type=button value=Batal class='button' onclick=self.history.back()></td></tr>
          </table></form>";  
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
elseif ($_GET[module]=='home'){
  $sql=mysql_query("SELECT * FROM statis WHERE halaman='home'");
  $r=mysql_fetch_array($sql);
    echo "<div class='post_title'>$r[judul]</div>
          <div class='text_area'>".nl2br($r[detail])."</div>";      
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
elseif ($_GET[module]=='pesanan'){
  $sql=mysql_query("SELECT * FROM statis WHERE halaman='pesanan'");
  $r=mysql_fetch_array($sql);
    echo "<div class='post_title'>$r[judul]</div>
          <div class='text_area'>".nl2br($r[detail])."</div>";      
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
elseif ($_GET[module]=='jadwal'){
    echo "<div class='post_title'><b>Hasil Survey</b> </div><br/>
		 <div class='h_line'></div>
          <table style='margin-bottom:20px' cellpadding=4 width=100%>
          <tr style='color:#fff; height:38px;' bgcolor=#1d5103>
		  <th>No.</th>
		  <th>Fakultas</th>
		  <th>Poin</th>
		  <th>Total Poin</th>";
    $tampil = mysql_query("SELECT * FROM hasil 
						   ORDER BY id_soal DESC LIMIT 15");
  $no = 1;
    while($r=mysql_fetch_array($tampil)){
	
		$id_soal = $r[id_soal];
	    $id_fakultas = $r[id_fakultas];
        $hasil_a = $r[hasil];
        
		
	
	  if(($no % 1)==0){
		$warna="#267000";
	  }else{
		$warna="#E1E1E1";
	  }
      echo "<tr bgcolor=$warna>
                <td>$r[id_soal]</td>
                <td>$r[id_fakultas]</td>
        				<td>$r[hasil]</td>
        				<td></td>
                <td class='button'></td>
				</tr>";
      $no++;
    }
    echo "</table>";
	}
/////////////////////////////////////////////////////////////////////////////////////////////////////
elseif ($_GET[module]=='sewa'){
echo "<div class='post_title'><b>Daftar Lapangan Futsal</b></div><br/>";
  $col = 2;
  $p      = new Paging;
  $batas  = 6;
  $posisi = $p->cariPosisi($batas);
$query = mysql_query("SELECT * FROM about ORDER BY id_about DESC LIMIT $posisi,$batas");
$ada = mysql_num_rows($query);
if ($ada > 0) {
	  echo "<table><tr>";
	  $cnt = 0;
  while ($r=mysql_fetch_array($query)){
  		if ($cnt >= $col) {
		  echo "</tr><tr>";
		  $cnt = 0;
		}
		$cnt++;
	echo "<center><td align=center valign=top><span style='color:white'>$r[judul]</span><br/>
					<img src='gambar/$r[gambar]' width='294' height='140'>";
							echo "<input style='width:100px;' type=button value='Lihat Detail' onclick=\"window.location.href='lihat-detail-$r[id_about].html';\"><hr>
			</td></center>";
}
	  echo "</tr></table>";
	  
	$jmldata = mysql_num_rows(mysql_query("SELECT * FROM about"));
    $jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
    $linkHalaman = $p->navHalaman($_GET[halaman], $jmlhalaman);
    echo "<br/>Halaman : $linkHalaman<br />";	  
}
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
elseif ($_GET[module]=='detaillapangan'){
$query = mysql_query("SELECT * FROM about where id_about=$_GET[id]");
$r=mysql_fetch_array($query);
echo "<div class='post_title'><b>$r[judul]</b></div><br/>
	 <img src='gambar/$r[gambar]' width='600'><br/>
     <div class='text_area'>".nl2br($r[detail])."</div>"; 
echo "<table width='100%'><br/>
	   
	  </table>";
	
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
elseif ($_GET[module]=='sewalapangan'){
		 $edit=mysql_query("SELECT * FROM users WHERE username='$_SESSION[namauser]'");
        $k=mysql_fetch_array($edit);
		
		
		$query = mysql_query("SELECT * FROM lapangan where id_lapangan='$_GET[id]'");
		$r=mysql_fetch_array($query);
		$harga = format_rupiah($r[harga_lapangan]);
		
echo "<div class='post_title'><b>Pemesanan $r[judul].</b></div><br/>";
echo "<form method=POST action='aksi-pesan.html' enctype='multipart/form-data'>
	  <table style='margin-bottom:45%;' width='100%'>
	  <input type=hidden name='id_lapangan' value='$r[id_lapangan]'>
	  
	  <tr><td width='120px'>Nama Lengkap</td>     	
	  <td> : &nbsp;<input type=text name='nama_lengkap' value='$k[nama_lengkap]' size=49 class='input2' readonly='on'></td></tr>
	  <tr><td width='120px'>Email</td> 
	  <td> : &nbsp;<input type=text name='email' value='$k[email]' size=49 class='input2' readonly='on'></td></tr>
	  <tr><td width='120px'>No. Telpon</td> 
	  <td> : &nbsp;<input type=text name='no_telp' value='$k[no_telp]' size=49 class='input2' readonly='on'></td></tr>
	  <tr><td width='120px'>Alamat</td> 
	  <td> : &nbsp;<textarea name='alamat_lengkap' style='width:380px; height:50px;' readonly='on'>$k[alamat_lengkap]</textarea></td></tr>
	  
	  <tr><td width='120px'>Nama Lapangan</td>     	
	  <td> : &nbsp;<input type=text name='judul' value='$r[judul]' size=49 class='input2' readonly='on'></td></tr>
	  <tr><td>Harga Sewa Lapangan</td>   	
	  <td> : &nbsp;<input type=text name='harga' value='Rp $harga' size=20 class='input2' readonly='on'> /Jam</td></tr>
	  <tr><td>Jam</td>  
	  <td> : &nbsp;";
	  ?>
	  <?php
							
echo "<select style='width:140px; margin-left:-4px;' name='jam_mulai'>
      <option value='0' selected>- Pilih Jam Mulai -</option>";
	  $tampil=mysql_query("SELECT * FROM jam GROUP BY jam_mulai");
      while($r=mysql_fetch_array($tampil)){
echo "<option>$r[jam_mulai]</option>";
      }
echo "</select>
      <select style='width:140px; margin-left:4px;' name='jam_selesai'>";
	  
echo "<option value='0' selected>- Pilih Jam Selesai -</option>";
	  $tampil=mysql_query("SELECT * FROM jam GROUP BY jam_selesai");
      while($k=mysql_fetch_array($tampil)){
echo "<option>$k[jam_selesai]</option>";
      }
echo "</select>";
?>

<?php
echo "</td></tr>
	  
	  <tr><td></td>   	
	  <td>&nbsp;&nbsp;&nbsp;<input type='submit' name='submit' class='button' value='Pesan Sekarang'></td></tr>
	  </table></form>";
      }
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
elseif ($_GET[module]=='aksipesan'){

//$query = mysql_query("SELECT * FROM lapangan where id_lapangan='$_POST[id_lapangan]'");
//$r=mysql_fetch_array($query);
//$jumlahh = mysql_query("SELECT * FROM laporan 
//                        where jam_mulai='$_POST[jam_mulai]' 
//                        and jam_selesai='$_POST[jam_selesai]' 
//						AND id_lapangan='$_POST[id_lapangan]'");
//$j=mysql_fetch_array($jumlahh);
//$jml = mysql_num_rows($jumlahh);
					
//if ($jml >= 1){
//echo "<script>window.alert('Maaf, Jadwal Sewa Lapangan Futsal pada Jam $_POST[jam_mulai] s/d $_POST[jam_selesai] Sudah //Ke isi, silahkan pilih jam Lainnya.');
//			  window.location=('javascript:history.go(-1)')</script>";
//}else{
//        $jam_mulai   = $_POST['jam_mulai'];
//        $jam_selesai = $_POST['jam_selesai'];
//        $durasi      = $jam_selesai - $jam_mulai;
//		
//	    $total       = ($r[harga_lapangan]) * $durasi;
//	    $harga       =  number_format(($total),0,",",".");
		
		
		$sql = mysql_query("INSERT INTO soal (id_soal,
												 hasil_a,
												 hasil_b,
												 hasil_c,
												 jns_soal) 
										   VALUES('$_POST[id_soal]',
												'$_POST[jawaban_t]',
												'$_POST[jawaban_r]',
                        '$_POST[jawaban_e]',
												'$_SESSION[jns_soal]',
												
												)");
//echo "<script>window.alert('Sukses ');
//			window.location=('http://localhost/green/')</script>";
//}
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
elseif ($_GET[module]=='laporanpemesanan'){
  echo "<tr><td width='100px;'>Fakultas</td><td> <select name='fakultas'>
                <option selected>Pilih Jenis</option>
                <option value='1'>FMIPA</option>
                <option value='2'>FBS</option>
                <option value='3'>FIS</option>
                <option value='4'>FE</option>
                <option value='5'>FIK</option>
                <option value='6'>FIP</option>
                <option value='7'>FT</option>
                <option value='8'>FH</option>
            </select></td></tr>";
   	$user = '';
   	$user = $_SESSION['username'];

   $sql=mysql_query("SELECT soal.id_soal, soal.pertanyaan, soal.id_jenis, option.id_soal, option.id_option, option.nama_option,
      MAX(CASE WHEN option.id_option LIKE '%a' THEN nama_option END) AS Pilihan_a, 
      MAX(CASE WHEN option.id_option LIKE '%b' THEN nama_option END) AS Pilihan_b, 
      MAX(CASE WHEN option.id_option LIKE '%c' THEN nama_option END) AS Pilihan_c, 
      MAX(CASE WHEN option.id_option LIKE '%a' THEN skor END) AS skor_a,
      MAX(CASE WHEN option.id_option LIKE '%b' THEN skor END) AS skor_b,
      MAX(CASE WHEN option.id_option LIKE '%c' THEN skor END) AS skor_c
      FROM option  
      JOIN soal ON soal.id_soal = option.id_soal
      WHERE soal.id_jenis = 's'
      GROUP BY soal.id_soal, option.id_soal
      ");

   			?>

   	<div class='post_title'><b>Transportasi</b></div>
   
   <?php
   //$jumlah=mysql_num_rows($sql);
   //$urut=0;
   while($q=mysql_fetch_array($sql)){
   	$id = $q['id_soal'];
   	$tanya = $q['pertanyaan'];
   	$pilihan_a = $q['Pilihan_a'];
   	$pilihan_b = $q['Pilihan_b'];
   	$pilihan_c = $q['Pilihan_c'];
   	
   	$jenis_s = $q['jenis'];
   	$skor_a = $q['skor_a'];
   	$skor_b = $q['skor_b'];
   	$skor_c = $q['skor_c'];
   	
   //foreach ($r as $key) {
   echo "<form name='form1' method'post' action='$aksi?module=soal&act=input'>
          
          
          <BR><label for ='soal'> $id </label>
          <input type='hidden' name='id'>
          <label name='pertanyaan' disabled> $tanya </label>
          <br><input name='jawaban_s' type='radio' value='$skor_a'> <font> $pilihan_a </font> 
          <br><input name='jawaban_s' type='radio' value='$skor_b'> <font> $pilihan_b </font>
          <br><input name='jawaban_s' type='radio' value='$skor_c'> <font> $pilihan_c </font>
          
          ";  
      }


      ?>
      <div class='post_title'><b>Ruang hijau</b></div>

      <?php

    $sql2=mysql_query("SELECT soal.id_soal, soal.pertanyaan, soal.id_jenis, option.id_soal, option.id_option, option.nama_option,
      MAX(CASE WHEN option.id_option LIKE '%a' THEN nama_option END) AS Pilihan_a, 
      MAX(CASE WHEN option.id_option LIKE '%b' THEN nama_option END) AS Pilihan_b, 
      MAX(CASE WHEN option.id_option LIKE '%c' THEN nama_option END) AS Pilihan_c, 
      MAX(CASE WHEN option.id_option LIKE '%a' THEN skor END) AS skor_a,
      MAX(CASE WHEN option.id_option LIKE '%b' THEN skor END) AS skor_b,
      MAX(CASE WHEN option.id_option LIKE '%c' THEN skor END) AS skor_c
      FROM option  
      JOIN soal ON soal.id_soal = option.id_soal
      WHERE soal.id_jenis = 'r'
      GROUP BY soal.id_soal, option.id_soal");
   //$jumlah=mysql_num_rows($sql);
   //$urut=0;
   while($q=mysql_fetch_array($sql2)){
   	$id2 = $q['id_soal'];
   	$tanya2 = $q['pertanyaan'];
   	$pilihan_a2 = $q['Pilihan_a'];
   	$pilihan_b2 = $q['Pilihan_b'];
   	$pilihan_c2 = $q['Pilihan_c'];
   	
   	$jenis_s2 = $q['jenis'];
   	$skor_a2 = $q['skor_a'];
   	$skor_b2 = $q['skor_b'];
   	$skor_c2 = $q['skor_c'];
   	
   //foreach ($r as $key) {
   echo "
          
          <form name='form1' method'post' action='$aksi?module=soal&act=input'>
          <br><label for ='soal'> $id2 </label>
          <label name='pertanyaan' disabled> $tanya2 </label><br>
          <input type='hidden' name='id'>
          <br><input name='jawaban_r' type='radio' value='$skor_a2'> <font> $pilihan_a2 </font> 
          <br><input name='jawaban_r' type='radio' value='$skor_b2'> <font> $pilihan_b2 </font>
          <br><input name='jawaban_r' type='radio' value='$skor_c2'> <font> $pilihan_c2 </font>
          
          ";  

         }
         ?>

    <div class='post_title'><b>Transportasi</b></div>

      <?php
   $sql4=mysql_query("SELECT soal.id_soal, soal.pertanyaan, soal.id_jenis, option.id_soal, option.id_option, option.nama_option,
      MAX(CASE WHEN option.id_option LIKE '%a' THEN nama_option END) AS Pilihan_a, 
      MAX(CASE WHEN option.id_option LIKE '%b' THEN nama_option END) AS Pilihan_b, 
      MAX(CASE WHEN option.id_option LIKE '%c' THEN nama_option END) AS Pilihan_c, 
      MAX(CASE WHEN option.id_option LIKE '%a' THEN skor END) AS skor_a,
      MAX(CASE WHEN option.id_option LIKE '%b' THEN skor END) AS skor_b,
      MAX(CASE WHEN option.id_option LIKE '%c' THEN skor END) AS skor_c
      FROM option  
      JOIN soal ON soal.id_soal = option.id_soal
      WHERE soal.id_jenis = 't'
      GROUP BY soal.id_soal, option.id_soal");
   //$jumlah=mysql_num_rows($sql);
   //$urut=0;
   while($q=mysql_fetch_array($sql4)){
    $id4 = $q['id_soal'];
    $tanya4 = $q['pertanyaan'];
    $pilihan_a4 = $q['Pilihan_a'];
    $pilihan_b4 = $q['Pilihan_b']; 
    $pilihan_c4 = $q['Pilihan_c'];
    
    $jenis_s4 = $q['jenis'];
    $skor_a4 = $q['skor_a'];
    $skor_b4 = $q['skor_b'];
    $skor_c4 = $q['skor_c'];
   
   //foreach ($r as $key) {
   echo "
          
          <form name='form1' method'post' action='$aksi?module=soal&act=input'>
          <br><label for ='soal'> $id4 </label>
          <label name='pertanyaan' disabled> $tanya4 </label><br>
          <input type='hidden' name='id'>
          <br><input name='jawaban_t' type='radio' value='$skor_a4'> <font> $pilihan_a4 </font> 
          <br><input name='jawaban_t' type='radio' value='$skor_b4'> <font> $pilihan_b4 </font>
          <br><input name='jawaban_t' type='radio' value='$skor_c4'> <font> $pilihan_c4 </font>
          
          ";  

         }
         ?>

         <div class='post_title'><b>Energi</b></div>

      <?php
   $sql5=mysql_query("SELECT soal.id_soal, soal.pertanyaan, soal.id_jenis, option.id_soal, option.id_option, option.nama_option,
      MAX(CASE WHEN option.id_option LIKE '%a' THEN nama_option END) AS Pilihan_a, 
      MAX(CASE WHEN option.id_option LIKE '%b' THEN nama_option END) AS Pilihan_b, 
      MAX(CASE WHEN option.id_option LIKE '%c' THEN nama_option END) AS Pilihan_c, 
      MAX(CASE WHEN option.id_option LIKE '%a' THEN skor END) AS skor_a,
      MAX(CASE WHEN option.id_option LIKE '%b' THEN skor END) AS skor_b,
      MAX(CASE WHEN option.id_option LIKE '%c' THEN skor END) AS skor_c
      FROM option  
      JOIN soal ON soal.id_soal = option.id_soal
      WHERE soal.id_jenis = 'e'
      GROUP BY soal.id_soal, option.id_soal");
   //$jumlah=mysql_num_rows($sql);
   //$urut=0;
   while($q=mysql_fetch_array($sql5)){
    $id5 = $q['id_soal'];
    $tanya5 = $q['pertanyaan'];
    $pilihan_a5 = $q['Pilihan_a'];
    $pilihan_b5 = $q['Pilihan_b'];
    $pilihan_c5 = $q['Pilihan_c'];
    
    $jenis_s5 = $q['jenis'];
    $skor_a5 = $q['skor_a'];
    $skor_b5 = $q['skor_b'];
    $skor_c5 = $q['skor_c'];
   
   //foreach ($r as $key) {
   echo "
          
          <form name='form1' method'post' action='$aksi?module=soal&act=input'>
          <br><label for ='soal'> $id5 </label>
          <label name='pertanyaan' disabled> $tanya5 </label><br>
          <input type='hidden' name='id'>
          <br><input name='jawaban_e' type='radio' value='$skor_a5'> <font> $pilihan_a5 </font> 
          <br><input name='jawaban_e' type='radio' value='$skor_b5'> <font> $pilihan_b5 </font>
          <br><input name='jawaban_e' type='radio' value='$skor_c5'> <font> $pilihan_c5 </font>
          
          ";  

         }
         ?>

      <div class='post_title'><b>daur ulang</b></div>

      <?php
   $sql3=mysql_query("SELECT soal.id_soal, soal.pertanyaan, soal.id_jenis, option.id_soal, option.id_option, option.nama_option,
      MAX(CASE WHEN option.id_option LIKE '%a' THEN nama_option END) AS Pilihan_a, 
      MAX(CASE WHEN option.id_option LIKE '%b' THEN nama_option END) AS Pilihan_b, 
      MAX(CASE WHEN option.id_option LIKE '%c' THEN nama_option END) AS Pilihan_c, 
      MAX(CASE WHEN option.id_option LIKE '%a' THEN skor END) AS skor_a,
      MAX(CASE WHEN option.id_option LIKE '%b' THEN skor END) AS skor_b,
      MAX(CASE WHEN option.id_option LIKE '%c' THEN skor END) AS skor_c
      FROM option  
      JOIN soal ON soal.id_soal = option.id_soal
      WHERE soal.id_jenis = 'd'
      GROUP BY soal.id_soal, option.id_soal");
   //$jumlah=mysql_num_rows($sql);
   //$urut=0;
   while($q=mysql_fetch_array($sql3)){
   	$id3 = $q['id_soal'];
   	$tanya3 = $q['pertanyaan'];
   	$pilihan_a3 = $q['Pilihan_a'];
   	$pilihan_b3 = $q['Pilihan_b'];
   	$pilihan_c3 = $q['Pilihan_c'];
   	
   	$jenis_s3 = $q['jenis'];
   	$skor_a3 = $q['skor_a'];
   	$skor_b3 = $q['skor_b'];
   	$skor_c3 = $q['skor_c'];
   
   //foreach ($r as $key) {
   echo "
          
          <form name='form1' method'post' action='$aksi?module=soal&act=input'>
          <br><label for ='soal'> $id3 </label>
          <label name='pertanyaan' disabled> $tanya3 </label><br>
          <input type='hidden' name='id'>
          <br><input name='jawaban_d' type='radio' value='$skor_a3'> <font> $pilihan_a3 </font> 
          <br><input name='jawaban_d' type='radio' value='$skor_b3'> <font> $pilihan_b3 </font>
          <br><input name='jawaban_d' type='radio' value='$skor_c3'> <font> $pilihan_c3 </font>
           
          ";  

         }
         ?>

          <form name='form1' method'post' action='$aksi?module=soal&act=input'>
          <td><br/><input type=submit name=submit class='button' value=Simpan>
          <input type=button value=Batal class='button' onclick=self.history.back()></td></tr>

         </form>
         <?php
   
   	
    echo "<br/>Halaman: $linkHalaman<br>";
	}
	
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	
elseif ($_GET[module]=='detailpemesanan'){
$query = mysql_query("SELECT * FROM laporan left join lapangan on laporan.id_lapangan=lapangan.id_lapangan
						where laporan.id_orders=$_GET[id]");
$r=mysql_fetch_array($query);
$tanggal = tgl_indo($r[tanggal]);
$jam_mulai   = $r[jam_mulai];
$jam_selesai = $r[jam_selesai];
$durasi      = $jam_selesai - $jam_mulai;
echo "<div class='post_title'><b>Detail Pemesanan $r[judul] - $r[id_orders]</b></div><br/>";
echo "<table style='margin-bottom:35%;' width='100%'><br/>
          <tr><td width='20%'>Nama Pemesan</td>     	
		  <td> &nbsp;<input type=text name='judul' value='$_SESSION[namalengkap]' size=29 class='input3' readonly='on'></td></tr>
		  <tr><td>Email</td>     	
		  <td>&nbsp;<input type=text name='judul' value='$_SESSION[email]' size=29 class='input3' readonly='on'></td></tr>
		  <tr><td>No Telp</td>     	
		  <td> &nbsp;<input type=text name='judul' value='$_SESSION[telp]' size=29 class='input3' readonly='on'></td></tr>
		  <tr><td>Alamat<br/><br/><br/></td>     	
		  <td>&nbsp;<textarea style='width:93%; height:50px;' class='input3' readonly='on'>$_SESSION[alamat]</textarea><br/><br/></td></tr>
													 
			
		  <tr><td>Judul</td>     	
		  <td> &nbsp;<input type=text name='judul' value='$r[judul]' size=49 class='input2' readonly='on'></td></tr>
		  <tr><td>Tanggal</td>   
		  <td> &nbsp;<input type=text name='tanggal' value='$tanggal' size=29 class='input2' readonly='on'></td></tr>
		  <tr><td>Jam Mulai</td>   
		  <td> &nbsp;<input type=text name='jam_mulai' value='$r[jam_mulai] s/d $r[jam_selesai] WIB' size=29 class='input2' readonly='on'></td></tr>
		  <tr><td>Harga Lapangan</td>   	
		  <td> &nbsp;<input type=text name='harga' value='Rp $r[total_harga]' size=20 class='input2' readonly='on'> $durasi Jam</td></tr>
          <tr><td>Status Pesanan</td>   	
		  <td> &nbsp;<input type=text name='jumlah_tiket' size=20 value='$r[status_pesanan]' class='input2' readonly='on'></td></tr>
		  <tr>
		  <td></td>   	
		  <td>
		  <input style='padding:8px; margin-left:5px;margin-top:5px;' type=button value='Konfirmasi Pembayaran' class='button' onclick=\"window.location.href='konfirmasi-pembayaran-$r[id_orders].html';\"></td></tr>
	  </table>";	
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
elseif ($_GET[module]=='konfirmasipembayaran'){
$query = mysql_query("SELECT * FROM laporan left join lapangan on laporan.id_lapangan=lapangan.id_lapangan
						left join users on laporan.username=users.username
						where laporan.id_orders=$_GET[id]");
$r=mysql_fetch_array($query);
		
 echo "<div class='post_title'><b>Konfirmasi Pembayaran Untuk No Orders : $r[id_orders]</b></div><br/>";
 echo " <form action=aksi-konfirmasi.html method=POST name='formku' onSubmit='return valid()'>
        <table  style=' padding: 1em; margin-right=10px'>
		<tr><td width='140px'>id Order</td><td> <input type=text name=a value='$r[id_orders]' size=5 class='input' readonly='on'> </td></tr>
        
		<tr><td width='140px'>Total Biaya</td><td> <input type=text name=nama value='Rp $r[total_harga]' size=20 class='input' readonly='on'> </td></tr>
        <tr><td>Nama Pemesan</td><td> <input type=text name=b value='$_SESSION[namalengkap]' size=49 class='input' readonly='on'></td></tr>
        <tr><td>Bayar Ke</td><td> <select class='input' name='c'>
					<option value=0 selected>- Pilih (Bank anda Transfer pembayaran) -</option>";
            $tampil=mysql_query("SELECT * FROM rekening ORDER BY id_rekening");
            while($r=mysql_fetch_array($tampil)){
              echo "<option value=$r[id_rekening]>$r[nama_bankk] - A/N : $r[atas_namaa]</option>";
            }
    echo "</select></td></tr>
		<tr><td>Total Bayar</td><td> <input type=text name=d size=20 class='input'></td></tr>
		<tr><td>No Rek. Anda</td><td> <input type=text name=e size=49 class='input'></td></tr>
		<tr><td>Atas Nama</td><td> <input type=text name=f size=49 class='input'></td></tr>
		<tr><td>Nama Bank</td><td> <input type=text name=g size=49 class='input'></td></tr>
        <tr><td valign=top>Pesan</td><td> <textarea name=h style='width: 105%; height: 60px;' class='input'></textarea></td></tr>
        <tr><td valign=top></td>
		<td><input type=submit name=submit value='Kirim Konfirmasi' class='button'></td></tr>
        </table>
		</form>";
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
elseif ($_GET[module]=='aksikonfirmasi'){
if (empty($_POST[c])){
	echo "<script>window.alert('Anda belum memilih No rekening');
				window.location='javascript:history.go(-1)'</script>";	
}
elseif (empty($_POST[d])){
	echo "<script>window.alert('Anda belum mengisikan Total Bayar');
				window.location='javascript:history.go(-1)'</script>";	
}
elseif (empty($_POST[e])){
	echo "<script>window.alert('Anda belum mengisikan No Rek Anda');
				window.location='javascript:history.go(-1)'</script>";	
}
elseif (empty($_POST[f])){
	echo "<script>window.alert('Anda belum mengisikan Atas Nama');
				window.location='javascript:history.go(-1)'</script>";	
}
elseif (empty($_POST[g])){
	echo "<script>window.alert('Anda belum mengisikan Nama Bank');
				window.location='javascript:history.go(-1)'</script>";	
}else{
  mysql_query("INSERT INTO konfirmasi(id_orders,
									   id_rekening,
									   nama_pemesan,
									   total_bayar,
									   rek_anda,
									   atas_nama,
									   nama_bank,
									   pesan) 
							VALUES('$_POST[a]',
								   '$_POST[c]',
								   '$_POST[b]',
								   '$_POST[d]',
								   '$_POST[e]',
								   '$_POST[f]',
								   '$_POST[g]',
								   '$_POST[h]')");
	if ($_POST[a]=='All'){
			mysql_query("UPDATE laporan SET status_pesanan = 'Booking' where status_pesanan = 'Baru'");						   
		echo "<script>window.alert('Terima Kasih Telah Konfirmasi Pembayaran untuk $_POST[a]');
					window.location='laporan-pemesanan.html'</script>";	
	}else{								   
			mysql_query("UPDATE laporan SET status_pesanan = 'Booking' where id_orders='$_POST[a]'");						   
		echo "<script>window.alert('Terima Kasih Telah Konfirmasi Pembayaran..');
					window.location='laporan-pemesanan.html'</script>";	
	}
}
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
elseif ($_GET[module]=='hubungikami'){
  echo "<div class='post_title'><b>Fakultas Kami</b></div><br/>
        <table width=99% style=' padding: 1em; margin-right=10px'>
        <b>1. FMIPA</b></div><br/>
        <b>Fakultas Ilmu Pengetahuan Alam UNNES terdiri atas jurusan Matematika, Fisika, Kimia, Biologi, IPA, dan Teknik Informatika.</b></div><br/>
        <b> </b></div><br/>
        <b>2. FE</b></div><br/>
        <b>Fakultas Ekonomi UNNES terdiri atas jurusan Pendidikan Ekonomi, Akuntansi, Manajemen, dan Ekonomi Pembangunan. atas jurusan Matematika, Fisika, Kimia, Biologi, IPA, dan Teknik Informatika.</b></div><br/>
        <b> </b></div><br/>
        <b>3. FBS</b></div><br/>
        <b>Fakultas Bahasa dan Seni UNNES terdiri atas jurusan Bahasa dan Sastra Indonesia, Bahasa dan Sastra Jawa, Bahasa dan Sastra Asing, Seni Rupa, dan Pendidikan Seni Tari dan Musik.</b></div><br/>
        <b> </b></div><br/>
        <b>4. FH</b></div><br/>
        <b>Fakultas Hukum UNNES terdiri atas jurusan Ilmu Hukum.</b></div><br/>
        <b> </b></div><br/>
        <b>5. FIK</b></div><br/>
        <b>Fakultas Ilmu Keolahragaan UNNES terdiri atas jurusan Pendidikan Jasmani, Kesehatan, dan Rekreasi, Pendidikan Kepelatihan Olahraga, Ilmu Keolahragaan, dan Ilmu Kesehatan Masyarakat.</b></div><br/>
        <b> </b></div><br/>
        <b>6. FT</b></div><br/>
        <b>Fakultas Teknik UNNES terdiri atas jurusan Teknik Sipil, Teknik Mesin, Teknik Elektro, Pendidikan Kesejahteraan Keluarga, dan Teknik Kimia.</b></div><br/>
        <b> </b></div><br/>
        <b>7. FIP</b></div><br/>
        <b>Fakultas Ilmu Pendidikan UNNES terdiri atas jurusan Pendidikan Non Formal, Pendidikan Guru PAUD, Kurikulum dan Teknologi Pendidikan, Bimbingan Konseling, Pendidikan Guru SD, dan Psikologi.</b></div><br/>
        <b> </b></div><br/>
        <b>8. FIS</b></div><br/>
        <b>Fakultas Ilmu Sosial UNNES terdiri atas jurusan Geografi, Sejarah, Ilmu Politik, Pendidikan Pancasila dan Kewarganegaraan, dan Pendidikan Sosiologi dan Antropologi.</b></div><br/>
        <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/></td></tr>
        </table></pad></form>";
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
elseif ($_GET[module]=='hubungiaksi'){
if (empty($_POST[nama_lengkap])){
	echo "Nama Lengkap Masih Kosong";
} else if (empty($_POST[alamat_email])){
	echo "Alamat Email Masih kosong";
} else if (empty($_POST[subjek])){
	echo "Subjek Masih kosong";
} else if (empty($_POST[pesan])){
	echo "Input Kan pesan Anda Sebelum Mengirim";
} else {
$tanggal = date("Ymd");
mysql_query("INSERT INTO hubungi(nama_lengkap, 
									alamat_email,
									subjek,
									pesan,
									tanggal) 								
							VALUES ('$_POST[nama_lengkap]',
									'$_POST[alamat_email]',
									'$_POST[subjek]',
									'$_POST[pesan]',
									'$tanggal')");
	echo "Sukses Mengirimkan Pesan <a href='http://localhost/green'>Back to Menu</a>";	
}
}
?>
