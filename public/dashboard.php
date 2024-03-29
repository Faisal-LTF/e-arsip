<?php


function tgl($tanggal)
{
    $bulan = array(
        1 =>   'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    );
    $pecahkan = explode('-', $tanggal);
    return $pecahkan[2] . ' ' . $bulan[(int) $pecahkan[1]] . ' ' . $pecahkan[0];
}

?>


<div class="container-fluid py-2">
    <h6>
        Data Entry Masuk Pada Dashboard ..
        <!-- <a href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard ">this link</a> -->
    </h6>
    <div class="row py-3">
        <div class="col-xl-4 col-sm-4 mt-2 mb-3">
            <div class="card ">
                <div class="card-header p-3 pt-2">
                    <div
                        class="icon icon-lg icon-shape bg-gradient-warning shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                        <i class="material-icons opacity-10">person</i>
                    </div>
                    <div class="text-end pt-1">
                        <p class="text-sm mb-0 text-capitalize">Data Susunan Keluarga</p>
                        <h4 class="mb-0"> <a href="?page=data_susunanKeluarga"></a>
                        </h4>
                    </div>
                </div>
                <hr class="dark horizontal my-0">
                <div class="card-footer p-3">
                    <p class="mb-0"><span class="text-success text-sm font-weight-bolder"> Cek</span> Pelayanan</p>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-sm-6 mb-xl-0 mb-3 mt-2">
            <div class="card">
                <div class="card-header p-3 pt-2">
                    <div
                        class="icon icon-lg icon-shape bg-gradient-success shadow-success  text-center border-radius-xl mt-n4 position-absolute">
                        <i class="material-icons opacity-10">person</i>
                    </div>
                    <div class="text-end pt-1">
                        <p class="text-sm mb-0 text-capitalize"> Data Surat Pengantar Nikah</p>
                        <h4 class="mb-0"><a href="?page=data_pengantarNikah"></a>
                        </h4>
                    </div>
                </div>
                <hr class="dark horizontal my-0">
                <div class="card-footer p-3">
                    <p class="mb-0"><span class="text-success text-sm font-weight-bolder">Cek</span> Pelayanan</p>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-sm-2 mt-2 ">
            <div class="card">
                <div class="card-header p-3 pt-2 ">
                    <div
                        class="icon icon-lg icon-shape  bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                        <i class="material-icons opacity-10">person</i>
                    </div>
                    <div class="text-end pt-1">
                        <p class="text-sm mb-0 text-capitalize">Data Legalisasi Surat Keterangan Tidak Mampu</p>
                        <h4 class="mb-0"><a href="?page=data_sktm"></a></h4>
                    </div>
                </div>
                <hr class="dark horizontal my-0">
                <div class="card-footer p-3">
                    <p class="mb-0"><span class="text-success text-sm font-weight-bolder">Cek</span> Pelayanan</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row py-3">
        <div class="col-xl-6 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-header p-3 pt-2">
                    <div
                        class="icon icon-lg icon-shape bg-gradient-danger shadow-success text-center border-radius-xl mt-n4 position-absolute">
                        <i class="material-icons opacity-10">person</i>
                    </div>
                    <div class="text-end pt-1">
                        <p class="text-sm mb-0 text-capitalize">Data Rekomendasi Dispensasi Nikah</p>
                        <h4 class="mb-0"><a href="?page=data_dispensasiNikah"></a>
                        </h4>
                    </div>
                </div>
                <hr class="dark horizontal my-0">
                <div class="card-footer p-3">
                    <p class="mb-0"><span class="text-success text-sm font-weight-bolder">Cek</span> Pelayanan</p>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-sm-6 mb-xl-0  mb-3">
            <div class="card">
                <div class="card-header p-3 pt-2">
                    <div
                        class="icon icon-lg icon-shape bg-gradient-primary shadow-success text-center border-radius-xl mt-n4 position-absolute">
                        <i class="material-icons opacity-10">person</i>
                    </div>
                    <div class="text-end pt-1">
                        <p class="text-sm mb-0 text-capitalize">Data Legalisasi Proposal</p>
                        <h4 class="mb-0"><a href="?page=data_proposal"></a></h4>
                    </div>
                </div>
                <hr class="dark horizontal my-0">
                <div class="card-footer p-3">
                    <p class="mb-0"><span class="text-success text-sm font-weight-bolder">Cek</span> Pelayanan</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-lg-8 col-md-6 mb-md-0 mb-4">
            <div class="card">
                
                
            </div>
        </div>
        
    </div>

    

</div>


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: [
            'Sangat Baik',
            'Baik',
            'Cukup',
            'Kurang ',
            'Buruk ',
        ],


        datasets: [{
            label: 'Akumulasi Jumlah data penilaian',
            data: [<?php echo $hitungsbp['total'] ?>, <?php echo $hitungbp['total'] ?>,
                <?php echo $hitungcp['total'] ?>, <?php echo $hitungkp['total'] ?>,
                <?php echo $hitungbrkp['total'] ?>,
            ],
            backgroundColor: [
                'rgb(25, 205, 77)',
                'rgb(54, 162, 235)',
                'rgb(255, 99, 132)',
                'rgb(255, 205, 86)',
                'rgb(19, 17, 0)',
            ],
            hoverOffset: 4
        }]
    },
    options: {
        responsive: false,
    },
});
</script>
<script>
var chrt = document.getElementById("chartId").getContext("2d");
var chartId = new Chart(chrt, {
    type: 'polarArea',
    data: {
        labels: ['Sangat Baik',
            'Baik',
            'Cukup',
            'Kurang ',
            'Buruk ',
        ],
        datasets: [{
            label: "Akumulasi Jumlah data penilaian",
            data: [<?php echo $hitungsb['total'] ?>, <?php echo $hitungb['total'] ?>,
                <?php echo $hitungc['total'] ?>, <?php echo $hitungk['total'] ?>,
                <?php echo $hitungbrk['total'] ?>,
            ],
            backgroundColor: [
                'rgb(25, 205, 77)',
                'rgb(54, 162, 235)',
                'rgb(255, 99, 132)',
                'rgb(255, 205, 86)',
                'rgb(19, 17, 0)',
            ],
        }],
    },
    options: {
        responsive: false,
    },
});
</script>