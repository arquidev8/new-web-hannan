

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.tailwindcss.com"></script>
        

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Montserrat', sans-serif;
            }
        </style>
    </head>
    @include('layouts.header')
    <body class="antialiased">
    
             
        <section class="relative bg-cover bg-center bg-no-repeat">
        <div class="absolute inset-0 bg-white/75 sm:bg-transparent sm:from-white/95 sm:to-white/25 ltr:sm:bg-gradient-to-r rtl:sm:bg-gradient-to-l"></div>       
        <video class="absolute inset-0 w-full h-full object-cover" autoplay loop muted>
            <source src="{{ asset('Render.mp4') }}" type="video/mp4">
            Tu navegador no soporta el elemento de video.
        </video>
        <div class="relative mx-auto max-w-screen-xl px-4 py-32 sm:px-6 lg:flex lg:h-screen lg:items-center lg:px-8">
        <!-- Aquí va tu contenido -->
        </div>
        </section>


        <section>
            <div
                class="mx-auto max-w-screen-xl px-4 py-8 sm:py-12 sm:px-6 lg:py-16 lg:px-8"
            >
                <div class="grid grid-cols-1 gap-8 lg:grid-cols-2 lg:gap-16">
                <div
                    class="relative h-64 overflow-hidden rounded-lg sm:h-80 lg:order-last lg:h-full"
                >
                    <img
                    alt="Party"
                    src="https://i.postimg.cc/zvK2z9Yn/pexels-the-lazy-artist-gallery-1642125.jpg"
                    class="absolute inset-0 h-full w-full object-cover"
                    />
                </div>

                <div class="lg:py-24">
                    <h2 class="text-3xl text-red-700 font-bold sm:text-4xl">Invertimos para la venta de tu Inmueble</h2>

                    <p class="mt-4 text-gray-600 text-justify">
                    Hannan-Piper Real Estate es una empresa de servicios inmobiliarios con el compromiso de proveer un servicio personalizado, sensible, ético y con los más altos estándares de calidad; logrando así un alcance global que nos permita vender su propiedad en el menor tiempo posible y al mejor valor de mercado.
                    </p>

                    <a
                    href="#"
                    class="mt-8 inline-block rounded bg-red-700 px-12 py-3 text-sm font-medium text-white transition hover:bg-black focus:outline-none focus:ring focus:ring-grey-400"
                    >
                    Ver mas
                    </a>
                </div>
                </div>
            </div>
            </section>





           <section>
                    <div class="mx-auto max-w-screen-2xl px-4 py-16 sm:px-6 lg:px-8">
                        <div class="grid grid-cols-1 lg:h-screen lg:grid-cols-2">
                        <div class="relative z-10 lg:py-16">
                            <div class="relative h-45 sm:h-60 lg:h-full rounded-lg">
                            <img
                                alt="House"
                                src="https://i.postimg.cc/3JnXfwfV/Blue-Modern-Premium-Real-Estate-Instagram-Post.jpg"
                                class="absolute inset-0 h-full w-full object-cover"
                            />
                            </div>
                        </div>

                        <div class="relative flex items-center bg-gray-100">
                            <span
                            class="hidden lg:absolute lg:inset-y-0 lg:-start-16 lg:block lg:w-16 lg:bg-gray-100"
                            ></span>

                            <div class="p-8 sm:p-16 lg:p-24">
                            <h2 class="text-2xl text-red-700 font-bold sm:text-3xl">
                                Nuestra Historia
                            </h2>

                            <p class="mt-4 text-gray-600 text-justify">
                                Hannan-Piper Real Estate es una unión de visiones y paradigmas que nos inspiran cada día a revolucionar positivamente el sector inmobiliario. William W. Hannan fue el primer presidente del National Association of Realtors (NAR) en 1908 y quien luchó por que se adoptara el primer código de ética para agentes inmobiliarios. Walter C. Piper, quien presidió la NAR en 1916, luchó por que educara y se licenciara por primera vez a los que se dedicaban al sector inmobiliario, con el propósito de profesionalizar las prácticas y ofrecer un mejor valor en el servicio experto que brindamos. En resumidas cuentas, creemos firmemente en hacer las cosas bien y esto nos abre puertas para que cada día más personas confíen en nosotros para atender sus necesidades inmobiliarias
                            </p>

                            {{-- <a
                                href="#"
                                class="mt-8 inline-block rounded border border-indigo-600 bg-indigo-600 px-12 py-3 text-sm font-medium text-white hover:bg-transparent hover:text-indigo-600 focus:outline-none focus:ring active:text-indigo-500"
                            >
                                Get in Touch
                            </a> --}}
                            </div>
                        </div>
                        </div>
                    </div>
                    </section>



