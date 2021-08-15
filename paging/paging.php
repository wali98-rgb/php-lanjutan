<?php
// include '../config.php';
?>
 
<table border="1">
  <tr>
    <th>No</th>
    <th>Nama</th>                         
  </tr>
  <?php 
  $halaman = 10;
  $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
  $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
  $con = mysqli_connect("localhost", "root", "", "tutorial");
  $result = mysqli_query($con, "SELECT * FROM tb_masjid");
  $total = mysqli_num_rows($result);
  $pages = ceil($total/$halaman);            
  $query = mysqli_query($con, "select * from tb_masjid LIMIT $mulai, $halaman")or die(mysqli_error);
  $no =$mulai+1;
 
 
  while ($data = mysqli_fetch_assoc($query)) {
    ?>
    <tr>
      <td><?php echo $no++; ?></td>                  
      <td><?php echo $data['alamat']; ?></td>              
                  
    </tr>
 
    <?php               
  } 
  ?>
  
 
</table>          
 
<div class="">
  <?php for ($i=1; $i<=$pages ; $i++){ ?>
  <a href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a>
 
  <?php } ?>
 
</div>