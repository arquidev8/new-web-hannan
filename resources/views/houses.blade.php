

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.tailwindcss.com"></script>
 
           <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


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


   




    <div class="mt-20 mb-20 bg-gray-200 rounded">
  <form method="GET" action="{{ route('houses') }}">
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4 p-4 sm:p-6 md:p-8 lg:p-10 xl:p-12">
          <div>
              <label for="Price" class="block text-sm font-medium ">Precio Máximo:</label>
              <select name="Price" id="price" class="select-input mt-1 block w-full py-2 px-3 border text-black border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                  <option value="">Todos</option>
                        <option value="50000"{{ request('Price') == '50000' ? ' selected' : '' }}>50.000</option>
                        <option value="100000"{{ request('Price') == '100000' ? ' selected' : '' }}>100.000</option>
                        <option value="150000"{{ request('Price') == '150000' ? ' selected' : '' }}>150.000</option>
                        <option value="200000"{{ request('Price') == '200000' ? ' selected' : '' }}>200.000</option>
                        <option value="250000"{{ request('Price') == '250000' ? ' selected' : '' }}>250.000</option>
                        <option value="300000"{{ request('Price') == '300000' ? ' selected' : '' }}>300.000</option>
                        <option value="350000"{{ request('Price') == '350000' ? ' selected' : '' }}>350.000</option>
                        <option value="400000"{{ request('Price') == '400000' ? ' selected' : '' }}>400.000</option>
                        <option value="450000"{{ request('Price') == '450000' ? ' selected' : '' }}>450.000</option>
                        <option value="500000"{{ request('Price') == '500000' ? ' selected' : '' }}>500.000</option>
              </select>
          </div>
          <div>
              <label for="Provincia" class="block text-sm font-medium ">Provincia:</label>
              <select name="Provincia" id="provincia" class="select-input text-black mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                  <option value="">Todos</option>
                       <option value="Álava"{{ request('Provincia') == 'Álava' ? ' selected' : '' }}>Álava</option>
                        <option value="Albacete"{{ request('Provincia') == 'Albacete' ? ' selected' : '' }}>Albacete</option>
                        <option value="Alicante"{{ request('Provincia') == 'Alicante' ? ' selected' : '' }}>Alicante</option>
                        <option value="Almería"{{ request('Provincia') == 'Almería' ? ' selected' : '' }}>Almería</option>
                        <option value="Ávila"{{ request('Provincia') == 'Ávila' ? ' selected' : '' }}>Ávila</option>
                        <option value="Badajoz"{{ request('Provincia') == 'Badajoz' ? ' selected' : '' }}>Badajoz</option>
                        <option value="Barcelona"{{ request('Provincia') == 'Barcelona' ? ' selected' : '' }}>Barcelona</option>
                        <option value="Madrid"{{ request('Provincia') == 'Madrid' ? ' selected' : '' }}>Madrid</option>
                        <option value="Girona"{{ request('Provincia') == 'Girona' ? ' selected' : '' }}>Girona</option>

              </select>
          </div>
          <div>
              <label for="Ciudad" class="block text-sm font-medium ">Ciudad:</label>
              <select name="Ciudad" id="ciudad" class="select-input text-black mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                  <option value="">Todos</option>
                        <option value="Murcia"{{ request('Ciudad') == 'Murcia' ? ' selected' : '' }}>Murcia</option>
                        <option value="Alicante"{{ request('Ciudad') == 'Alicante' ? ' selected' : '' }}>Alicante</option>
                        <option value="Madrid"{{ request('Ciudad') == 'Madrid' ? ' selected' : '' }}>Madrid</option>
                        <option value="Barcelona"{{ request('Ciudad') == 'Barcelona' ? ' selected' : '' }}>Barcelona</option>
              </select>
          </div>
          <div class="col-span-2">
              <label for="Search" class="block text-sm font-medium ">Buscar:</label>
              <div class="mt-1 relative rounded-md shadow-sm">
                 <input type="text" name="Search" id="search" value="{{ request('Search') }}" class="p-3 h-10 text-black focus:ring-indigo-500 focus:border-indigo-500 block w-full pr-20 sm:text-sm border-gray-300 rounded-md" placeholder="Buscar...">
                 <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                     <!-- Heroicon name: solid/search -->
                     <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                         <path fill-rule="evenodd" d="M13.828 11.172a7.5 7.5 0 111.414-1.414l3.34 3.342a1 1 0 01-1.414 1.414l-3.34-3.342zm-5.656-2.828a5 5 0 110 7.072 5 5 0 010-7.072z" clip-rule="evenodd" />
                     </svg>
                 </div>
              </div>
          </div>
          <div class="col-span-1 flex items-center justify-between">
              <button type="submit" class="inline-block w-full sm:w-auto px-6 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-red-700 hover:bg-black focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                 Filtrar
              </button>
              <a href="{{ route('houses') }}" class="text-sm text-red-700 hover:text-red-900 p-5">Restablecer</a>
          </div>
      </div>
  </form>
</div>

    <p>Número total de propiedades: {{ $totalProperties }}</p>
