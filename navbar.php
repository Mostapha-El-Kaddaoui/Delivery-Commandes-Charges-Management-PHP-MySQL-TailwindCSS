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
            <img src="logo2.png" class="w-24 -ml-5 md:w-32 max-w-none" alt="">
            </div>
            <div class="hidden md:block mx-auto mt-4 w-max h-full">
                <ul class="flex text-slate-900 font-sifonn text-lg justify-between space-x-6">
                    <li onclick="window.location.href = './index.php';" class="<?php if($page=="index"){echo "border-b ";}?>cursor-pointer hover:border-b border-slate-900">Acceuil</li>
                    <li onclick="window.location.href = './index.php';" class="cursor-pointer hover:border-b border-slate-900">A propos</li>
                    <li onclick="window.location.href = './index.php';" class="flex cursor-pointer hover:border-b border-slate-900">Acheter<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 m-px">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg></li>
                    <li onclick="window.location.href = './contact.php';" class="<?php if($page=="contact"){echo "border-b ";}?>cursor-pointer hover:border-b border-slate-900">Contacter</li>
                    <li onclick="window.location.href = './index.php';" class="cursor-pointer hover:border-b border-slate-900">Aider</li>
                </ul>
            </div>
            <div class="w-40 -mt-3 justify-end text-slate-900 hidden md:flex">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-3">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                </svg>
                <span class="bg-slate-900 pl-1 pt-0 pb-3 pr-2 -ml-2 rounded-full w-4 h-4 p-1 text-xs text-white">0</span>
            </div>
            <div class="flex -mt-3 md:hidden w-40 justify-end">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-8" viewBox="0 0 448 512"><path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/></svg>
            </div>
        </div>
    </div>
</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="dist/allstyle.css" rel="stylesheet">
    <link href="myst2.css" rel="stylesheet">
    <title></title>
</head>
<body>
<div id="navbar" class="md:absolute fixed top-0 left-0 w-full bg-white h-24 z-10 shadow-md md:shadow-none ">
        <div class="w-11/12 justify-between mx-auto flex items-center h-10 mt-7">
            <div class="w-40">
            <img src="logo2.png" class="w-24 -ml-5 md:w-32 max-w-none" alt="">
            </div>
            <div class="hidden md:block mx-auto mt-4 w-max h-full">
                <ul class="flex text-slate-900 font-sifonn text-lg justify-between space-x-6">
                    <li onclick="window.location.href = './index.php';" class="<?php if($page=="index"){echo "border-b ";}?>cursor-pointer hover:border-b border-slate-900">Acceuil</li>
                    <li onclick="window.location.href = './index.php';" class="cursor-pointer hover:border-b border-slate-900">A propos</li>
                    <li onclick="window.location.href = './index.php';" class="flex cursor-pointer hover:border-b border-slate-900">Acheter<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 m-px">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg></li>
                    <li onclick="window.location.href = './contact.php';" class="<?php if($page=="contact"){echo "border-b ";}?>cursor-pointer hover:border-b border-slate-900">Contacter</li>
                    <li onclick="window.location.href = './index.php';" class="cursor-pointer hover:border-b border-slate-900">Aider</li>
                </ul>
            </div>
            <div class="w-40 -mt-3 justify-end text-slate-900 hidden md:flex">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-3">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                </svg>
                <span class="bg-slate-900 pl-1 pt-0 pb-3 pr-2 -ml-2 rounded-full w-4 h-4 p-1 text-xs text-white">0</span>
            </div>
            <div class="flex -mt-3 md:hidden w-40 justify-end">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-8" viewBox="0 0 448 512"><path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/></svg>
            </div>
        </div>
    </div>
</body>
</html>