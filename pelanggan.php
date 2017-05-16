<?php 
 $koneksi = mysqli_connect("localhost", "root", "", "toko_online");
 $sql = "Select * from pelanggan order by id_pelanggan ASC";
 $query = mysqli_query($koneksi, $sql);
 $rows=array();
 while($data = mysqli_fetch_assoc($query)){
 $rows[] = $data;
 $rows[] = "<br>";
 }
 echo json_encode($rows);

?>