<p>Número de propiedades filtradas: {{ $filteredProperties }}</p>

        <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-3 gap-4">
            @foreach ($results as $house)
            <a href="/houses/{{ $house['id'] }}">
                <div class="bg-white shadow overflow-hidden sm:rounded-lg p-4 m-4 transition-colors">
                <div>
                    @if(count($house['pictures']))
                        <img class="object-cover h-40 w-full rounded-md" src="{{ $house['pictures'][0] }}" alt="House picture">
                    @else
                        <!-- Imagen genérica en caso de que no haya imágenes disponibles -->
                        <img class="object-cover h-40 w-full rounded-md" src="{{ asset('https://i.postimg.cc/59ZccgGS/imagedefault.png') }}" alt="Imagen genérica">
                    @endif
                </div>
                <div class="px-4 py-5 sm:px-6">
                    <h3 class="text-md leading-6 font-medium text-gray-900">
                    {{ $house['title'] }}
                    </h3>
                    <p class="mt-1 max-w-2xl text-sm text-gray-900">
                    <strong>Precio:</strong> €{{ number_format(floatval($house['selling_cost']), 2, ',', '.') }}
                    </p>
                    <p class="mt-1 max-w-2xl text-sm text-gray-900">
                    <strong>Dirección:</strong> {{ $house['street'] }}
                    </p>
                    <p class="mt-1 max-w-2xl text-sm text-gray-900">
                    <strong>Provincia:</strong> {{ $house['province'] }}
                    </p>
                     <div class="mt-6 flex items-center gap-8 text-xs">
                        <div class="mt-6 flex items-center gap-8 text-xs">
                            <svg class="h-4 w-4 text-red-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10H2V5C2 3.9 2.9 3 4 3H9V5H4V10zM22 10H20V5C20 3.9 19.1 3 18 3H13V5H18V10zM3 18C3 16.9 3.9 16 5 16H19C20.1 16 21 16.9 21 18V21H3V18zM8 6V8H16V6C16 4.9 15.1 4 14 4H10C8.9 4 8 4.9 8 6z"/>
                            </svg>
                            <div class="mt-1.5 sm:mt-0">
                                <p class="">Bathroom</p>
                                <p class="font-medium">{{ $house['bathrooms'] }}</p>
                            </div>
                        </div>
                        <div class="mt-6 flex items-center gap-8 text-xs">
                        <i class="fa fa-bath h-4 w-4 text-red-700"></i>
                        <div class="mt-1.5 sm:mt-0">
                            <p class="">Baño</p>
                            <p class="font-medium">{{ $house['bathrooms'] }}</p>
                        </div>
                        </div>

                     </div>
                </div>
                </div>
            </a>
            @endforeach
     </div>

{{-- <div class="pagination flex justify-center space-x-2 mt-12 mb-12">
  @if ($page > 1)
      <a href="?page={{ $page - 1 }}&selling_cost={{ request('selling_cost') }}&search={{ request('search') }}" class="shadow-md rounded-md bg-gray-200 px-2 py-1">Anterior</a>

  @endif

  @for ($i = max($page - 2, 1); $i <= min($page + 2, 27); $i++)
      <a href="?page={{ $i }}" class="shadow-md rounded-md bg-gray-200 px-2 py-1">{{ $i }}</a>
  @endfor

  @if ($page < 27)
<a href="?page={{ $page + 1 }}&selling_cost={{ request('selling_cost') }}&search={{ request('search') }}" class="shadow-md rounded-md bg-gray-200 px-2 py-1">Siguiente</a>
  @endif
</div> --}}
{{-- 
<p>Número total de propiedades: {{ $totalProperties }}</p>
<p>Número de propiedades filtradas: {{ $filteredProperties }}</p> --}}

{{-- <div class="pagination flex justify-center space-x-2 mt-12 mb-12">
 @if ($page > 1)
  <a href="?page={{ $page - 1 }}&Price={{ request('Price') }}&Provincia={{ request('Provincia') }}&Ciudad={{ request('Ciudad') }}&Search={{ request('Search') }}" class="shadow-md rounded-md bg-gray-200 px-2 py-1">Anterior</a>
 @endif

 @for ($i = max($page - 2, 1); $i <= min($page + 2, ceil($totalProperties / 10)); $i++)
  <a href="?page={{ $i }}&Price={{ request('Price') }}&Provincia={{ request('Provincia') }}&Ciudad={{ request('Ciudad') }}&Search={{ request('Search') }}" class="shadow-md rounded-md bg-gray-200 px-2 py-1">{{ $i }}</a>
 @endfor

 @if ($page < ceil($totalProperties / 10))
  <a href="?page={{ $page + 1 }}&Price={{ request('Price') }}&Provincia={{ request('Provincia') }}&Ciudad={{ request('Ciudad') }}&Search={{ request('Search') }}" class="shadow-md rounded-md bg-gray-200 px-2 py-1">Siguiente</a>
 @endif
</div> --}}

<div class="pagination flex justify-center space-x-2 mt-12 mb-12">
    @if ($currentPage > 1)
        <a href="?page={{ $currentPage - 1 }}&Price={{ request('Price') }}&Provincia={{ request('Provincia') }}&Ciudad={{ request('Ciudad') }}&Search={{ request('Search') }}" class="shadow-md rounded-md bg-gray-200 px-2 py-1">Anterior</a>
    @endif

    @for ($i = max($currentPage - 2, 1); $i <= min($currentPage + 2, $totalPages); $i++)
        <a href="?page={{ $i }}&Price={{ request('Price') }}&Provincia={{ request('Provincia') }}&Ciudad={{ request('Ciudad') }}&Search={{ request('Search') }}" class="shadow-md rounded-md bg-gray-200 px-2 py-1">{{ $i }}</a>
    @endfor

    @if ($currentPage < $totalPages)
        <a href="?page={{ $currentPage + 1 }}&Price={{ request('Price') }}&Provincia={{ request('Provincia') }}&Ciudad={{ request('Ciudad') }}&Search={{ request('Search') }}" class="shadow-md rounded-md bg-gray-200 px-2 py-1">Siguiente</a>
    @endif
</div>







     @include('layouts.footer')
    </body>
    
</html>

<style>

    .filter-container {
   background-image: url('https://i.postimg.cc/QCC22pyB/5-icfxo2w0-O-transformed.png');
   background-size: cover;
   background-position: center;
   background-repeat: no-repeat;
   opacity: 0.7;
}

</style>