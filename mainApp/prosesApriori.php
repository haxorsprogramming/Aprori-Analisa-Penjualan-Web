<div class="row" id="divDataMentor">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">Proses Apriori</div>
            <div class="card-body">
                <div class="form-group">

                    <label for="company">Min. Support</label>
                    <select class="form-control">
                        <?php 
                        $x = 1;
                        for($x; $x < 100; $x++){
                            echo "<option>".$x."</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="company">Min. Confidence</label>
                    <select class="form-control">
                        <?php 
                        $x = 1;
                        for($x; $x < 100; $x++){
                            echo "<option>".$x."</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <a class="btn btn-primary" href="javascript:void(0)" onclick="prosesApriori()">Proses</a>
                </div>
            </div>
        </div>

    </div>
</div>

<script>
    function prosesApriori()
    {
        // console.log(se);
        loadPage("mainApp/hasilProses.php", "Hasil Proses Apriori");
    }
</script>