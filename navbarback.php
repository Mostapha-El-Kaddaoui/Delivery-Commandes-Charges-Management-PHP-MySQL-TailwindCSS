<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./dist/delm.css" rel="stylesheet">
    <link href="./dist/myst2.css" rel="stylesheet">
    <title></title>
</head>
<body>
<div id="navbar" class="md:absolute fixed top-0 left-0 w-full bg-white h-24 z-10 shadow-md md:shadow-none ">
    <div class="w-11/12 justify-between mx-auto flex items-center h-10 mt-7">
        <div class="w-40">
        <img onclick="window.location.href = './dashboard.php';" src="logo2.png" class="w-24 -ml-5 md:w-32 max-w-none" alt="">
        </div>
        <div onclick="open_nav()" class="flex -mt-3 md:hidden w-40 justify-end">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-8" viewBox="0 0 448 512"><path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/></svg>
        </div>
    </div>
</div>
<div id="id-nav" class="fixed hidden top-0 left-0 z-20 h-full w-full bg-gr">
    <div class="absolute top-0 left-0 z-10 w-3/4 h-full bg-white border-2 rounded-r-lg">
        <div onclick="hide_nav()" class="m-5">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6" viewBox="0 0 448 512"><path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/></svg>
        </div>
        <div class="relative top-0 left-0 mt-32 w-max z-30 mx-auto">
            <h4 onclick="window.location.href = './dashboard.php';"  class="text-slate-900 text-sm font-sifonn my-7">Retour au dashboard</h4>
            <h4 onclick="window.location.href = './add.php';" class="text-slate-900 text-sm font-sifonn my-7">Ajouter une operation</h4>
            <h4 onclick="window.location.href = './delete.php';" class="text-slate-900 text-sm font-sifonn my-7">Apercus les operations</h4>
            <h4 onclick="window.location.href = './charge.php';" class="text-slate-900 text-sm font-sifonn my-7">Ajouter une charge</h4>
            <h4 onclick="window.location.href = './Appcharge.php';" class="text-slate-900 text-sm font-sifonn my-7">Apercus les charges</h4>
            <h4 onclick="window.location.href = './Statistics.php';" class="text-slate-900 text-sm font-sifonn my-7">Statistiques</h4>
        </div>
        <div class="relative mt-36 w-max mx-auto">
            <div class="float-right flex">
                <div class="w-9 h-9 mr-2 rounded-full bg-center bg-cover bg-[url('https://images.unsplash.com/photo-1506748686214-e9df14d4d9d0?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80')]"></div>
                <div class="">
                    <h4 class="font-sifonn text-base text-slate-900"><?php echo $_SESSION["Nameman"]; ?></h4>
                    <p class="font-sifonn text-xs text-slate-500">Lorem ipsum dolor</p>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
var nav_element = document.getElementById("id-nav");
function open_nav(){
    nav_element.classList.remove("hidden");
    nav_element.classList.add("block");  
}
function hide_nav(){
    nav_element.classList.remove("block");
    nav_element.classList.add("hidden");  
}
</script>
</body>
</html>