<h2 class="text-2xl text-red-700 font-bold sm:text-3xl mx-6 text-center mt-20">
                                Propiedades Destacadas
                            </h2>

<section class="text-gray-600 body-font flex flex-col sm:flex-row justify-center items-center">
    
  <div class="container px-5 py-15 mx-auto flex flex-row justify-center items-center ">
   <a href="/houses/{{ $results[0]['id'] }}">
                <div class="bg-white shadow overflow-hidden sm:rounded-lg p-4 m-4 transition-colors">
                 <div>
                    @if(count($results[0]['pictures']))
                        <img class="object-cover h-40 w-full rounded-md" src="{{ $results[0]['pictures'][0] }}" alt="House picture">
                    @else
                        <!-- Imagen genérica en caso de que no haya imágenes disponibles -->
                        <img class="object-cover h-40 w-full rounded-md" src="https://i.postimg.cc/59ZccgGS/imagedefault.png" alt="Imagen genérica">
                    @endif
                </div>
                <div class="px-4 py-5 sm:px-6">
                    <h3 class="text-md leading-6 font-medium text-gray-900">
                    {{ $results[0]['title'] }}
                    </h3>
                    <p class="mt-1 max-w-2xl text-sm text-gray-900">
                    <strong>Precio:</strong> €{{ number_format(floatval($results[0]['selling_cost']), 2, ',', '.') }}
                    </p>
                    <p class="mt-1 max-w-2xl text-sm text-gray-900">
                    <strong>Dirección:</strong> {{ $results[0]['street'] }}
                    </p>
                    <p class="mt-1 max-w-2xl text-sm text-gray-900">
                    <strong>Provincia:</strong> {{ $results[0]['province'] }}
                    </p>
                     <div class="mt-6 flex items-center gap-8 text-xs">
                        <div class="mt-6 flex items-center gap-8 text-xs">
                            <svg class="h-4 w-4 text-red-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10H2V5C2 3.9 2.9 3 4 3H9V5H4V10zM22 10H20V5C20 3.9 19.1 3 18 3H13V5H18V10zM3 18C3 16.9 3.9 16 5 16H19C20.1 16 21 16.9 21 18V21H3V18zM8 6V8H16V6C16 4.9 15.1 4 14 4H10C8.9 4 8 4.9 8 6z"/>
                            </svg>
                            <div class="mt-1.5 sm:mt-0">
                                <p class="">Bathroom</p>
                                <p class="font-medium">{{ $results[0]['bathrooms'] }}</p>
                            </div>
                        </div>
                        <div class="mt-6 flex items-center gap-8 text-xs">
                        <i class="fa fa-bath h-4 w-4 text-red-700"></i>
                        <div class="mt-1.5 sm:mt-0">
                            <p class="">Baño</p>
                            <p class="font-medium">{{ $results[0]['bathrooms'] }}</p>
                        </div>
                        </div>
                     </div>
                </div>
                </div>
            </a>
