<html>
	<head>
		<title></title>
	</head>
	<body>
		<form action="<?php echo base_url(); ?>c_home/proces_input" method="POST">
			<table border="1" width="600px;" style="margin: auto;">
				<tr style="display:none;">
					<td hidden>username</td>
					<td><input type="text" name="username"></td>
				</tr>
				<tr>
					<td>nama barang</td>
					<td><input type="text" name="name_barang"></td>
				</tr>
				<tr>
					<td>gambar barang</td>
					<td><input type="text" name="image_barang"></td>
				</tr>
				<tr>
					<td>deskripsi barang</td>
					<td><input type="text" name="desc_barang"></td>
				</tr>
				<tr>
					<td>harga barang</td>
					<td><input type="text" name="price_barang"></td>
				</tr>
				<tr>
					<td>kondisi barang</td>
					<td><input type="text" name="condition_barang"></td>
				</tr>
				<tr>
					<td>kota</td>
					<td><input type="text" name="kota"></td>
				</tr>
				<tr>
					<td>provinsi</td>
					<td><input type="text" name="provinsi"></td>
				</tr>
				<tr>
					<td>stok</td>
					<td><input type="text" name="stock"></td>
				</tr>

				<tr>
					<td style="text-align: center;" colspan="2"><input type="submit" name="submit" value="kirim"></td>
				</tr>
			</table>
		</form>
	</body>
</html>