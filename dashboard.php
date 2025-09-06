<?php
session_start();
//if (!isset($_SESSION['lock'])) {
  //  header("location: login.php");
//}

if(isset($_POST['logout'])){
    session_destroy();
    header("location:login.php");
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
</head>
<body class="bg-slate-900">
    <div class="block md:hidden">
        <?php include("navbarback.php");?>
    </div>
    <div class="md:block hidden absolute top-0 h-full">
    <?php include("pronav.php");?>
    </div>
    <div style="overflow:scroll;" class="absolute overflow-scroll top-0 right-0 w-full mt-20 md:mt-0 md:w-tools h-170 md:h-full bg-white md:rounded-l-xl ">
        <div class="absolute top-8 md:top-1/2 left-1/2 -translate-x-1/2 md:-translate-y-1/2 w-h90 h-b89 mx-auto">
            <div class="flex justify-between w-full h-16 md:h-20">
                <div class="w-full md:w-1/2 h-full ">
                    <h4 class="font-sifonn text-2xl md:text-3xl text-slate-900">Dashboard</h4>
                    <p class="font-sifonn text-xs md:text-sm text-slate-400">Lorem ipsum dolor sit amet consectetur</p>
                </div> 
                <div class="w-1/2 hidden md:block h-full md:w-1/2">
                    <div class="float-right flex">
                        <div class="w-10 h-10 mr-2 rounded-full bg-center bg-cover bg-[url('https://images.unsplash.com/photo-1506748686214-e9df14d4d9d0?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80')]"></div>
                        <div class="">
                            <h4 class="font-sifonn text-lg text-slate-900"><?php echo $_SESSION["Nameman"]; ?></h4>
                            <p class="font-sifonn text-xs text-slate-400">Lorem ipsum dolor</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div onclick="window.location.href = './add.php';" class="bg-slate-900 cursor-pointer h-48 md:h-56 rounded-md shadow-lg relative">
                        <div class="absolute left-0 top-0 m-8 w-14 h-14 rounded-md bg-white rotate-45">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="-rotate-45 m-4 w-6 h-6"><path fill="#0f172a" d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM64 256c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H96c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/></svg>
                        </div>
                        <div class="absolute left-0 bottom-0 m-5">
                            <h4 class="font-sifonn text-xl md:text-2xl text-white">Ajoute une operation</h4>
                            <p class="font-sifonn text-sm md:text-base text-white">Lorem ipsum dolor sit ame</p>
                        </div>
                    </div>
                    <div onclick="window.location.href = './charge.php';" class="bg-slate-200 cursor-pointer h-48 md:h-56 rounded-md shadow-lg relative">
                        <div class="absolute left-0 top-0 m-8 w-14 h-14 rounded-md bg-slate-900 rotate-45">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="-rotate-45 m-4 w-6 h-6"><path fill="#ffffff" d="M96 0C60.7 0 32 28.7 32 64V448c-17.7 0-32 14.3-32 32s14.3 32 32 32H320c17.7 0 32-14.3 32-32s-14.3-32-32-32V304h16c22.1 0 40 17.9 40 40v32c0 39.8 32.2 72 72 72s72-32.2 72-72V252.3c32.5-10.2 56-40.5 56-76.3V144c0-8.8-7.2-16-16-16H544V80c0-8.8-7.2-16-16-16s-16 7.2-16 16v48H480V80c0-8.8-7.2-16-16-16s-16 7.2-16 16v48H432c-8.8 0-16 7.2-16 16v32c0 35.8 23.5 66.1 56 76.3V376c0 13.3-10.7 24-24 24s-24-10.7-24-24V344c0-48.6-39.4-88-88-88H320V64c0-35.3-28.7-64-64-64H96zM216.9 82.7c6 4 8.5 11.5 6.3 18.3l-25 74.9H256c6.7 0 12.7 4.2 15 10.4s.5 13.3-4.6 17.7l-112 96c-5.5 4.7-13.4 5.1-19.3 1.1s-8.5-11.5-6.3-18.3l25-74.9H96c-6.7 0-12.7-4.2-15-10.4s-.5-13.3 4.6-17.7l112-96c5.5-4.7 13.4-5.1 19.3-1.1z"/></svg>
                        </div>
                        <div class="absolute left-0 bottom-0 m-5">
                            <h4 class="font-sifonn text-xl md:text-2xl text-slate-900">Enregistre une charge</h4>
                            <p class="font-sifonn text-sm md:text-base text-slate-900">Lorem ipsum dolor sit amet consectetur</p>
                        </div>
                    </div>
                    <div onclick="window.location.href = './Statistics.php';" class="bg-slate-200 cursor-pointer h-48 md:h-56 rounded-md shadow-lg relative">
                        <div class="absolute left-0 top-0 m-8 w-14 h-14 rounded-md bg-slate-900 rotate-45">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="-rotate-45 m-4 w-6 h-6"><path fill="#ffffff" d="M64 64c0-17.7-14.3-32-32-32S0 46.3 0 64V400c0 44.2 35.8 80 80 80H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H80c-8.8 0-16-7.2-16-16V64zm406.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L320 210.7l-57.4-57.4c-12.5-12.5-32.8-12.5-45.3 0l-112 112c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L240 221.3l57.4 57.4c12.5 12.5 32.8 12.5 45.3 0l128-128z"/></svg>
                        </div>
                        <div class="absolute left-0 bottom-0 m-5">
                            <h4 class="font-sifonn text-xl md:text-2xl text-slate-900">Vos Statistiques</h4>
                            <p class="font-sifonn text-sm md:text-base text-slate-900">Lorem ipsum dolor sit amet</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="justify-between w-full h-20 mt-8 md:flex hidden">
                <div class="w-1/4 h-full">
                    <h4 class="font-sifonn text-2xl text-slate-900">Les operations effectuees</h4>
                    <p class="font-sifonn text-sm text-slate-500">Lorem ipsum dolor sit amet consectetur</p>
                </div> 
                <div class="float-right flex">
                    <div class="relative w-80 h-12 mx-auto flex border bg-slate-100 rounded">
                    <input type="text" placeholder="Chercher des operations" class="outline-0 bg-transparent text-base ml-3 w-72"> 
                    </div>
                    <div class="w-12 h-12 bg-slate-900 rounded ml-2 cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="m-4 w-4 h-4"><path fill="#ffffff" d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg>
                    </div>
                </div>
            </div>
            <div class="w-full md:block hidden">
                <table class="w-full text-left text-slate-900">
                    <tr  class="border font-sifonn text-base text-gray-500"><th class="py-4 px-3">Type de l'operation</th><th class="py-4 px-3">La date</th><th class="py-4 px-3">D'ou</th><th class="py-4 px-3">Au quartier</th><th class="py-4 px-3">Le prix</th></tr>
                    <tr class="border font-sifonn text-base"><td class="py-4 px-3">Livraison de restauration rapide</td><td class="py-4 px-3">25/11/2023 <span class="text-gray-400 text-sm" > 11:58 AM</span></td><td class="py-4 px-3">Bassatin</td><td class="py-4 px-3">Attakadum</td><td class="py-4 px-3">15 DH</td></tr>
                    <tr class="border font-sifonn text-base"><td class="py-4 px-3">Livraison de restauration rapide</td><td class="py-4 px-3">25/11/2023 <span class="text-gray-400 text-sm" > 11:58 AM</span></td><td class="py-4 px-3">Bassatin</td><td class="py-4 px-3">Attakadum</td><td class="py-4 px-3">15 DH</td></tr>
                    <tr class="border font-sifonn text-base"><td class="py-4 px-3">Livraison de restauration rapide</td><td class="py-4 px-3">25/11/2023 <span class="text-gray-400 text-sm" > 11:58 AM</span></td><td class="py-4 px-3">Bassatin</td><td class="py-4 px-3">Attakadum</td><td class="py-4 px-3">15 DH</td></tr>
                    <tr class="border">        
                        <td class="py-4 px-3 text-gray-500 font-sifonn text-base">
                            <div class="cursor-pointer flex w-max">
                                <h6 class="font-sifonn text-base underline">Voir Plus</h6>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="m-1 w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                </svg> 
                            </div>
                        </td> 
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>
</html>