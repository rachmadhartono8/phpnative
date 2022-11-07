<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Input Output HTML dan PHP</title>
		<style>
			tr, td {
				text-align: center;
			}
		</style>
	</head>
	<body>
		<form name="finput" method="post" action="output.php">
			<table border="1" width="90%" align="center" cellpadding="5" cellspacing="0">
				<tr>
					<td colspan="2" align="center">Input Output HTML dan PHP</td>
				</tr>
				<tr>
					<td width="45%">Nilai Tugas</td>
					<td width="55%"><input type="text" name="tugas"></td>
				</tr>
				<tr>
					<td>Nilai Kuis</td>
					<td><input type="text" name="kuis"></td>
				</tr>								
				<tr>
					<td>Nilai UTS</td>
					<td><input type="text" name="uts"></td>
				</tr>
				<tr>
					<td>Nilai UAS</td>
					<td><input type="text" name="uas"></td>
				</tr>
				<tr>
					<td colspan="2" align="center">
						<input type="submit" name="tampil" value="Hitung">
						<input type="reset" name="reset" value="Reset">
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>