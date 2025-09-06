<?php
$page="contact";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./src/style.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<div class="relative w-full h-122 md:h-124 bg-center bg-cover bg-[url('https://images.unsplash.com/photo-1613941353218-71a3f1522248?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1172&q=80')]">
    <div class="bg-gr"></div>
    <?php include("navbar.php") ?>
    <div class="max-centring w-11/12 mt-12 md:mt-16">
        <h2 class="text-white text-4xl md:text-5xl font-sifonn ">You Can <span class="text-sky-500">Ayat Delivery</span></h2>
        <p class="text-white text-sm md:text-base  font-sifonn mt-3">Vos souhaits deviennent réalité grâce à notre service de livraison efficace et fiable !</p>
    </div>
    <?php include("whatsapp.php") ?>
</div>
<!--
<div class="w-full">
    <div class="w-11/12 mx-auto mt-20">
            <h2 class="text-center text-slate-900 text-3xl font-sifonn">Vos besoins, notre priorité : </h2>
            <h2 class="text-center text-slate-900 text-3xl font-sifonn">Ayat Delivery, vos services de livraison sur mesure !</h2>
            <p class="text-gray-500 font-graphik text-sm text-center my-3">Vos souhaits deviennent réalité grâce à notre service de livraison efficace et fiable !</p>
    </div>
    <div class="w-9/12 h-80 mt-16 mx-auto grid grid-cols-3 gap-4 justify-items-center">
        <div class="shadow-3xl rounded-xl w-11/12 p-6 bg-sky-600">
            <div class="relative">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-sky-700 icon-centring">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                </svg>
                <svg viewBox="0 0 200 200" class="w-28 mx-auto" xmlns="http://www.w3.org/2000/svg">
                <path  fill="white" d="M46.5,-48.7C59.5,-33.6,68.6,-16.8,70.8,2.2C73.1,21.3,68.5,42.6,55.5,57.3C42.6,72.1,21.3,80.2,1,79.2C-19.2,78.2,-38.5,68,-53.8,53.2C-69,38.5,-80.3,19.2,-78.9,1.4C-77.5,-16.4,-63.4,-32.9,-48.1,-48C-32.9,-63.2,-16.4,-77.1,0.2,-77.3C16.8,-77.4,33.6,-63.9,46.5,-48.7Z"  transform="translate(100 100)" />
                </svg>
            </div>
            <div class="text-center">
                <h2 class="text-white text-2xl font-sifonn">Adresse</h2>
                <div class="">
                    <h6 class="text-white text-base w-2/3 mx-auto">744 New York Ave, Brooklyn, Kings, New York 10224</h6>
                </div>
            </div> 
        </div>
        <div class="shadow-3xl rounded-xl w-11/12 p-6">
            <div class="relative">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-white icon-centring">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                </svg>
                <svg viewBox="0 0 200 200" class="w-28 mx-auto" xmlns="http://www.w3.org/2000/svg">
                <path  fill="#0F62FE" d="M46.2,-44.3C60.3,-32.2,72.3,-16.1,71.8,-0.5C71.4,15.2,58.4,30.3,44.4,44.1C30.3,57.8,15.2,70,-2.3,72.3C-19.8,74.6,-39.5,67,-53.2,53.3C-66.8,39.5,-74.3,19.8,-74.1,0.2C-73.9,-19.4,-66,-38.8,-52.4,-50.9C-38.8,-63.1,-19.4,-68,-1.7,-66.3C16.1,-64.7,32.2,-56.5,46.2,-44.3Z"  transform="translate(100 100)" />
                </svg>
            </div>
            <div class="text-center">
                <h2 class="text-slate-900 text-2xl font-sifonn">Phone</h2>
                <div class="">
                    <h6 class="text-gray-500 text-base">(+642) 245 356 432</h6>
                    <h6 class="text-gray-500 text-base">(+642) 245 356 432</h6>
                </div>
            </div>
        </div>
        <div class="shadow-3xl rounded-xl w-11/12 p-6">
            <div class="relative">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-white icon-centring">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                </svg>
                <svg viewBox="0 0 200 200" class=" w-28 mx-auto" xmlns="http://www.w3.org/2000/svg">
                <path  fill="#0F62FE" d="M56.8,-43.1C72.8,-25.3,84.3,-1.7,79.1,16.8C73.8,35.2,51.8,48.6,30.4,56.3C8.9,64,-11.9,66.1,-29,58.5C-46,50.9,-59.1,33.7,-64.8,13.5C-70.5,-6.8,-68.7,-30.1,-56.7,-47C-44.6,-63.8,-22.3,-74.2,-0.9,-73.4C20.4,-72.7,40.9,-60.8,56.8,-43.1Z"  transform="translate(100 100)" />
                </svg>
            </div>
            <div class="text-center">
                <h2 class="text-slate-900 text-2xl font-sifonn">Boite</h2>
                <div class="">
                    <h6 class="text-gray-500 text-base">bisy@support.com</h6>
                    <h6 class="text-gray-500 text-base">Boite@support.com</h6>
                </div>
            </div>
        </div>

    </div>
