<?php 
include('../config/db.php');
$qTransaksi = $link -> query("SELECT * FROM tbl_transaksi;");
?>

<div class="row" id="divDataMentor">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">Data Transaksi</div>
            <div class="card-body">
               
                <table id="tblDataTransaksi" class="table table-bordered table-hover" style="width:100%">
                    <thead style="border-top: 1px solid #d0d0d0;">
                        <tr>
                            <th>No</th>
                            <th>Kode Transaksi</th>
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1; 
                        while($fTransaksi = $qTransaksi -> fetch_assoc()){ ?> 
                        <?php 
                        $kodeProduk = $fTransaksi['kode_produk'];
                        // cek jumlah 
                        $qCekJumlah = $link -> query("SELECT * FROM tbl_produk WHERE kode_produk='$kodeProduk';");
                        $jlhBarang = mysqli_num_rows($qCekJumlah);
                        if($jlhBarang < 1){
                            $namaBarang = "-";
                        }else{
                            // cari nama barang 
                            $qNamaBarang = $link -> query("SELECT * FROM tbl_produk WHERE kode_produk='$kodeProduk' LIMIT 0,1;");
                            $fNamaBarang = $qNamaBarang -> fetch_assoc();
                            $namaBarang = $fNamaBarang['nama_produk'];
                        }
                        
                        ?>
                        <tr>
                            <td><?=$no; ?></td>
                            <td><?=$fTransaksi['kode_faktur']; ?></td>
                            <td><?=$fTransaksi['kode_produk']; ?></td>
                            <td><?=$namaBarang; ?></td>
                        </tr>
                        <?php $no++; } ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>

<script>
    $("#tblDataTransaksi").dataTable();
</script>