<html>
	<head>
		<title>Home Page</title>
	</head>
	<body>
		data
		<table border="1" width="80%;">
			<tr>
				<td>no</td>
				<td>nama barang</td>
				<td>image barang</td>
				<td>desc barang</td>
				<td>price barang</td>
				<td>condition barang</td>
				<td>kota</td>
				<td>stock</td>
				<td>date</td>
				<td>action <a href="<?php echo base_url(); ?>c_home/input">tambah</a></td>
			</tr>
			<?php 
				$no = 1;
				foreach($data as $data_barang){ 
			 ?>
			<tr>
				<td><?php echo $no; ?></td>
				<td><?php echo $data_barang['name_barang']; ?></td>
				<td><img src="<?php echo $data_barang['image_barang']; ?>" alt=""></td>
				<td><?php echo $data_barang['desc_barang']; ?></td>
				<td><?php echo $data_barang['price_barang']; ?></td>
				<td><?php echo $data_barang['condition_barang']; ?></td>
				<td><?php echo $data_barang['kota']; ?></td>
				<td><?php echo $data_barang['stock']; ?></td>
				<td><?php echo $data_barang['date']; ?></td>
				<td>
					<a  onClick="return confirm('Anda yakin ingin menghapus data ini ?')" href="<?php echo base_url(); ?>c_home/hapus_barang/<?php echo $data_barang['id']; ?>">delete</a> 
					<a href="<?php echo base_url(); ?>c_home/edit_barang/<?php echo $data_barang['id']; ?>">edit</a>
				</td>
			</tr>
			<?php 
				$no++; 
			}
			 ?>
		</table>
	</body>
</html>