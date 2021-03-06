<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anime Bass Tabs</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="shortcut icon" href="./assets/img/absLogo.png"/>
</head>
    <body>
        <!-- Navbar -->
        <nav class="bg-gradient-to-br from-gray-50 to-gray-300 shadow-md sticky top-0 z-10">
            <div class="px-3 mx-auto">
                <div class="flex justify-between">
                    <!-- Recordar agrupar en contenedores las cosas que queremos que vayan del lado izquierdo y derecho -->
                    <!-- Lado izquierdo -->
                    <div class="flex space-x-4">
                        <!-- Logo -->
                        <a href="./index.php" class="flex items-center py-2 px-2 text-gray-200">
                            <img class="rounded-full mx-1" src="./assets/img/absLogo.png" alt="" width="50">
                            <span class="font-extrabold text-black">Anime Bass Tabs</span>
                        </a>
                        <!-- Nav lado izquierdo, si se desea -->
                        <!-- <div class="hidden md:flex items-center space-x-1">
                            <a class="py-5 px-3 text-gray-200 hover:text-black" href="#">Features</a>
                            <a class="py-5 px-3 text-gray-200 hover:text-black" href="#">Pricing</a>
                        </div> -->
                    </div>
                    <!-- Lado derecho -->
                    <div class="hidden md:flex items-center space-x-1">
                        <a href="./index.php" class="flex items-center py-2 px-3 text-black rounded hover:bg-gray-300 hover:text-black transition duration-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                            </svg>
                            <span>Home</span>
                        </a>
                        <a href="./pages/sArtistas.php" class="flex items-center py-2 px-3 text-black rounded hover:bg-gray-300 hover:text-black transition duration-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M18 3a1 1 0 00-1.196-.98l-10 2A1 1 0 006 5v9.114A4.369 4.369 0 005 14c-1.657 0-3 .895-3 2s1.343 2 3 2 3-.895 3-2V7.82l8-1.6v5.894A4.37 4.37 0 0015 12c-1.657 0-3 .895-3 2s1.343 2 3 2 3-.895 3-2V3z" />
                            </svg>
                            <span>Tabs</span>
                        </a>
                        <a href="./pages/horario.html" class="flex items-center py-2 px-3 text-black rounded hover:bg-gray-300 hover:text-black transition duration-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                            </svg>
                            <span>Horario</span>
                        </a>
                        <a href="./pages/contacto.html" class="flex items-center py-2 px-3 text-black rounded hover:bg-gray-300 hover:text-black transition duration-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                            </svg>
                            <span>Contacto</span>
                        </a>
                        <!-- Dropdown button
                        <div class="flex flex-col overflow-visible float-right items-start">
                            <button class="rounded p-2 dropBtn hover:bg-gray-300 transition duration-500" id="dropBtn">
                                Productos
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline dropBtn" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </button>
                            Dropdown items
                            <div class="text-sm bg-gradient-to-br from-gray-50 to-gray-300 hidden absolute mt-12 flex-col rounded min-w-max" id="dropdown">
                                <a href="./pages/productos.html" class="rounded px-2 py-1 hover:bg-gray-300">Elevadores</a>
                                <a href="./pages/productos.html" class="rounded px-2 py-1 hover:bg-gray-300">Escaleras el??ctricas</a>
                                <a href="./pages/productos.html" class="rounded px-2 py-1 hover:bg-gray-300">Pasillos Electricos</a>
                            </div>
                        </div> -->
                    </div>
                    <!-- Mobile button -->
                    <div class="md:hidden flex items-center">
                        <button class="mobile-menu-button">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-black" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <!-- mobile menu -->
            <div class="mobile-menu hidden md:hidden p-1">
                <a href="./index.php" class="flex justify-center items-center py-2 px-3 text-black rounded hover:bg-gray-300 hover:text-black transition duration-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                    </svg>
                    <span>Home</span>
                </a>
                <a href="./pages/sArtistas.php" class="flex justify-center items-center py-2 px-3 text-black rounded hover:bg-gray-300 hover:text-black transition duration-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M18 3a1 1 0 00-1.196-.98l-10 2A1 1 0 006 5v9.114A4.369 4.369 0 005 14c-1.657 0-3 .895-3 2s1.343 2 3 2 3-.895 3-2V7.82l8-1.6v5.894A4.37 4.37 0 0015 12c-1.657 0-3 .895-3 2s1.343 2 3 2 3-.895 3-2V3z" />
                    </svg>
                    <span>Tabs</span>
                </a>
                <a href="./pages/horario.html" class="flex justify-center items-center py-2 px-3 text-black rounded hover:bg-gray-300 hover:text-black transition duration-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                    </svg>
                    <span>Horario</span>
                </a>
                <a href="./pages/contacto.html" class="flex justify-center items-center py-2 px-3 text-black rounded hover:bg-gray-300 hover:text-black transition duration-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                    </svg>
                    <span>Contacto</span>
                </a>
                <!-- Dropdown button 1
                <div class="text-center flex flex-col">
                    <button class="rounded p-2 m-1 dropBtnM hover:bg-gray-300" id="dropBtnM">
                        Productos
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline dropBtnM" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    Dropdown items
                    <div class="bg-gray-200 hidden flex-col m-1 rounded text-sm" id="dropdownM">
                        <a href="./pages/productos.html" class="rounded px-2 py-1 hover:bg-gray-300">Elevadores</a>
                        <a href="./pages/productos.html" class="rounded px-2 py-1 hover:bg-gray-300">Escaleras el??ctricas</a>
                        <a href="./pages/productos.html" class="rounded px-2 py-1 hover:bg-gray-300">Elevadores de autos</a>
                        <a href="./pages/productos.html" class="rounded px-2 py-1 hover:bg-gray-300">Elevadores para discapacitados</a>
                    </div>
                </div> -->
            </div>
        </nav>
        <!-- Fin de navbar -->
        <!-- <h1 class="text-center text-3xl lg:text-5xl my-7">Welcome!</h1> -->
        <!-- Carousel -->
        <div id="carouselExampleCaptions" class="carousel slide relative" data-bs-ride="carousel">
            <div class="carousel-inner relative w-full overflow-hidden">
        <?php
            include('./pages/conexion.php');
            $query = "SELECT IdBanner, Titulo, Descripcion, Imagen from banner order by IdBanner asc";
            $result = mysqli_query($conn, $query);
            $i = 0;
            if (mysqli_num_rows($result)>0) {
                while ($row=mysqli_fetch_array($result)){
                    if ($i==0) {
                        ?>
                            <div class="carousel-item active relative float-left w-full">
                                <img
                                    src="./assets/banner/<?php echo $row[3];?>"
                                    class="block w-full"
                                />
                                <div class="carousel-caption hidden md:block absolute text-center">
                                    <h5 class="text-xl"><?php echo $row[1];?></h5>
                                    <p><?php echo $row[2];?></p>
                                </div>
                            </div>
                        <?php
                    }else{
                        ?>
                            <div class="carousel-item relative float-left w-full">
                                <img
                                    src="./assets/banner/<?php echo $row[3];?>"
                                    class="block w-full"
                                />
                                <div class="carousel-caption hidden md:block absolute text-center">
                                    <h5 class="text-xl"><?php echo $row[1];?></h5>
                                    <p><?php echo $row[2];?></p>
                                </div>
                            </div>
                        <?php
                    }
                    $i++;
                }
            }
        ?>
            </div>
            <button
                class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
                type="button"
                data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev"
            >
                <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button
                class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
                type="button"
                data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next"
            >
                <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <!-- About -->
        <div class="container mx-auto p-7">
            <h1 class="text-2xl text-center">About Anime Bass Tabs</h1>
            <div class="grid grid-cols-1 lg:grid-cols-2 items-center">
                <div>
                    <p class="font-sans leading-relaxed text-justify mt-3">
                        I decided to start this project to get together 2 things I absolutely love. 
                        Music and Anime! After many years of playing the bass guitar I realised that 
                        anime songs (or anything that has to do with j-rock, j-pop, etc.) are the 
                        most fun to play. Literally about 80% of these songs have an amazing bassline. 
                        The problem is that not many people know or have interest in this particular 
                        music, so there is a huge lack of tabs.
                    </p>
                    <p class="font-sans leading-relaxed text-justify mt-3">
                        So at this point I decided to do something about it and created this project.Here you will find tabs made by me. 
                        I will do my best to upload regularly so you can learn a lot of songs along 
                        with me. I am really no expert so the tabs may not be 100% accurate, but I 
                        will work hard to make them awesome. My goal is to share these tabs with you, 
                        so you can learn all of these great songs I just mentioned, and spread notoriety 
                        to this, in my opinion, the best, but also, underrated music genre.
                    </p>
                    <p class="font-sans leading-relaxed text-justify mt-3">
                        As I said before, I am really new to all of this. But I will work hard to learn and make best 
                        content every day. I want YOU to feel this project is yours as much as mine, 
                        so feel free to send me a message if you have a tip or suggestion. That is 
                        all my friends, Let???s have some fun!
                    </p>
                </div>
                <div class="flex justify-center">
                    <img src="./assets/img/absLogo.png" class="w-full lg:w-96 " alt="">
                </div>
            </div>
        </div>
        <!-- Footer -->
        <footer class="text-gray-600 body-font">
            <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
                <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
                    <img class="rounded-full mx-1" src="./assets/img/absLogo.png" alt="" width="40">
                    <span class="ml-3 text-xl">Anime Bass Tabs</span>
                </a>
                <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">?? 2022 Anime Bass Tabs ???
                    <a href="https://twitter.com/animebasstabs" class="text-gray-600 ml-1" rel="noopener noreferrer" target="_blank">@animebasstabs</a>
                </p>
                <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
                    <a href="https://www.facebook.com/AnimeBassTabs1484" class="text-gray-500 hover:animate-bounce">
                        <svg fill="#1877F2" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Facebook</title><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                    </a>
                    <a href="https://www.youtube.com/c/AnimeBassTabs" class="ml-3 text-gray-500 hover:animate-bounce">
                        <svg fill="#FF0000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>YouTube</title><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                    </a>
                    <a href="https://open.spotify.com/playlist/0YvkHxXwqqbmJh2pWlq9Od?si=4Smp4u_7RhWPnTHDBqMB3Q&nd=1" class="ml-3 text-gray-500 hover:animate-bounce">
                        <svg fill="#1DB954" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Spotify</title><path d="M12 0C5.4 0 0 5.4 0 12s5.4 12 12 12 12-5.4 12-12S18.66 0 12 0zm5.521 17.34c-.24.359-.66.48-1.021.24-2.82-1.74-6.36-2.101-10.561-1.141-.418.122-.779-.179-.899-.539-.12-.421.18-.78.54-.9 4.56-1.021 8.52-.6 11.64 1.32.42.18.479.659.301 1.02zm1.44-3.3c-.301.42-.841.6-1.262.3-3.239-1.98-8.159-2.58-11.939-1.38-.479.12-1.02-.12-1.14-.6-.12-.48.12-1.021.6-1.141C9.6 9.9 15 10.561 18.72 12.84c.361.181.54.78.241 1.2zm.12-3.36C15.24 8.4 8.82 8.16 5.16 9.301c-.6.179-1.2-.181-1.38-.721-.18-.601.18-1.2.72-1.381 4.26-1.26 11.28-1.02 15.721 1.621.539.3.719 1.02.419 1.56-.299.421-1.02.599-1.559.3z"/></svg>
                    </a>
                    <a href="https://twitter.com/animebasstabs" class="ml-3 text-gray-500 hover:animate-bounce">
                        <svg fill="#1DA1F2" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Twitter</title><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>
                    </a>
                    <a href="https://www.instagram.com/animebasstabs/" class="ml-3 text-gray-500 hover:animate-bounce">
                        <svg fill="black" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <title>Instagram</title>
                            <path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/>
                        </svg>
                    </a>
                </span>
            </div>
        </footer>
        <!-- Fin del footer -->
        <script src="./js/main.js" ></script>
        <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
    </body>
</html>