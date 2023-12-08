<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.tailwindcss.com"></script>

        <title>¿Quieres Vender o Alquilar?</title>

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
    <body class="antialiased">
    @include('layouts.header')

  <div class="relative font-[sans-serif] before:absolute before:w-full before:h-full before:inset-0 before:bg-black before:opacity-50 before:z-10">
      <img src="https://i.postimg.cc/kgx4JZbf/2.jpg" alt="Banner Image" class="absolute inset-0 w-full h-full object-cover" />
      <div class="min-h-[300px] relative z-20 h-full max-w-6xl mx-auto flex flex-col justify-center items-center text-center text-white p-6">
        <h2 class="sm:text-4xl text-2xl font-bold mb-6">Presencia Internacional</h2>
       
      </div>
  </div>


 
  <div class="p-40">
    <img src="https://i.postimg.cc/MZLTVGnF/presencia-internacional.png" alt="Background Image"
      class="w-full h-auto " />
  </div>
 


<div class="p-12 justify-center mb-20 bg-slate-100">

  <form class="font-[sans-serif]">
  <div class="grid sm:grid-cols-2 gap-6">
    <div class="relative flex items-center">
      <input type="text" placeholder="Nombre"
        class="px-4 py-3 bg-white text-black w-full text-sm border-b-2 focus:border-red-500 outline-none" />
      <svg xmlns="http://www.w3.org/2000/svg" fill="#bbb" stroke="#bbb" class="w-[18px] h-[18px] absolute right-4"
        viewBox="0 0 24 24">
        <circle cx="10" cy="7" r="6" data-original="#000000"></circle>
        <path
          d="M14 15H6a5 5 0 0 0-5 5 3 3 0 0 0 3 3h12a3 3 0 0 0 3-3 5 5 0 0 0-5-5zm8-4h-2.59l.3-.29a1 1 0 0 0-1.42-1.42l-2 2a1 1 0 0 0 0 1.42l2 2a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.42l-.3-.29H22a1 1 0 0 0 0-2z"
          data-original="#000000"></path>
      </svg>
    </div>
    <div class="relative flex items-center">
      <input type="text" placeholder="Apellido"
        class="px-4 py-3 bg-white text-black w-full text-sm border-b-2 focus:border-red-500 outline-none" />
      <svg xmlns="http://www.w3.org/2000/svg" fill="#bbb" stroke="#bbb" class="w-[18px] h-[18px] absolute right-4"
        viewBox="0 0 24 24">
        <circle cx="10" cy="7" r="6" data-original="#000000"></circle>
        <path
          d="M14 15H6a5 5 0 0 0-5 5 3 3 0 0 0 3 3h12a3 3 0 0 0 3-3 5 5 0 0 0-5-5zm8-4h-2.59l.3-.29a1 1 0 0 0-1.42-1.42l-2 2a1 1 0 0 0 0 1.42l2 2a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.42l-.3-.29H22a1 1 0 0 0 0-2z"
          data-original="#000000"></path>
      </svg>
    </div>
    <div class="relative flex items-center">
      <input type="number" placeholder="Telefono"
        class="px-4 py-3 bg-white text-black w-full text-sm border-b-2 focus:border-red-500 outline-none" />
      <svg fill="#bbb" class="w-[18px] h-[18px] absolute right-4" viewBox="0 0 64 64">
        <path
          d="m52.148 42.678-6.479-4.527a5 5 0 0 0-6.963 1.238l-1.504 2.156c-2.52-1.69-5.333-4.05-8.014-6.732-2.68-2.68-5.04-5.493-6.73-8.013l2.154-1.504a4.96 4.96 0 0 0 2.064-3.225 4.98 4.98 0 0 0-.826-3.739l-4.525-6.478C20.378 10.5 18.85 9.69 17.24 9.69a4.69 4.69 0 0 0-1.628.291 8.97 8.97 0 0 0-1.685.828l-.895.63a6.782 6.782 0 0 0-.63.563c-1.092 1.09-1.866 2.472-2.303 4.104-1.865 6.99 2.754 17.561 11.495 26.301 7.34 7.34 16.157 11.9 23.011 11.9 1.175 0 2.281-.136 3.29-.406 1.633-.436 3.014-1.21 4.105-2.302.199-.199.388-.407.591-.67l.63-.899a9.007 9.007 0 0 0 .798-1.64c.763-2.06-.007-4.41-1.871-5.713z"
          data-original="#000000"></path>
      </svg>
    </div>
    <div class="relative flex items-center">
      <input type="text" placeholder="Ciudad"
        class="px-4 py-3 bg-white text-black w-full text-sm border-b-2 focus:border-red-500 outline-none" />
      <svg xmlns="http://www.w3.org/2000/svg" fill="#bbb" class="w-[18px] h-[18px] absolute right-4"
        viewBox="0 0 24 24">
        <path
          d="M20.48 8.301A9.217 9.217 0 0 1 21.25 12c0 5.105-4.145 9.25-9.25 9.25S2.75 17.105 2.75 12 6.895 2.75 12 2.75a.75.75 0 0 0 0-1.5C6.067 1.25 1.25 6.067 1.25 12S6.067 22.75 12 22.75 22.75 17.933 22.75 12c0-1.529-.32-2.983-.896-4.301a.75.75 0 0 0-1.374.602z"
          data-original="#000000" />
        <path
          d="M17 1.25a3.443 3.443 0 0 0-3.442 3.442c0 .594.269 1.317.685 2.023.835 1.421 2.227 2.815 2.227 2.815a.749.749 0 0 0 1.06 0s1.392-1.394 2.227-2.815c.416-.706.685-1.429.685-2.023 0-1.9-1.542-3.442-3.442-3.442zm0 1.5c1.072 0 1.942.87 1.942 1.942 0 .528-.393 1.177-.815 1.789A15.328 15.328 0 0 1 17 7.901c-.325-.366-.75-.874-1.127-1.42-.422-.612-.815-1.261-.815-1.789 0-1.072.87-1.942 1.942-1.942zM1.603 12.636l3.27 2.044c.596.372 1.285.57 1.987.57h.76c.657 0 1.281.287 1.709.786l1.051 1.227a2.25 2.25 0 0 1 .456 2.082l-.557 1.949a.75.75 0 0 0 1.442.412l.557-1.949a3.748 3.748 0 0 0-.759-3.47l-1.052-1.227a3.746 3.746 0 0 0-2.847-1.31h-.76c-.421 0-.834-.118-1.192-.342l-3.271-2.044a.75.75 0 1 0-.794 1.272z"
          data-original="#000000" />
        <path
          d="m5.329 4.335 1.596 3.192a2.748 2.748 0 0 0 1.757 1.429l1.758.465c.443.117.786.467.894.912l.753 3.087a2.75 2.75 0 0 0 1.146 1.637l.466.31a2.746 2.746 0 0 0 3.985-1.058l.575-1.151a1.25 1.25 0 0 1 .815-.653l2.791-.698a.75.75 0 0 0-.364-1.455l-2.791.697a2.752 2.752 0 0 0-1.792 1.438l-.576 1.151a1.246 1.246 0 0 1-1.811.481l-.466-.31a1.25 1.25 0 0 1-.521-.744l-.752-3.087a2.75 2.75 0 0 0-1.969-2.007l-1.758-.465a1.247 1.247 0 0 1-.798-.65L6.671 3.665a.75.75 0 1 0-1.342.67z"
          data-original="#000000" />
      </svg>
    </div>
    <div class="relative flex items-center sm:col-span-2">
      <input type="email" placeholder="Email"
        class="px-4 py-3 bg-white text-black w-full text-sm border-b-2 focus:border-red-500 outline-none" />
      <svg xmlns="http://www.w3.org/2000/svg" fill="#bbb" stroke="#bbb" class="w-[18px] h-[18px] absolute right-4"
        viewBox="0 0 682.667 682.667">
        <defs>
          <clipPath id="a" clipPathUnits="userSpaceOnUse">
            <path d="M0 512h512V0H0Z" data-original="#000000"></path>
          </clipPath>
        </defs>
        <g clip-path="url(#a)" transform="matrix(1.33 0 0 -1.33 0 682.667)">
          <path fill="none" stroke-miterlimit="10" stroke-width="40"
            d="M452 444H60c-22.091 0-40-17.909-40-40v-39.446l212.127-157.782c14.17-10.54 33.576-10.54 47.746 0L492 364.554V404c0 22.091-17.909 40-40 40Z"
            data-original="#000000"></path>
          <path
            d="M472 274.9V107.999c0-11.027-8.972-20-20-20H60c-11.028 0-20 8.973-20 20V274.9L0 304.652V107.999c0-33.084 26.916-60 60-60h392c33.084 0 60 26.916 60 60v196.653Z"
            data-original="#000000"></path>
        </g>
      </svg>
    </div>


      <div class="relative flex items-center sm:col-span-2">
        <textarea placeholder="Mensaje"
          class="px-4 py-3 bg-white text-black w-full text-sm border-b-2 focus:border-red-500 outline-none"></textarea>
        <!-- ... (código del ícono para Mensaje) ... -->
      </div>
    
  </div>
  <button type="button"
    class="mt-8 px-6 py-2 w-full text-sm font-semibold bg-red-700 text-white hover:bg-red">Enviar</button>
  </form>
</div>





     @include('layouts.footer')
    </body>
    
</html>
