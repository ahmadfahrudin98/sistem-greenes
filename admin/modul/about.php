<?php
$aksi="modul/mod_about/aksi_about.php";
switch($_GET[act]){
  default:
 echo "<div class='post_title'><b>Kelola About</b></div><br/>
          <table width=100% cellpadding=6>
          <tr style='color:#fff; height:35px;' bgcolor=#339900>
		  <th>No</th>
		  <th>Judul</th>
		  <th>Aksi</th></tr>"; 
    $tampil=mysql_query("SELECT * FROM about ORDER BY id_about DESC");
    $no=1;
    while ($r=mysql_fetch_array($tampil)){
	if(($no % 2)==0){
			$warna="#ffffff";
		  }
		  else{
			$warna="#fff";
		  }
       echo "<tr bgcolor=$warna><td>$no</td>
             <td>$r[judul]</td>
             <td>
			 <input type=button value='Edit' class='button' onclick=\"window.location.href='?module=about&act=editabout&id=$r[id_about]';\">
			 <input type=button value='Hapus' class='button' onclick=\"window.location.href='$aksi?module=about&act=hapus&id=$r[id_about]';\">
			 
             </td></tr>";
      $no++;
    }
    echo "</table>";
    break;
  

////////////////////////////////////////////////////////////////////////////////////////////////////////
    
  case "editabout":
    $edit = mysql_query("SELECT * FROM about WHERE id_about='$_GET[id]'");
    $r    = mysql_fetch_array($edit);

    echo "<div class='post_title'><b>Edit About</b></div><br/>
	<form method=POST enctype='multipart/form-data' action=$aksi?module=about&act=update>
          <input type=hidden name=id value=$r[id_about]>
          <table>
          <tr><td width120>judul</td>     <td> <input type=text name='judul' value='$r[judul]' size=60></td></tr>
    
          <tr><td>Keterangan</td>  <td> <textarea name='detail' style='width: 490px; height: 150px;'>$r[detail]</textarea>
		  <tr><td>Gambar</td>     <td>   <img style='margin-left:1px; margin-right:4px; float:left; width:120px; height:155px;' src='../gambar/$r[gambar]'>
		  </td></tr>
		  <tr><td></td>
		  <td><input type=submit class='button' value=Update>
                            <input type=button value=Batal class='button' onclick=self.history.back()></td></tr>
          </table>";
    break;  
}
?>