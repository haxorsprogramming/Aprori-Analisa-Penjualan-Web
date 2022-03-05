<div class="row" id="divDataMentor">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">Hasil Proses</div>
            <div class="card-body">
                <table id="tblHasil" class="table">
                    <thead>
                        <tr>
                            
                            <th>Pola</th>
                            <th>Support</th>
                            <th>Confidence</th>
                            <th>Nilai</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for='dh in dataHasil'>
                            <td v-html="dh.pola"></td>
                            <td>{{ dh.support }}</td>
                            <td>{{ dh.confidence }}</td>
                            <td>{{ dh.nilai }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>

<script>
    var appHasil = new Vue({
        el: '#divDataMentor',
        data: {
            dataHasil: []
        }
    });
    // $.post('http://127.0.0.1:8000/proses-apriori/', function(data){
    //     console.log(data);
    // });
    
    loadHasil();

    function loadHasil()
    {
        axios.get('http://127.0.0.1:8000/proses-apriori/').then(function(res) {
        let obj = res.data;
        let hasil = obj.hasil;

        // console.log(hasil);

        hasil.forEach(renderHasil);
        
        function renderHasil(item, index) {
            let barangA = hasil[index][0];
            let barangB = hasil[index][1];
            let support = hasil[index][2];
            let confidence = hasil[index][3];
            let nilai = hasil[index][4];
            let pola = "Jika pelanggan membeli barang <b>"+barangA+"</b>, maka juga akan membeli barang <b>"+barangB+"</b>";
            appHasil.dataHasil.push({
                pola : pola,
                support : support,
                confidence : confidence,
                nilai : nilai
            });
        }

        setTimeout(function(){
            $("#tblHasil").dataTable({
                "order": [[ 3, "desc" ]]
            });
        }, 1000);



    });
    }

    

    function tidur_bentar(ms) {
        return new Promise(resolve => {
            setTimeout(resolve, ms)
        });
    }
</script>