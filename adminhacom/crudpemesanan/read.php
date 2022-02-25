<?php 
require '../../config.php';


 ?>

<div class="box_table">
    <table class="table-responsive table-sm" style="height: 450px;">
        <thead>
            <tr>
                <th>#</th>
                <th>Gambar</th>
                <th>Nama Produk</th>
                <th>Kuantitas</th>
                <th>Total</th>
                <th>Nama Cust</th>
                <th>No.Telp</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>Tanggal</th>
                <th width="20%">Action</th>
            </tr>
        </thead>
        <tbody>
            
            <?php $no = 1; 
             
             

            $sql = "SELECT pr_gambar, pr_judul,pm_id, pm_nama, pm_notelp, pm_email, pm_kuant, pm_status, pm_total, pm_alamat, pm_tanggal, pm_keterangan FROM tb_produk, tb_pemesanan WHERE tb_produk.pr_id=tb_pemesanan.pr_id AND pm_status='BELUM'  ORDER BY pm_id DESC";
            $result = mysqli_query($koneksi, $sql) or die("<b>Error:</b> Ada kesalahan<br/>" . mysqli_error($koneksi));
            $row = mysqli_fetch_assoc($result);
            $num = 50;
            $num1 = 25;
                 
            function rupiah($angka){
	
                $hasil_rupiah = "Rp " . number_format($angka,2,',','.');
                return $hasil_rupiah;
             
            }
             ?>
             <?php foreach( $result as $row ) : ?>
            <tr>
                <td><?= $no ?></td>
                
                <td style="height: 50px; width:50px;"><img class src="../../images/<?= $row['pr_gambar'] ?>"></td>
                <td><?= substr($row['pr_judul'], 0, $num1) . '...' ?></td>
                <td><?= $row['pm_kuant'] ?></td>
                <td><?= rupiah($row['pm_total']) ?></td>
                <td><?= $row['pm_nama'] ?></td>
                <td><?= $row['pm_notelp'] ?></td>
                <td><?= $row['pm_email'] ?></td>
                <td><?= substr($row['pm_alamat'], 0, $num1) . '...' ?></td>
                <td><?= date('d-m-Y', strtotime($row["pm_tanggal"]));   ?></td>
                <td>
                    <!-- PROSES EDIT MENGIRIMKAN ID DENGAN METHOD GET -->
                    <a href="<?= $WEB_CONFIG['base_url'] ?>adminhacom/crudpemesanan/index.php?page=update&pm_id=<?= $row['pm_id'] ?>" class="btn btn-success btn-sm" style="font-size: 10pt; padding:5px;">
                    <svg style="width:10px;height:10px" viewBox="0 0 24 24" class="mb-1">
                        <path fill="#fff" d="M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12H20A8,8 0 0,1 12,20A8,8 0 0,1 4,12A8,8 0 0,1 12,4V2M18.78,3C18.61,3 18.43,3.07 18.3,3.2L17.08,4.41L19.58,6.91L20.8,5.7C21.06,5.44 21.06,5 20.8,4.75L19.25,3.2C19.12,3.07 18.95,3 18.78,3M16.37,5.12L9,12.5V15H11.5L18.87,7.62L16.37,5.12Z" />
                    </svg> Lihat</a>
                </td>
            </tr>
            <?php $no++ ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<br/>
