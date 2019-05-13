<html>
<head>
<title>.:: LOGIN ADMINISTRATOR ::.</title>
<link rel="shortcut icon" href="favicon.ico" />
<script language="javascript">
function validasi(form){
  if (form.id_user.value == ""){
    alert("Anda belum mengisikan Username.");
    form.id_user.focus();
    return (false);
  }
     
  if (form.password.value == ""){
    alert("Anda belum mengisikan Password.");
    form.password.focus();
    return (false);
  }

  if (form.kode.value == ""){
    alert("Anda belum mengisikan Security Code.");
    form.kode.focus();
    return (false);
  }
  return (true);
}
</script>

<link href="page/login.css" rel="stylesheet" type="text/css" />
</head>
<body OnLoad="document.login.username.focus();">
<div id="login">
