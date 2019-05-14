<html>
<head>
	<title>Form Survey</title>
</head>
<body>
	<form action="survey.php" method="POST">
		<p>1. Adakah staff atau organisasi di Fakultas Anda yang menangani khusus atau memiliki tugas untuk mengatur lingkungan?</p>
		<input type="radio" name="staff_sdm" value="Ya">Ya<br>
		<input type="radio" name="staff_sdm" value="Tidak">Tidak<br>

		<p>2. Berapa kali dalam sehari Anda melakukan pemakaian air di lingkungan Fakultas Anda?</p>
		<input type="radio" name="air_en" value="1-3 kali">1-3 kali<br>
		<input type="radio" name="air_en" value="4-6 kali">4-6 kali<br>
		<input type="radio" name="air_en" value=">6 kali">6 kali<br>
		<input type="radio" name="air_en" value="tidak sama sekali">tidak sama sekali<br>

		<p>3. Sejauh manakah fungsi air di Fakultas Anda dapat digunakan?</p>
		<input type="radio" name="air_en" value="Mandi/kakus saja">Mandi/kakus saja<br>
		<input type="radio" name="air_en" value="Mandi/kakus serta dapat diminum">Mandi/kakus serta dapat diminum<br>
		<input type="radio" name="air_en" value=">Tidak dapat digunakan">Tidak dapat digunakan<br>

		<p>4. Apakah Anda langsung mematikan listrik (lampu, AC, dll) ketika selesai menggunakannya?</p>
		<input type="radio" name="staff_sdm" value="Ya">Ya<br>
		<input type="radio" name="staff_sdm" value="Tidak">Tidak<br>

		<p>5. Jika diukur dalam persentase, berapa persen daerah hijau yang ada di lingkungan Fakultas Anda?</p>
		<input type="radio" name="hijau" value="0-25%">0-25%<br>
		<input type="radio" name="hijau" value="26-50%">26-50%<br>
		<input type="radio" name="hijau" value="51-75%">51-75%<br>
		<input type="radio" name="hijau" value="76-100%">76-100%<br>

		<p>6. Transportasi apa yang Anda gunakan untuk tiba di Fakultas Anda?</p>
		<input type="radio" name="trans" value="mobil">mobil<br>
		<input type="radio" name="trans" value="motor">motor<br>
		<input type="radio" name="trans" value="sepeda">sepeda<br>
		<input type="radio" name="trans" value="jalan kaki">jalan kaki<br>

		<p>7. Apakah ada fasilitas untuk mendaur ulang sampah di Fakultas Anda?</p>
		<input type="radio" name="daur" value="Ya">Ya<br>
		<input type="radio" name="daur" value="Tidak">Tidak<br>

		<p><input type="submit"></p>
</body>
</html>