<br/>
<h3>Pesanan Sudah Terselesaikan</h3>
<br/>
<div class="box_table">
    <table class="table-responsive table-sm" style="height: 450px;">
        <thead>
            <tr>
                <th>#</th>
                <th>Gambar</th>
                <th>Nama Produk</th>
                <th>Kuantitas</th>
                <th>Total</th>
                <th>Nama Cust</th>
                <th>No.Telp</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>Tanggal</th>
                <th width="20%">Action</th>
            </tr>
        </thead>
        <tbody>
            
            <?php $no = 1; 
             
             

            $sql1 = "SELECT pr_gambar, pr_judul,pm_id, pm_nama, pm_notelp, pm_email, pm_kuant, pm_status, pm_total, pm_alamat, pm_tanggal, pm_keterangan FROM tb_produk, tb_pemesanan WHERE tb_produk.pr_id=tb_pemesanan.pr_id AND pm_status='SUDAH'  ORDER BY pm_id ASC";
            $result1 = mysqli_query($koneksi, $sql1) or die("<b>Error:</b> Ada kesalahan<br/>" . mysqli_error($koneksi));
            $row1 = mysqli_fetch_assoc($result1);
            $num = 50;
            $num1 = 25;
             ?>
             <?php foreach( $result1 as $row1 ) : ?>
            <tr>
                <td><?= $no ?></td>
                
                <td style="height: 50px; width:50px;"><img class src="../../images/<?= $row1['pr_gambar'] ?>"></td>
                <td><?= substr($row1['pr_judul'], 0, $num1) . '...' ?></td>
                <td><?= $row1['pm_kuant'] ?></td>
                <td><?= rupiah($row1['pm_total']) ?></td>
                <td><?= $row1['pm_nama'] ?></td>
                <td><?= $row1['pm_notelp'] ?></td>
                <td><?= $row1['pm_email'] ?></td>
                <td><?= substr($row1['pm_alamat'], 0, $num1) . '...' ?></td>
                <td><?= date('d-m-Y', strtotime($row1["pm_tanggal"]));   ?></td>
                <td>
                    <!-- PROSES EDIT MENGIRIMKAN ID DENGAN METHOD GET -->
                    <a href="<?= $WEB_CONFIG['base_url'] ?>adminhacom/crudpemesanan/index.php?page=update&pm_id=<?= $row1['pm_id'] ?>" class="btn btn-success btn-sm" style="font-size: 10pt; padding:5px;">
                    <svg style="width:10px;height:10px" viewBox="0 0 24 24" class="mb-1">
                        <path fill="#fff" d="M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12H20A8,8 0 0,1 12,20A8,8 0 0,1 4,12A8,8 0 0,1 12,4V2M18.78,3C18.61,3 18.43,3.07 18.3,3.2L17.08,4.41L19.58,6.91L20.8,5.7C21.06,5.44 21.06,5 20.8,4.75L19.25,3.2C19.12,3.07 18.95,3 18.78,3M16.37,5.12L9,12.5V15H11.5L18.87,7.62L16.37,5.12Z" />
                    </svg> Lihat</a>
                    <a href="javascript:alertDelete(<?= $row1['pm_id'] ?>);" class="btn btn-danger btn-sm" style="font-size: 10pt; padding:5px;">
                    <svg style="width:10px;height:10px" viewBox="0 0 24 24" class="mb-1">
                        <path fill="#fff" d="M20.37,8.91L19.37,10.64L7.24,3.64L8.24,1.91L11.28,3.66L12.64,3.29L16.97,5.79L17.34,7.16L20.37,8.91M6,19V7H11.07L18,11V19A2,2 0 0,1 16,21H8A2,2 0 0,1 6,19Z" />
                    </svg> Hapus</a>
                </td>
            </tr>
            <?php $no++ ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<!-- MODAL / DIALOG KONFIRMASI SAAT PROSES PENGHAPUSAN -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Confirm To Delete Data</h5>
      </div>
      <div class="modal-body">
        <p>Are you sure ? </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        <a type="button" class="btn btn-danger" id="deleteButtonModal">Delete Now!</a>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
function alertDelete(idn) {
    //MENAMBAHKAN ATTRIBUT HTML href DENGAN ID deleteButtonModal KETIKA FUNCTION INI DIPANGGIL
    $('#deleteButtonModal').attr('href', '<?= $WEB_CONFIG['base_url'] ?>adminhacom/crudpemesanan/index.php?page=delete&pm_id='+idn);
    //MEMUNCULKAN MODAL DIALOG
    $('#deleteModal').modal('show');
}
</script>