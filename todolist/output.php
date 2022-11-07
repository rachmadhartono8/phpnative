<?php 
	$tugas = $_POST['tugas'];
	$kuis = $_POST['kuis'];
	$uts = $_POST['uts'];
	$uas = $_POST['uas'];

	// hitung nilai akhir
	$total = ($tugas + $kuis + $uts + $uas) / 4;

	if($total >= 85) {
		$hm = "A";
	} else if ($total >= 75) {
		$hm = "B";
	} else if($total >= 65) {
		$hm = "C";
	} else {
		$hm = "D";
	}
    ?>

    <html lang="en">
    <head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Output Nilai</title>
	<style>
		tr, td {
			text-align: center;
		}
	</style>
</head>
<body>
	<table width="80%" border="1" cellpadding="5" cellspacing="0" align="center">
		<tr>
			<td colspan="2">Output Nilai</td>
		</tr>
		<tr>
			<td width="50%">Nilai Tugas Anda :</td>
			<td width="50%"><?php echo $tugas; ?></td>
		</tr>
		<tr>
			<td>Nilai Kuis Anda :</td>
			<td><?php echo $kuis; ?></td>
		</tr>
		<tr>
			<td>Nilai UTS Anda :</td>
			<td><?php echo $uts; ?></td>
		</tr>
		<tr>
			<td>Nilai UAS Anda :</td>
			<td><?php echo $uas; ?></td>
		</tr>
		<tr>
			<td>Total Nilai :</td>
			<td><?php echo $total; ?></td>
		</tr>
		<tr>
			<td>Huruf Mutu :</td>
			<td><?php echo $hm; ?></td>
		</tr>		
	</table>
</body>
</html>