</div>
<div class="container px-5 py-24 mx-auto flex flex-row justify-center items-center "> 
   <a href="/houses/{{ $results[1]['id'] }}">
                <div class="bg-white shadow overflow-hidden sm:rounded-lg p-4 m-4 transition-colors">
                 <div>
                    @if(count($results[1]['pictures']))
                        <img class="object-cover h-40 w-full rounded-md" src="{{ $results[1]['pictures'][0] }}" alt="House picture">
                    @else
                        <!-- Imagen genérica en caso de que no haya imágenes disponibles -->
                        <img class="object-cover h-40 w-full rounded-md" src="https://i.postimg.cc/59ZccgGS/imagedefault.png" alt="Imagen genérica">
                    @endif
                </div>
                <div class="px-4 py-5 sm:px-6">
                    <h3 class="text-md leading-6 font-medium text-gray-900">
                    {{ $results[1]['title'] }}
                    </h3>
                    <p class="mt-1 max-w-2xl text-sm text-gray-900">
                    <strong>Precio:</strong> €{{ number_format(floatval($results[1]['selling_cost']), 2, ',', '.') }}
                    </p>
                    <p class="mt-1 max-w-2xl text-sm text-gray-900">
                    <strong>Dirección:</strong> {{ $results[1]['street'] }}
                    </p>
                    <p class="mt-1 max-w-2xl text-sm text-gray-900">
                    <strong>Provincia:</strong> {{ $results[1]['province'] }}
                    </p>
                     <div class="mt-6 flex items-center gap-8 text-xs">
                        <div class="mt-6 flex items-center gap-8 text-xs">
                            <svg class="h-4 w-4 text-red-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10H2V5C2 3.9 2.9 3 4 3H9V5H4V10zM22 10H20V5C20 3.9 19.1 3 18 3H13V5H18V10zM3 18C3 16.9 3.9 16 5 16H19C20.1 16 21 16.9 21 18V21H3V18zM8 6V8H16V6C16 4.9 15.1 4 14 4H10C8.9 4 8 4.9 8 6z"/>
                            </svg>
                            <div class="mt-1.5 sm:mt-0">
                                <p class="">Bathroom</p>
                                <p class="font-medium">{{ $results[1]['bathrooms'] }}</p>
                            </div>
                        </div>
                        <div class="mt-6 flex items-center gap-8 text-xs">
                        <i class="fa fa-bath h-4 w-4 text-red-700"></i>
                        <div class="mt-1.5 sm:mt-0">
                            <p class="">Baño</p>
                            <p class="font-medium">{{ $results[1]['bathrooms'] }}</p>
                        </div>
                        </div>
                     </div>
                </div>
                </div>
            </a>
</div>
<div class="container px-5 py-24 mx-auto flex flex-row justify-center items-center"> 
   <a href="/houses/{{ $results[6]['id'] }}">
                <div class="bg-white shadow overflow-hidden sm:rounded-lg p-4 m-4 transition-colors">
                <div>
                    @if(count($results[6]['pictures']))
                        <img class="object-cover h-40 w-full rounded-md" src="{{ $results[6]['pictures'][0] }}" alt="House picture">
                    @else
                        <!-- Imagen genérica en caso de que no haya imágenes disponibles -->
                        <img class="object-cover h-40 w-full rounded-md" src="https://i.postimg.cc/59ZccgGS/imagedefault.png" alt="Imagen genérica">
                    @endif
                </div>
                <div class="px-4 py-5 sm:px-6">
                    <h3 class="text-md leading-6 font-medium text-gray-900">
                    {{ $results[6]['title'] }}
                    </h3>
                    <p class="mt-1 max-w-2xl text-sm text-gray-900">
                    <strong>Precio:</strong> €{{ number_format(floatval($results[6]['selling_cost']), 2, ',', '.') }}
                    </p>
                    <p class="mt-1 max-w-2xl text-sm text-gray-900">
                    <strong>Dirección:</strong> {{ $results[6]['street'] }}
                    </p>
                    <p class="mt-1 max-w-2xl text-sm text-gray-900">
                    <strong>Provincia:</strong> {{ $results[6]['province'] }}
                    </p>
                     <div class="mt-6 flex items-center gap-8 text-xs">
                        <div class="mt-6 flex items-center gap-8 text-xs">
                            <svg class="h-4 w-4 text-red-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10H2V5C2 3.9 2.9 3 4 3H9V5H4V10zM22 10H20V5C20 3.9 19.1 3 18 3H13V5H18V10zM3 18C3 16.9 3.9 16 5 16H19C20.1 16 21 16.9 21 18V21H3V18zM8 6V8H16V6C16 4.9 15.1 4 14 4H10C8.9 4 8 4.9 8 6z"/>
                            </svg>
                            <div class="mt-1.5 sm:mt-0">
                                <p class="">Bathroom</p>
                                <p class="font-medium">{{ $results[6]['bathrooms'] }}</p>
                            </div>
                        </div>
                        <div class="mt-6 flex items-center gap-8 text-xs">
                        <i class="fa fa-bath h-4 w-4 text-red-700"></i>
                        <div class="mt-1.5 sm:mt-0">
                            <p class="">Baño</p>
                            <p class="font-medium">{{ $results[6]['bathrooms'] }}</p>
                        </div>
                        </div>
                     </div>
                </div>
                </div>
            </a>

 </div>
