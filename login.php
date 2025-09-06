
<?php
include("conn.php");
if(isset($_POST['submit'])){
    $sql="SELECT * FROM `deilveryman`";
    $result= mysqli_query($conn,$sql);
    $mans= mysqli_fetch_all($result, MYSQLI_ASSOC);
    if($_POST['nom']==$mans[0]['nom'] and $_POST['pass']==$mans[0]['pass']){
        session_start();
        $_SESSION["lock"] = "@3782&&^%$";
        $_SESSION["Nameman"] = "Mohamed Ayat";
        $_SESSION["Namee"] = "Ayat";
        header("location: dashboard.php");
    }elseif($_POST['nom']==$mans[1]['nom'] and $_POST['pass']==$mans[1]['pass']){
        session_start();
        $_SESSION["lock"] = "@3782&&^%$";
        $_SESSION["Nameman"] = "Khalid alaoui";
        $_SESSION["Namee"] = "Alaoui";
        header("location: dashboard.php");
        
    }elseif($_POST['nom']==$mans[2]['nom'] and $_POST['pass']==$mans[2]['pass']){
        session_start();
        $_SESSION["lock"] = "@3782&&^%$";
        $_SESSION["Nameman"] = "Morad bensnaa";
        $_SESSION["Namee"] = "morad";
        header("location: dashboard.php");
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
</head>
<body>
    <form action="login.php" method="POST">
    <div class="absolute h-full grid grid-cols-5 w-full gap-4">
        <div class="relative h-full col-span-5 md:col-span-2">
            <div class="max-centring w-10/12 md:w-8/12">
                <div class="w-full mx-auto">
                    <h2 class="text-slate-900 text-3xl font-sifonn">Se Connecter :</h2>
                    <p class="text-gray-500 font-graphik text-sm my-1">Vos souhaits deviennent réalité grâce à notre</p>
                </div>
                <div class="flex flex-col">
                    <label for="nom" class="my-2 text-slate-600 text-xl font-sifonn">Nom :</label>
                    <input class="p-3 outline-0 rounded bg-gray-100" type="text" id="email" name="nom" placeholder="Votre Nom">
                    <label for="pass" class="my-2 text-slate-600 text-xl font-sifonn">Mot de passe :</label>
                    <input class="p-3 outline-0 rounded bg-gray-100" type="text" id="pass" name="pass" placeholder="**********">
                    <input type="submit" value="Se Connecter" name="submit" class="rounded cursor-pointer text-white font-sifonn p-3 mt-6 bg-slate-900">
                    <h6 class="mx-auto text-center mt-2 p-2 text-slate-600 font-sifonn text-base">Vous avez oublier le code ? </h6>
                </div>
            </div>
        </div>
        <div class="relative h-12/12 w-12/12 hidden md:block col-span-3">
            <div class="relative rounded overflow-hidden mt-2 mx-auto h-l97 w-l97 bg-center bg-cover bg-[url('https://images.unsplash.com/photo-1610478920409-ec0f58e881a5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80')]">
                <div class="bg-gr"></div>
                    <div class="absolute top-0 w-full flex justify-between items-center">
                        <div class="m-12">
                            <h4 class="font-sifonn text-2xl text-white">Login page</h4>
                        </div>
                        <div class="cursor-pointer m-12 p-3 rounded-full border border-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                            </svg>
                        </div>
                    </div>
                <div class="absolute left-0 bottom-0 m-12">
                    <h4 class="font-sifonn text-4xl text-white">Vos besoins, notre priorité </h4>
                    <p class="font-sifonn text-base text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae quisquam, temporibus alias</p>
                </div>
            </div>
        </div>
    </div>
    </form>
</body>
</html>


