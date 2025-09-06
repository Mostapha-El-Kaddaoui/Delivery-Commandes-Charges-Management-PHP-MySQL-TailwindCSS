<?php
session_start();
if (!isset($_SESSION['lock'])) {
    header("location: login.php");
}

include("conn.php");
$currdate=date('Y-m-d');
if(!isset($_POST["bing"])){
    $date_debut='2021-01-01';
    $date_fin=date('Y-m-d');
    if($_SESSION["Namee"]=="Ayat"){
        $nbre_ops_req="SELECT COUNT(id) AS total FROM `operations` WHERE `datee` BETWEEN '$date_debut' AND '$date_fin';";
        $sum_ops_req = "SELECT IFNULL(SUM(price), 0) AS price_total FROM `operations` WHERE `datee` BETWEEN '$date_debut' AND '$date_fin';";
        $nbre_chg_req="SELECT COUNT(id) AS net_total FROM `charges` WHERE `datee` BETWEEN '$date_debut' AND '$date_fin';";
        $sum_chg_req = "SELECT IFNULL(SUM(netapaye), 0) AS net_price_total FROM `charges` WHERE `datee` BETWEEN '$date_debut' AND '$date_fin';";
        $chart_req = "SELECT datee, COUNT(id) AS num_operations FROM operations WHERE datee BETWEEN '$date_debut' AND '$date_fin' GROUP BY datee";
        $chart_chg_req = "SELECT datee, COUNT(id) AS num_charges FROM charges WHERE datee BETWEEN '$date_debut' AND '$date_fin' GROUP BY datee";

    }else{
        $dem=$_SESSION["Namee"];
        $nbre_ops_req="SELECT COUNT(id) AS total FROM `operations` WHERE `datee` BETWEEN '$date_debut' AND '$date_fin' AND `namee` = '$dem';";
        $sum_ops_req = "SELECT IFNULL(SUM(price), 0) AS price_total FROM `operations` WHERE `datee` BETWEEN '$date_debut' AND '$date_fin' AND `namee` = '$dem';";
        $nbre_chg_req="SELECT COUNT(id) AS net_total FROM `charges` WHERE `datee` BETWEEN '$date_debut' AND '$date_fin' AND `namee` = '$dem';";
        $sum_chg_req = "SELECT IFNULL(SUM(netapaye), 0) AS net_price_total FROM `charges` WHERE `datee` BETWEEN '$date_debut' AND '$date_fin' AND `namee` = '$dem';";
        $chart_req = "SELECT datee, COUNT(id) AS num_operations FROM operations WHERE datee BETWEEN '$date_debut' AND '$date_fin' AND `namee` = '$dem' GROUP BY datee";
        $chart_chg_req = "SELECT datee, COUNT(id) AS num_charges FROM charges WHERE datee BETWEEN '$date_debut' AND '$date_fin' AND `namee` = '$dem' GROUP BY datee";

    }
    $nbre_ops_result = mysqli_query($conn, $nbre_ops_req);
    $row = mysqli_fetch_assoc($nbre_ops_result);
    $nbre_ops = $row['total'];
    $sum_ops_result = mysqli_query($conn, $sum_ops_req);
    $row_ops_sum = mysqli_fetch_assoc($sum_ops_result);
    $sum_ops = $row_ops_sum['price_total'];

    $nbre_chg_result = mysqli_query($conn, $nbre_chg_req);
    $row_chg= mysqli_fetch_assoc($nbre_chg_result);
    $nbre_chg = $row_chg['net_total'];
    $sum_chg_result = mysqli_query($conn, $sum_chg_req);
    $row_chg_sum = mysqli_fetch_assoc($sum_chg_result);
    $sum_chg = $row_chg_sum['net_price_total'];


    $chart_result = mysqli_query($conn, $chart_req);
    $chart_chg_result = mysqli_query($conn, $chart_chg_req);

    $dates = [];
    $numOperations = [];
    while ($row_chart = mysqli_fetch_assoc($chart_result)) {
        $dates[] = $row_chart['datee'];
        $numOperations[] = $row_chart['num_operations'];
    }
    $dates_chg = [];
    $numcharges = [];
    while ($row_chg_chart = mysqli_fetch_assoc($chart_chg_result)) {
        $dates_chg[] = $row_chg_chart['datee'];
        $numcharges[] = $row_chg_chart['num_charges'];
    }

}