</section>




            <section>
                    <div class="max-w-screen-xl px-4 py-8 mx-auto sm:px-6 sm:py-12 lg:px-8">
                        <header class="text-center">
                        <h2 class="text-xl font-bold text-gray-900 sm:text-3xl">
                            Propuesta de Valor
                        </h2>

                        <p class="max-w-md mx-auto mt-4 text-gray-500">
                           Brindamos a nuestros asesores asociados las mejores herramientas del sector, para que puedan comercializar las propiedades con más efectividad y así sobrepasar las expectativas de los clientes.
                        </p>
                        </header>

                        <ul class="grid grid-cols-1 gap-4 mt-8 lg:grid-cols-3">
                        <li>
                            <a href="#" class="relative block group">
                            <img
                                src="https://i.postimg.cc/G3PGJcKk/pexels-timur-saglambilek-87223.jpg"
                                alt=""
                                class="object-cover w-full transition duration-500 aspect-square group-hover:opacity-90"
                            />

                            <div
                                class="absolute inset-0 flex flex-col items-start justify-end p-6"
                            >
                                <h3 class="text-xl font-medium text-white">Rnders 360º</h3>

                                {{-- <span
                                class="mt-1.5 inline-block bg-black px-5 py-3 text-xs font-medium uppercase tracking-wide text-white"
                                >
                                Shop Now
                                </span> --}}
                            </div>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="relative block group">
                            <img
                                src="https://i.postimg.cc/1zqhb7YZ/pexels-samuel-peter-12294090.jpg"
                                alt=""
                                class="object-cover w-full transition duration-500 aspect-square group-hover:opacity-90"
                            />

                            <div
                                class="absolute inset-0 flex flex-col items-start justify-end p-6"
                            >
                                <h3 class="text-xl font-medium text-white">Home Staging</h3>

                                {{-- <span
                                class="mt-1.5 inline-block bg-black px-5 py-3 text-xs font-medium uppercase tracking-wide text-white"
                                >
                                Shop Now
                                </span> --}}
                            </div>
                            </a>
                        </li>

                        <li class="lg:col-span-2 lg:col-start-2 lg:row-span-2 lg:row-start-1">
                            <a href="#" class="relative block group">
                            <img
                                src="https://i.postimg.cc/pdgc82Zw/pexels-max-rahubovskiy-7174386.jpg"
                                alt=""
                                class="object-cover w-full transition duration-500 aspect-square group-hover:opacity-90"
                            />

                            <div
                                class="absolute inset-0 flex flex-col items-start justify-end p-6"
                            >
                                <h3 class="text-xl font-medium text-white">Virtual Staging</h3>

                                {{-- <span
                                class="mt-1.5 inline-block bg-black px-5 py-3 text-xs font-medium uppercase tracking-wide text-white"
                                >
                                Shop Now
                                </span> --}}
                            </div>
                            </a>
                        </li>
                        </ul>
                    </div>
                    </section>



                    <section class="text-gray-600 body-font">
                        <div class="container px-5 py-6 mx-auto">
                            <div class="flex flex-col">
                            
                            <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4">
                            <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                                <div class="rounded-lg h-64 overflow-hidden">
                                <img alt="content" class="object-cover object-center h-full w-full" src="https://i.postimg.cc/ZqN02rhf/pexels-cottonbro-studio-5077049.jpg">
                                </div>
                                <h2 class="text-xl font-medium title-font text-gray-900 mt-5">150 Portales Inmobiliarios</h2>
                                <a class="text-red-700 inline-flex items-center mt-3">Ver mas
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>
                                </a>
                            </div>
                            <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                                <div class="rounded-lg h-64 overflow-hidden">
                                <img alt="content" class="object-cover object-center h-full w-full" src="https://i.postimg.cc/YS5YLnbz/pexels-christina-morillo-1181271.jpg">
                                </div>
                                <h2 class="text-xl font-medium title-font text-gray-900 mt-5">Big Data</h2>
                                <a class="text-red-700 inline-flex items-center mt-3">Ver mas
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>
                                </a>
                            </div>
                            <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                                <div class="rounded-lg h-64 overflow-hidden">
                                <img alt="content" class="object-cover object-center h-full w-full" src="https://i.postimg.cc/wTsKhF5b/pexels-fauxels-3183170.jpg">
                                </div>
                                <h2 class="text-xl font-medium title-font text-gray-900 mt-5">Neuromarketing</h2>
                                <a class="text-red-700 inline-flex items-center mt-3">Ver mas
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>
                                </a>
                            </div>
                            </div>
                        </div>
                        </section>




                    <section class="bg-white">
                            <div class="mx-auto max-w-screen-xl px-4 py-12 sm:px-6 lg:px-8 lg:py-16">
                                <h2
                                class="text-center text-3xl mt-20 font-bold tracking-tight text-gray-900 sm:text-5xl"
                                >
                                Nuestros Clientes Hablan de Nosotros
                                </h2>

                                <div class="mt-8 grid grid-cols-1 gap-4 md:grid-cols-3 md:gap-8">
                                <blockquote class="rounded-lg bg-gray-50 p-6 shadow-sm sm:p-8">
                                    <div class="flex items-center gap-4">
                                    <img
                                        alt="Man"
                                        src="https://i.postimg.cc/4xKYM5nc/images-1.jpg"
                                        class="h-14 w-14 rounded-full object-cover"
                                    />

                                    <div>
                                        <div class="flex justify-center gap-0.5 text-red-700">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="h-5 w-5"
                                            viewBox="0 0 20 20"
                                            fill="currentColor"
                                        >
                                            <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                            />
                                        </svg>
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="h-5 w-5"
                                            viewBox="0 0 20 20"
                                            fill="currentColor"
                                        >
                                            <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                            />
                                        </svg>
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="h-5 w-5"
                                            viewBox="0 0 20 20"
                                            fill="currentColor"
                                        >
                                            <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                            />
                                        </svg>
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="h-5 w-5"
                                            viewBox="0 0 20 20"
                                            fill="currentColor"
                                        >
                                            <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                            />
                                        </svg>
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="h-5 w-5"
                                            viewBox="0 0 20 20"
                                            fill="currentColor"
                                        >
                                            <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                            />
                                        </svg>
                                        </div>

                                        <p class="mt-0.5 text-lg font-medium text-gray-900">María G.</p>
                                    </div>
                                    </div>

                                    <p class="mt-4 text-gray-700 text-justify">
                                    Mi experiencia con Hannan-Piper fue excepcional. Desde el primer contacto, el equipo demostró un profundo conocimiento del mercado inmobiliario y un compromiso inigualable con sus clientes. Encontrar mi nuevo hogar fue un proceso sin complicaciones gracias a su dedicación y profesionalismo. Recomiendo encarecidamente Hannan-Piper a cualquiera que busque una experiencia inmobiliaria sin estrés y altamente efectiva.
                                    </p>
                                </blockquote>

                                <blockquote class="rounded-lg bg-gray-50 p-6 shadow-sm sm:p-8">
                                    <div class="flex items-center gap-4">
                                    <img
                                        alt="Man"
                                        src="https://i.postimg.cc/xd2t1qw6/2023-07-11.jpg"
                                        class="h-14 w-14 rounded-full object-cover"
                                    />

                                    <div>
                                        <div class="flex justify-center gap-0.5 text-red-700">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="h-5 w-5"
                                            viewBox="0 0 20 20"
                                            fill="currentColor"
                                        >
                                            <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                            />
                                        </svg>
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="h-5 w-5"
                                            viewBox="0 0 20 20"
                                            fill="currentColor"
                                        >
                                            <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                            />
                                        </svg>
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="h-5 w-5"
                                            viewBox="0 0 20 20"
                                            fill="currentColor"
                                        >
                                            <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                            />
                                        </svg>
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="h-5 w-5"
                                            viewBox="0 0 20 20"
                                            fill="currentColor"
                                        >
                                            <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                            />
                                        </svg>
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="h-5 w-5"
                                            viewBox="0 0 20 20"
                                            fill="currentColor"
                                        >
                                            <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                            />
                                        </svg>
                                        </div>

                                        <p class="mt-0.5 text-lg font-medium text-gray-900">Alicia V.</p>
                                    </div>
                                    </div>
 
                                    <p class="mt-4 text-gray-700 text-justify">
                                    Hannan-Piper hizo que la venta de mi propiedad fuera un proceso fácil y eficiente. Su equipo de agentes inmobiliarios se destacó por su enfoque proactivo, estrategias de marketing innovadoras y habilidades negociadoras sólidas. Estaba impresionado por su atención a los detalles y su capacidad para cerrar la venta de manera rápida y favorable. Si estás buscando un equipo de confianza para tus necesidades inmobiliarias, Hannan-Piper es la elección acertada.
                                    </p>
                                </blockquote>

                                <blockquote class="rounded-lg bg-gray-50 p-6 shadow-sm sm:p-8">
                                    <div class="flex items-center gap-4">
                                    <img
                                        alt="Man"
                                        src="https://i.postimg.cc/D0JqgTVW/260x221-Columnistas.jpg"
                                        class="h-14 w-14 rounded-full object-cover"
                                    />

                                    <div>
                                        <div class="flex justify-center gap-0.5 text-red-700">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="h-5 w-5"
                                            viewBox="0 0 20 20"
                                            fill="currentColor"
                                        >
                                            <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                            />
                                        </svg>
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="h-5 w-5"
                                            viewBox="0 0 20 20"
                                            fill="currentColor"
                                        >
                                            <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                            />
                                        </svg>
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="h-5 w-5"
                                            viewBox="0 0 20 20"
                                            fill="currentColor"
                                        >
                                            <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                            />
                                        </svg>
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="h-5 w-5"
                                            viewBox="0 0 20 20"
                                            fill="currentColor"
                                        >
                                            <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                            />
                                        </svg>
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="h-5 w-5"
                                            viewBox="0 0 20 20"
                                            fill="currentColor"
                                        >
                                            <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                            />
                                        </svg>
                                        </div>

                                        <p class="mt-0.5 text-lg font-medium text-gray-900">Alejandro R.</p>
                                    </div>
                                    </div>

                                    <p class="mt-4 text-gray-700 text-justify">
                                    Como inversionista inmobiliario, he trabajado con varios agentes a lo largo de los años, y Hannan-Piper se destaca entre los demás. Su enfoque centrado en el cliente, combinado con un profundo conocimiento del mercado local, hizo que la adquisición de propiedades fuera un proceso fluido. Si estás buscando un equipo confiable y orientado al cliente para tus inversiones inmobiliarias, no busques más allá de Hannan-Piper. Estoy emocionado por continuar nuestra colaboración en futuros proyectos.
                                    </p>
                                </blockquote>
                                </div>
                            </div>
                            </section>


     @include('layouts.footer')
    </body>
    
</html>