</div>
-->
<div class="w-full">
    <div class="w-10/12 md:w-11/12 mx-auto mt-10 md:mt-20">
        <h2 class="text-center text-slate-900 text-3xl font-sifonn">Tu peut contacter nous sur :</h2>
        <p class="text-gray-500 font-graphik text-sm text-center my-3">Vos souhaits deviennent réalité grâce à notre service de livraison efficace et fiable !</p>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 w-10/12 mx-auto mt-10">
        <div class="relative h-80 md:h-96 rounded overflow-hidden bg-center bg-cover bg-[url('https://images.unsplash.com/photo-1652862730747-d8c159300ccc?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80')]">
            <div class="bg-gr"></div>
            <div class="font-sifonn absolute bottom-0 mb-6 ml-8">
                <h3 class="text-3xl text-white ">Contacter Nous</h3>
                <p class="text-base text-gray-200">Sur whatsapp, on est a votre service</p>
            </div>
        </div>
        <div class="relative md:col-span-2 h-80 md:h-96 overflow-hidden rounded bg-center bg-cover bg-[url('https://images.unsplash.com/photo-1613900148879-1c4f139e6a8f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=765&q=80')]">
            <div class="bg-gr"></div>
            <div class="font-sifonn absolute bottom-0 mb-6 ml-8">
                <h3 class="text-3xl text-white ">Suiver Nous</h3>
                <p class="text-base text-gray-200">Sur facebook et intagram</p>
            </div>
        </div>
    </div>
</div>

<div class="w-full mt-10 md:mt-20">
    <div class="h-80 md:h-122 w-full md:w-10/12 shadow-xl mx-auto md:rounded-md overflow-hidden">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1645.9844373810251!2d-2.9016774361931876!3d34.40213703663722!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd9d6360eab2b1a9%3A0xe7739826d31eb29f!2sAYAT%20DELIVERY!5e0!3m2!1sfr!2sma!4v1682859976328!5m2!1sfr!2sma" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>
<div class="w-full mt-16 md:mt-24">
    <div class="mx-auto w-full md:w-8/12">
        <div class="w-10/12 mx-auto">
            <h2 class="text-center text-slate-900 text-3xl font-sifonn">Envoyer Nous un message :</h2>
            <p class="text-gray-500 font-graphik text-sm text-center my-3">Vos souhaits deviennent réalité grâce à notre service de livraison efficace et fiable !</p>
        </div>
        <div class="relative mx-auto md:rounded w-full md:w-10/12 bg-white h-150 md:h-145 md:mt-10 md:shadow-3xl">
            <div class="absolute mx-auto mt-3 w-full">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-5 w-11/12 mx-auto mt-7">
                    <input class="text-gray-500 bg-gray-100 outline-0 p-3 rounded-sm" type="text" placeholder="Prenom" name="l_name">
                    <input class="text-gray-500 bg-gray-100 outline-0 p-3 rounded-sm"  type="text" placeholder="Nom" name="f_name">
                    <input class="text-gray-500 bg-gray-100 outline-0 p-3 rounded-sm" type="text" placeholder="Email adresse" name="email">
                    <input class="text-gray-500 bg-gray-100 outline-0 p-3 rounded-sm"  type="text" placeholder="Phone number" name="phone">
                    <input class="md:col-span-2 text-gray-500 bg-gray-100 outline-0 p-3 rounded-sm"  type="text" placeholder="Sujet" name="Sujet">
                    <textarea name="message" class="md:col-span-2 w-full h-44 md:h-80 text-gray-400 bg-gray-100 outline-0 p-3 rounded-sm">Votre message</textarea>
                    <div class="flex items-center mb-4">
                        <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 outline-0 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="default-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">I agree to the Terms & Conditions</label>
                    </div>
                    <div class="">
                        <input type="Submit" value="Envoyer" class="p-3 w-40 float-right bg-sky-600 text-white font-sifonn text-xl">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include("footer.php"); ?>
<script>
    let navbar = document.getElementById('navbar').classList;
    window.addEventListener('scroll', e => {
        if(window.scrollY > 300){
         navbar.remove("absolute")
         navbar.add("navanim")
        } 
        else{
         navbar.remove("navanim")
         navbar.add("absolute")
        }
    })
</script>
</body>
</html>