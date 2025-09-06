<?php
session_start();
//if (!isset($_SESSION['lock'])) {
  //  header("location: login.php");
//}
include("conn.php");

if(isset($_POST["deleteop"])){
    $id_to_delete= $_POST['deleteop'];
    $query=mysqli_query($conn,"DELETE FROM `operations` WHERE `id`='$id_to_delete'");
}

if($_SESSION["Namee"]=="Ayat"){
    $sql="SELECT * FROM `operations`";
}
if($_SESSION["Namee"]!="Ayat"){
    $dem=$_SESSION["Namee"];
    $sql="SELECT * FROM `operations` WHERE namee ='$dem'";
}


if(isset($_POST['bing'])){
  $name_search=htmlspecialchars($_POST['searchinp']);
  $sql= "SELECT * FROM operations WHERE `namee` LIKE '%$name_search%' or `typee` LIKE '%$name_search%' or `client` LIKE '%$name_search%' or `frome` LIKE '%$name_search%' OR `towhere` LIKE '%$name_search%' or `price` LIKE '%$name_search%'";
   $nbre_req="SELECT COUNT(id) AS nbreops FROM `operations`  WHERE `namee` LIKE '%$name_search%' or `typee` LIKE '%$name_search%' or `client` LIKE '%$name_search%' or `frome` LIKE '%$name_search%' OR `towhere` LIKE '%$name_search%' or `price` LIKE '%$name_search%'";
}
$result= mysqli_query($conn,$sql);
$operations= mysqli_fetch_all($result, MYSQLI_ASSOC);
$nbre_result = mysqli_query($conn, $nbre_req);
$row = mysqli_fetch_assoc($nbre_result);
$nbre_ops = $row['nbreops'];

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
</head>
<body class="bg-slate-500">
    <div class="absolute top-0 w-full h-full">
        <div class="block md:hidden">
            <?php include("navbarback.php");?>
        </div>
        <div class="h-full w-full grid grid-cols-6 gap-4">
            <div class="h-full col-span-1 bg-slate-900 rounded-r-lg md:block hidden">
                <?php include("dashtools.php");?>
            </div>
            <div class="relative mt-20 md:mt-0 float-right h-full col-span-6 md:col-span-5 bg-white md:rounded-lg overflow-y-scroll">
                <!--hna dyal supp-->
                <div id="SuppForm" class="forms max-centring w-h90 h-b90">
                    <div class="flex justify-between w-full h-16 md:h-20">
                        <div class="w-full md:w-1/2 h-full">
                            <h4 class="font-sifonn text-2xl md:text-3xl text-slate-900">Apercus les operations</h4>
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
                    <div class="w-full">
                        <div class="w-full h-12">
                            <form action="" method="post">
                                <div class="float-right flex">
                                    <div class="relative w-full md:w-80 h-11 mx-auto flex border bg-slate-50 rounded">
                                        <input name="searchinp" type="text" placeholder="Chercher des operations" class="outline-0 bg-transparent text-base ml-3 w-full md:w-72"> 
                                    </div>
                                    <div class="w-11 h-11 bg-slate-900 rounded ml-2 cursor-pointer">
                                        <button name="bing">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="m-3 p-0.5 w-5 h-5"><path fill="#ffffff" d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="w-full overflow-x-scroll py-5">
                            <div class="md:w-full w-max">
                                <form action="" method="post">
                                <table class="w-full text-left text-slate-900">
                                    <tr  class="border font-sifonn text-base text-gray-500">
                                        <th class="py-4 px-3">Livreur</th>
                                        <th class="py-4 px-3">Type de l'operation</th>
                                        <th class="py-4 px-3">La date</th>
                                        <th class="py-4 px-3">D'ou</th>
                                        <th class="py-4 px-3">Au quartier</th>
                                        <th class="py-4 px-3">Client</th>
                                        <th class="py-4 px-3">Le prix</th>
                                    </tr>
                                    <?php foreach ($operations as $operation) { ?>
                                    <tr name="<?php echo htmlspecialchars($operation['id']);?>" class="border font-sifonn text-base">
                                        <td class="py-4 px-3"><?php echo htmlspecialchars($operation['namee']);?></td>
                                        <td class="py-4 px-3"><?php echo htmlspecialchars($operation['typee']);?></td>
                                        <td class="py-4 px-3"><?php echo htmlspecialchars($operation['datee']);?> <span class="text-gray-400 text-sm" ><?php echo htmlspecialchars($operation['heure']);?></span></td>
                                        <td class="py-4 px-3"><?php echo htmlspecialchars($operation['frome']);?></td>
                                        <td class="py-4 px-3"><?php echo htmlspecialchars($operation['towhere']);?></td>
                                        <td class="py-4 px-3"><?php echo htmlspecialchars($operation['client']);?></td>
                                        <td class="py-4 px-3"><?php echo htmlspecialchars($operation['price']);?> DH</td>
                                        <td class=""><button class="outline-none cursor-pointer w-10 h-10 p-2 bg-sky-600 rounded text-white text-sm" name="deleteop" value="<?php echo htmlspecialchars($operation['id']);?>">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="mx-auto w-5 h-5"><path fill="#ffffff" d="M170.5 51.6L151.5 80h145l-19-28.4c-1.5-2.2-4-3.6-6.7-3.6H177.1c-2.7 0-5.2 1.3-6.7 3.6zm147-26.6L354.2 80H368h48 8c13.3 0 24 10.7 24 24s-10.7 24-24 24h-8V432c0 44.2-35.8 80-80 80H112c-44.2 0-80-35.8-80-80V128H24c-13.3 0-24-10.7-24-24S10.7 80 24 80h8H80 93.8l36.7-55.1C140.9 9.4 158.4 0 177.1 0h93.7c18.7 0 36.2 9.4 46.6 24.9zM80 128V432c0 17.7 14.3 32 32 32H336c17.7 0 32-14.3 32-32V128H80zm80 64V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16z"/>
                                        </svg>
                                        </button>
                                    </td>
                                    </tr>
                                    <?php } ?>
                                </table>
                                <h4 class=" border rounded h-14 px-3 py-4 font-sifonn text-base"><?php if(isset($_POST['bing'])){echo "le nombre des charges dans ce cas est : ".$nbre_ops;}?></div>
                                </form>
                            </div>
                        </div>
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