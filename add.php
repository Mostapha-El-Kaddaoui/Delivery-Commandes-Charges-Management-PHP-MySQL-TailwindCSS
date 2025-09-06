<?php
session_start();
if (!isset($_SESSION['lock'])) {
    header("location: login.php");
}
include("conn.php");
$sql="SELECT * FROM `operations`";
$result= mysqli_query($conn,$sql);
$operations= mysqli_fetch_all($result, MYSQLI_ASSOC);

if(isset($_POST["addop"])){
$name = $_SESSION["Namee"];
$typee = mysqli_real_escape_string($conn, $_POST['typee']);
$datee = date("Y-m-d");
$heure = date("H:i");
$client = mysqli_real_escape_string($conn, $_POST['client']);
$frome = mysqli_real_escape_string($conn, $_POST['frome']);
$towhere = mysqli_real_escape_string($conn, $_POST['towhere']);
$price = mysqli_real_escape_string($conn, $_POST['price']);

$sql = "INSERT INTO operations(namee,typee,datee,heure,client,frome,towhere,price) VALUES('$name','$typee','$datee','$heure','$client','$frome','$towhere','$price')";
mysqli_query($conn, $sql);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="dist/allstyle.css" rel="stylesheet">
    <link href="myst2.css" rel="stylesheet">
</head>
<body class="bg-slate-500">
    <div class="absolute top-0 w-full h-170 md:h-full">
        <div class="block md:hidden">
            <?php include("navbarback.php");?>
        </div>
        <div class="h-full w-full grid grid-cols-6 gap-4">
            <div class="md:block hidden h-full md:col-span-1 bg-slate-900 rounded-r-lg">
                <?php include("dashtools.php");?>
            </div>
            <div class="relative mt-20 md:mt-0 float-right h-full col-span-6 md:col-span-5 bg-white md:rounded-lg overflow-y-scroll">
                <!--hada dyal ajouter-->
                <div id="AjouteForm" class="forms absolute top-6 md:top-1/2 left-1/2 -translate-x-1/2 md:-translate-y-1/2 w-h90 h-b90">
                    <div class="flex justify-between w-full h-16 md:h-20">
                        <div class="w-full md:w-1/2 h-full">
                            <h4 class="font-sifonn text-2xl md:text-3xl text-slate-900">Ajouter une operation</h4>
                            <p class="font-sifonn text-xs md:text-base text-slate-400">Lorem ipsum dolor sit amet consectetur</p>
                        </div> 
                        <div class="w-1/2 h-full hidden md:block">
                            <div class="float-right flex">
                                <div class="w-10 h-10 mr-2 rounded-full bg-center bg-cover bg-[url('https://images.unsplash.com/photo-1506748686214-e9df14d4d9d0?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80')]"></div>
                                <div class="">
                                    <h4 class="font-sifonn text-lg text-slate-900"><?php echo $_SESSION["Nameman"]; ?></h4>
                                    <p class="font-sifonn text-sm text-slate-400">Lorem ipsum dolor</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full">
                        <div class="relative w-full h-52 md:h-80 overflow-hidden rounded bg-center bg-cover bg-[url('https://images.unsplash.com/photo-1618126942585-6cbc8f212b51?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80')]">
                            <div class="bg-gr"></div>
                            <div class="font-sifonn absolute bottom-0 mb-3 ml-5 md:mb-6 md:ml-8">
                                <h3 class="md:text-3xl text-2xl text-white ">Comment utiliser cette outile</h3>
                                <p class="md:text-base text-sm text-gray-200">Lorem ipsum dolor lorem du</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full h-72 mt-10">
                        <form action="" method="post">
                            <div class="grid grid-cols-2 gap-x-4 gap-y-4">
                                <div class="h-max col-span-2 md:col-span-1">
                                    <h4 class="font-sifonn text-xl mb-1 text-slate-900">Type :</h4>
                                    <select name="typee" id="" class="w-full bg-white border border-gray-300 outline-blue-400 rounded px-3 py-3">
                                            <option>Livraison de restauration rapide</option>
                                            <option>Livraison de colis ecommerce</option>
                                    </select>
                                </div>
                                <div class="h-max col-span-2 md:col-span-1">
                                    <h4 class="font-sifonn text-xl mb-1 text-slate-900">D'ou :</h4>
                                    <select name="frome" id="" class="w-full bg-white border border-gray-300 outline-blue-400 rounded px-3 py-3">
                                            <option>Cheese Time</option>
                                            <option>Bassatin</option>
                                    </select>
                                </div>
                                <div class="h-max col-span-2 md:col-span-1">
                                    <h4 class="font-sifonn text-xl mb-1 text-slate-900">A'ou :</h4>
                                    <select name="towhere" id="" class="w-full bg-white border border-gray-300 outline-blue-400 rounded px-3 py-3">
                                            <option>Pamme</option>
                                            <option>Attakdum</option>
                                    </select>
                                </div>
                                <div class="h-20 col-span-2 md:col-span-1">
                                    <div class="h-max grid grid-cols-2 gap-x-4">
                                        <div class="">
                                            <h4 class="font-sifonn text-xl mb-1 text-slate-900">Client :</h4>
                                            <select name="client" id="" class="w-full bg-white border border-gray-300 outline-blue-400 rounded px-3 py-3">
                                                    <option>Client 1</option>
                                                    <option>inconnue</option>
                                            </select>
                                        </div>
                                        <div class="">
                                            <h4 class="font-sifonn text-xl mb-1 text-slate-900">Prix :</h4>
                                            <select name="price" id="" class="w-full bg-white border border-gray-300 outline-blue-400 rounded px-3 py-3">
                                                    <option>15</option>
                                                    <option>20</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full mt-5 col-span-2">
                                    <input name="addop" type="Submit" value="Enregistrer" class="p-2 w-28 cursor-pointer rounded float-right bg-sky-600 text-white font-sifonn text-base">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!--end-->
            </div>
        </div>
    </div>

<script>
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