if(isset($_POST["bing"])){
    $date_debut=mysqli_real_escape_string($conn, $_POST['date_debut']);
    $date_fin=mysqli_real_escape_string($conn, $_POST['date_fin']);
    if($_SESSION["Namee"]=="Ayat"){
        $nbre_ops_req="SELECT COUNT(id) AS total FROM `operations` WHERE `datee` BETWEEN '$date_debut' AND '$date_fin';";
        $sum_ops_req = "SELECT IFNULL(SUM(price), 0) AS price_total FROM `operations` WHERE `datee` BETWEEN '$date_debut' AND '$date_fin';";
        $nbre_chg_req="SELECT COUNT(id) AS net_total FROM `charges` WHERE `datee` BETWEEN '$date_debut' AND '$date_fin';";
        $sum_chg_req = "SELECT IFNULL(SUM(netapaye), 0) AS net_price_total FROM `charges` WHERE `datee` BETWEEN '$date_debut' AND '$date_fin';";
        $chart_req = "SELECT datee, COUNT(id) AS num_operations FROM operations WHERE datee BETWEEN '$date_debut' AND '$date_fin' GROUP BY datee";
        $chart_chg_req = "SELECT datee, COUNT(id) AS num_charges FROM charges WHERE datee BETWEEN '$date_debut' AND '$date_fin' GROUP BY datee";
    }else{
        $dem=$_SESSION["Namee"];
        $nbre_ops_req="SELECT COUNT(id) AS total FROM `operations` WHERE `datee` BETWEEN '$date_debut' AND '$date_fin' AND `namee` = '$dem';";
        $sum_ops_req = "SELECT IFNULL(SUM(price), 0) AS price_total FROM `operations` WHERE `datee` BETWEEN '$date_debut' AND '$date_fin' AND `namee` = '$dem';";
        $nbre_chg_req="SELECT COUNT(id) AS net_total FROM `charges` WHERE `datee` BETWEEN '$date_debut' AND '$date_fin' AND `namee` = '$dem';";
        $sum_chg_req = "SELECT IFNULL(SUM(netapaye), 0) AS net_price_total FROM `charges` WHERE `datee` BETWEEN '$date_debut' AND '$date_fin' AND `namee` = '$dem';";
        $chart_req = "SELECT datee, COUNT(id) AS num_operations FROM operations WHERE datee BETWEEN '$date_debut' AND '$date_fin' AND `namee` = '$dem' GROUP BY datee";
        $chart_chg_req = "SELECT datee, COUNT(id) AS num_charges FROM charges WHERE datee BETWEEN '$date_debut' AND '$date_fin' AND `namee` = '$dem' GROUP BY datee";
    }
    $nbre_ops_result = mysqli_query($conn, $nbre_ops_req);
    $row = mysqli_fetch_assoc($nbre_ops_result);
    $nbre_ops = $row['total'];
    $sum_ops_result = mysqli_query($conn, $sum_ops_req);
    $row_ops_sum = mysqli_fetch_assoc($sum_ops_result);
    $sum_ops = $row_ops_sum['price_total'];

    $nbre_chg_result = mysqli_query($conn, $nbre_chg_req);
    $row_chg= mysqli_fetch_assoc($nbre_chg_result);
    $nbre_chg = $row_chg['net_total'];
    $sum_chg_result = mysqli_query($conn, $sum_chg_req);
    $row_chg_sum = mysqli_fetch_assoc($sum_chg_result);
    $sum_chg = $row_chg_sum['net_price_total'];

    $chart_result = mysqli_query($conn, $chart_req);
    $chart_chg_result = mysqli_query($conn, $chart_chg_req);

    $dates = [];
    $numOperations = [];
    while ($row_chart = mysqli_fetch_assoc($chart_result)) {
        $dates[] = $row_chart['datee'];
        $numOperations[] = $row_chart['num_operations'];
    }
    $dates_chg = [];
    $numcharges = [];
    while ($row_chg_chart = mysqli_fetch_assoc($chart_chg_result)) {
        $dates_chg[] = $row_chg_chart['datee'];
        $numcharges[] = $row_chg_chart['num_charges'];
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./dist/delm.css" rel="stylesheet">
    <link href="./dist/myst2.css" rel="stylesheet">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body class="bg-slate-500">
    <div class="absolute top-0 w-full h-full">
        <div class="block md:hidden">
            <?php include("navbarback.php");?>
        </div>
        <div class="h-full w-full grid grid-cols-6 gap-4">
            <div class="h-full hidden md:block md:col-span-1 bg-slate-900 rounded-r-lg">
                <?php include("dashtools.php");?>
            </div>
            <div class="relative mt-20 md:mt-0 float-right h-full col-span-6 md:col-span-5 bg-white md:rounded-lg overflow-y-scroll">
                <!--hna dyal supp-->
                <div id="SuppForm" class="forms max-centring w-h90 h-b90">
                    <div class="flex justify-between w-full h-20">
                        <div class="w-full md:w-1/2 h-full">
                            <h4 class="font-sifonn text-2xl md:text-3xl text-slate-900">Statistiques</h4>
                            <p class="font-sifonn text-xs md:text-sm text-slate-500">Lorem ipsum dolor sit amet consectetur</p>
                        </div> 
                        <div class="w-1/2 h-full md:block hidden">
                            <div class="float-right flex">
                                <div class="w-10 h-10 mr-2 rounded-full bg-center bg-cover bg-[url('https://images.unsplash.com/photo-1506748686214-e9df14d4d9d0?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80')]"></div>
                                <div class="">
                                    <h4 class="font-sifonn text-lg text-slate-900"><?php echo $_SESSION["Nameman"]; ?></h4>
                                    <p class="font-sifonn text-xs text-slate-300">Lorem ipsum dolor</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form method="post">
                        <div class="w-full md:flex">
                            <div class="flex">
                                <h4 class="font-sifonn text-lg mb-1 w-max text-slate-900 p-2">De : </h4>
                                <input required class="outline-0 bg-transparent text-base w-48 border p-2 h-11" type="text" placeholder="2021-05-06" name="date_debut">
                            </div>
                            <div class="flex">
                                <div class="flex">
                                    <h4 class="font-sifonn text-lg mb-1 w-max text-slate-900 p-2">a : </h4>
                                    <input required class="outline-0 bg-transparent text-base w-48 border p-2 h-11" type="text" placeholder="2022-05-06" name="date_fin">
                                </div>
                                <div class="w-11 h-11 bg-slate-900 rounded ml-2 cursor-pointer">
                                    <button name="bing">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="m-3 p-0.5 w-5 h-5"><path fill="#ffffff" d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="w-full mt-6">
                        <div class="w-full mt-4">
                            <h4 class="font-sifonn text-xl text-slate-900">Nombres fait :</h4>
                            <p class="font-sifonn text-sm text-slate-500">Entre le <?php echo $date_debut; ?> et <?php echo $date_fin; ?></p>
                        </div> 
                        <div class="w-full mt-4 grid grid-cols-3 gap-x-4">
                            <div class="bg-slate-300 mb-4 md:mb-0 col-span-3 md:col-span-1 cursor-pointer h-36 md:h-40 rounded-md shadow-lg border relative">
                                <div class="m-4 md:m-5">
                                    <div class="w-available">
                                        <h4 class="font-sifonn text-xl md:text-2xl text-slate-900">Les operations</h4>
                                    </div>
                                    <div class="w-available mt-6">
                                        <h4 class="font-sifonn text-3xl md:text-4xl text-slate-900"><?php echo $sum_ops; ?> DH</h4>
                                    </div>
                                    <div class="w-available">
                                        <h4 class="font-sifonn text-sm md:text-lg  text-slate-900">Nombre des operations fait : <?php echo $nbre_ops; ?></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-slate-300 mb-4 md:mb-0 col-span-3 md:col-span-1 cursor-pointer h-36 md:h-40 rounded-md shadow-lg border relative">
                                <div class="m-4 md:m-5">
                                    <div class="w-available">
                                        <h4 class="font-sifonn text-xl md:text-2xl text-slate-900">Les Charges</h4>
                                    </div>
                                    <div class="w-available mt-6">
                                        <h4 class="font-sifonn text-3xl md:text-4xl  text-slate-900"><?php echo $sum_chg ?> DH</h4>
                                    </div>
                                    <div class="w-available">
                                        <h4 class="font-sifonn text-sm md:text-lg text-slate-900">Nombre des charges fait : <?php echo $nbre_chg ?></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-slate-900 mb-4 md:mb-0 col-span-3 md:col-span-1 cursor-pointer h-36 md:h-40 rounded-md shadow-lg border relative">
                                <div class="m-5">
                                    <div class="w-available">
                                        <h4 class="font-sifonn text-xl md:text-2xl text-white">Le Resultat</h4>
                                    </div>
                                    <div class="w-available mt-2">
                                        <h4 class="font-sifonn text-3xl md:text-5xl  text-white"><?php echo $sum_ops-$sum_chg; ?> DH</h4>
                                    </div>
                                    <div class="w-available mt-1">
                                        <h4 class="font-sifonn text-sm md:text-lg  text-white">les gains moins les charges</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pt-7 pb-16">
                        <div class="">
                            <canvas id="lineChart" width="100%" height="300"></canvas>
                        </div>
                        <div class="mt-3">
                            <canvas id="lineChart_chg" width="100%" height="300"></canvas>
                        </div>
                    </div>
                </div>
                <!--end-->
            </div>
        </div>
    </div>

<script>
var ctx = document.getElementById('lineChart').getContext('2d');
var lineChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: <?php echo json_encode($dates); ?>,
        datasets: [
        {
            label: 'Operations',
            data: <?php echo json_encode($numOperations); ?>,
            backgroundColor: 'rgba(0, 123, 255, 0.5)',
            borderColor: 'rgba(0, 123, 255, 1)',
            pointRadius: 7,
            borderWidth: 1
        }
    ]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
                  legend: {
                     display: true,
                     position: 'top',
                     align: 'start',
                     
                  }
               }
    }

});
var ctx_chg = document.getElementById('lineChart_chg').getContext('2d');
var lineChart = new Chart(ctx_chg, {
    type: 'line',
    data: {
        labels: <?php echo json_encode($dates_chg); ?>,
        datasets: [
            {
            label: 'Charges',
            data: <?php echo json_encode($numcharges); ?>,
            backgroundColor: '#ff6060',
            borderColor: 'red',
            pointStyle: 'rect',
            pointRadius: 7,
            borderWidth: 1
        }
    ]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
                  legend: {
                     display: true,
                     position: 'top',
                     align: 'start',
                     
                  }
               }
    }

});

const items = document.querySelectorAll(".liens");
function togglebackground(){
    items.forEach(c => {
          c.classList.remove('bg-slate-800','border-blue-400');
          c.classList.add('border-transparent');
    });
    const clickedElement = event.target;
    clickedElement.classList.remove('border-transparent');
    clickedElement.classList.add('bg-slate-800','border-blue-400');
};
items.forEach(item => item.addEventListener('click', togglebackground));

function checkallelements(){
    var checkall=document.getElementById("idbox_checkall"); 
    var otherschek=document.getElementsByClassName("classbox_checkelement");
    if (checkall.checked) {
    for (var i = 0; i < otherschek.length; i++) {
        otherschek[i].checked = true;
        }
    } else {
    for (var i = 0; i < otherschek.length; i++) {
        otherschek[i].checked = false;
    }
  }
}
</script>
</body>
</html>