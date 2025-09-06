<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
<div class="w-full mt-10">
    <div class="mx-auto w-3/4 p-1">
        <h4 class="font-sifonn text-3xl text-white">Dashboard</h4>
        <p class="font-sifonn text-sm text-white">Lorem ipsum dolor</p>
    </div> 
    <div id="liens" class="mt-10 flex flex-col mx-auto w-max">
    <span onclick="window.location.href = './dashboard.php';" class="text-white w-full hover:bg-slate-800 border-transparent border-4 font-sifonn cursor-pointer rounded-md p-2 text-sm mb-2 liens">Retour au dashboard</span>
        <span onclick="window.location.href = './add.php';" class="text-white w-full hover:bg-slate-800 border-transparent border-4 font-sifonn cursor-pointer rounded-md p-2 text-sm mb-2 liens">Ajouter une operation</span>
        <span onclick="window.location.href = './delete.php';" class="text-white w-full hover:bg-slate-800 border-transparent border-4 font-sifonn cursor-pointer rounded-md p-2 text-sm mb-2 liens">Apercus les operations</span>
        <span onclick="window.location.href = './charge.php';" class="text-white w-full hover:bg-slate-800 border-transparent border-4 font-sifonn cursor-pointer rounded-md p-2 text-sm mb-2 liens">Ajouter une charge</span>
        <span onclick="window.location.href = './Appcharge.php';" class="text-white w-full hover:bg-slate-800 border-transparent border-4 font-sifonn cursor-pointer rounded-md p-2 text-sm mb-2 liens">Apercus les charges</span>
        <span onclick="window.location.href = './Statistics.php';" class="text-white w-full hover:bg-slate-800 border-transparent border-4 font-sifonn cursor-pointer rounded-md p-2 text-sm mb-2 liens">Statistiques</span>
    </div>
</div>
</body>
</html>