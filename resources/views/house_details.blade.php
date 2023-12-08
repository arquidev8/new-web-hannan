
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
<body class="antialiased">
@include('layouts.header')
{{-- <section>
  <div class="max-w-screen-xl px-4 py-8 mx-auto sm:px-6 sm:py-12 lg:px-8">
    <header class="text-center">
     <h2 class="w-full text-xl font-bold text-gray-900 sm:text-3xl">
       {{ $houseData['title']}}
     </h2>

     <p class="w-full max-w-md mx-auto mt-4 text-gray-500">
       {{ $houseData['description']}}
     </p>
   </header>

    <ul class="grid grid-cols-1 gap-4 mt-8 lg:grid-cols-3">
      <li>
        <a href="#" class="relative block group">
          <img
            src="{{ $houseData['pictures'][0] }}"
            alt=""
            class="object-cover w-full transition duration-500 aspect-square group-hover:opacity-90"
          />

          <div
            class="absolute inset-0 flex flex-col items-start justify-end p-6"
          >
            
          </div>
        </a>
      </li>

      <li>
        <a href="#" class="relative block group">
          <img
            src="{{ $houseData['pictures'][1] }}"
            alt=""
            class="object-cover w-full transition duration-500 aspect-square group-hover:opacity-90"
          />

          <div
            class="absolute inset-0 flex flex-col items-start justify-end p-6"
          >
           
          </div>
        </a>
      </li>

      <li class="lg:col-span-2 lg:col-start-2 lg:row-span-2 lg:row-start-1">
        <a href="#" class="relative block group">
          <img
            src="{{ $houseData['pictures'][2] }}"
            alt=""
            class="object-cover w-full transition duration-500 aspect-square group-hover:opacity-90"
          />

          <div
            class="absolute inset-0 flex flex-col items-start justify-end p-6"
          >
         

           
          </div>
        </a>
      </li>
    </ul>
  </div>
</section> --}}


<section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <section class="text-gray-600 body-font">
  <div class="container flex flex-wrap px-5 py-24 mx-auto items-center">
    <div class="md:w-1/2 md:pr-12 md:py-8 md:border-r md:border-b-0 mb-10 md:mb-0 pb-10 border-b border-gray-200">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">{{ $houseData['title'] }}</h1>
      <p class="leading-relaxed text-base text-justify">{{ $houseData['description'] }}</p>
 
      
      </a>
    </div>
    <div class="flex flex-col md:w-1/2 md:pl-12 gap-6  ">
 <h2 class="title-font font-semibold text-gray-800 tracking-wider text-sm mb-3">CARACTERISTICAS</h2>
 <nav class="flex flex-wrap list-none -mb-1">
  <li class="lg:w-1/4 mb-1 w-1/4">
     <a class="text-gray-600 hover:text-gray-800"><strong>Referencia:</strong> {{ $houseData['id'] }}</a>
   </li>
   <li class="lg:w-1/4 mb-1 w-1/4">
     <a class="text-gray-600 hover:text-gray-800"><strong>Provincia:</strong> {{ $houseData['province'] }}</a>
   </li>
   <li class="lg:w-1/4 mb-1 w-1/4">
     <a class="text-gray-600 hover:text-gray-800"><strong>Ciudad:</strong> <br> {{ $houseData['town'] }}</a>
   </li>
  
   <li class="lg:w-1/4 mb-1 w-1/4">
     <p class="text-gray-600 hover:text-gray-800"><strong>Area:</strong> <br> {{ $houseData['area'] }} m2</p>
   </li>
   <li class="lg:w-1/4 mb-1 w-1/4 mt-10">
     <a class="text-gray-600 hover:text-gray-800"><strong>Habitaciones:</strong> {{ $houseData['bedrooms'] }}</a>
   </li>
   <li class="lg:w-1/4 mb-1 w-1/4 mt-10">
     <a class="text-gray-600 hover:text-gray-800"><strong>Baños:</strong> {{ $houseData['bathrooms'] }}</a>
   </li>
 </nav>
</div>

  </div>
</section>
   

        <section class="text-gray-600 body-font">
  {{-- <div class="container px-5 py-24 mx-auto flex flex-wrap">
    <div class="lg:w-2/3 mx-auto">
      <div class="flex flex-wrap w-full bg-gray-100 py-32 px-10 relative mb-4">
        <img alt="gallery" class="w-full object-cover h-full object-center block opacity-25 absolute inset-0" src="{{ $houseData['pictures'][0] }}">
        
      </div>
      <div class="flex flex-wrap -mx-2">
        <div class="px-2 w-1/2">
          <div class="flex flex-wrap w-full bg-gray-100 sm:py-24 py-16 sm:px-10 px-6 relative">
            <img alt="gallery" class="w-full object-cover h-full object-center block opacity-25 absolute inset-0" src="{{ $houseData['pictures'][1] }}">
            
          </div>
        </div>
        <div class="px-2 w-1/2">
          <div class="flex flex-wrap w-full bg-gray-100 sm:py-24 py-16 sm:px-10 px-6 relative">
            <img alt="gallery" class="w-full object-cover h-full object-center block opacity-25 absolute inset-0" src="{{ $houseData['pictures'][3] }}">
            
          </div>
        </div>
      </div>
    </div>
  </div> --}}

  <div class="flex flex-wrap -mx-2">
 @foreach(array_slice($houseData['pictures'], 0, 4) as $picture)
   <div class="px-2 w-1/2">
     <div class="flex flex-wrap w-full bg-gray-100 sm:py-24 py-16 sm:px-10 px-6 relative">
       <img alt="gallery" class="mt-5 w-full object-cover h-full object-center block  absolute inset-0" src="{{ $picture }}">
     </div>
   </div>
 @endforeach
</div>

</section>

    
    </div>
  </div>
</section>



     @include('layouts.footer')
    </body>
    
</html>