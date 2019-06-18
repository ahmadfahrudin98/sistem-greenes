<?php
include "../config/koneksi.php";
include "../config/library.php";
//include "../config/fungsi_indotgl.php";
include "../config/class_paging.php";
//include "../config/fungsi_rupiah.php";
include "../config/session_admin.php";

if ($_GET[module]=='home'){
  include "modul/mod_about/about.php";
}

elseif ($_GET[module]=='user'){
  include "modul/mod_users/users.php";
}
elseif ($_GET[module]=='daftaruser'){
  include "modul/mod_users/users.php";
}

elseif ($_GET[module]=='about'){
include "modul/mod_statis/statis.php";
}

else{
  echo "<p><b>MODUL BELUM ADA ATAU BELUM LENGKAP</b></p>";
}
?>
