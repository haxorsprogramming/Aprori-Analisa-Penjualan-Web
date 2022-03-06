<?php 
include('../config/db.php');
$qProduk = $link -> query("SELECT * FROM tbl_produk;");
?>
<div class="row" id="divDataMentor">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">Data Produk</div>
            <div class="card-body">
                <div style="margin-bottom:20px;">
                    <a href="javascript:void(0)" class="btn btn-primary">Tambah Produk</a>
                </div>
                <table id="tblDataProduk" class="table table-bordered table-hover" style="width:100%">
                    <thead style="border-top: 1px solid #d0d0d0;">
                        <tr>
                            <th>No</th>
                            <th>Kode Produk</th>
                            <th>Nama Produk</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; while($fProduk = $qProduk -> fetch_assoc()) { ?>
                        <tr>
                            <td><?=$no; ?></td>
                            <td><?=$fProduk['kode_produk']; ?></td>
                            <td><?=$fProduk['nama_produk']; ?></td>
                        </tr>    
                        <?php $no++; } ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>

<script>
    $("#tblDataProduk").dataTable();
</script>