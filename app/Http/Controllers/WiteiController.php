<?php

namespace App\Http\Controllers;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use GuzzleHttp\Exception\RequestException;




class WiteiController extends Controller
{

public function compareHouses($house1, $house2, $price) {
    $diff1 = abs($house1['selling_cost'] - $price);
    $diff2 = abs($house2['selling_cost'] - $price);
    
    if ($diff1 < $diff2) {
        return -1;
    } elseif ($diff1 > $diff2) {
        return 1;
    } else {
        return 0;
    }
    }
     
   
public function index(){
 
    $headers = [
        'Content-Type' => 'application/json',
        'Authorization' => 'Bearer 7a54f9633cf443d988c0c49e2b77989b'
    ];
  
    $client = new Client();
  
    try {
        $response = $client->request('GET', "https://witei.com/api/v1/houses", [
            'headers' => $headers
        ]);
    } catch (RequestException $e) {
        if ($e->getResponse()->getStatusCode() == 404) {
            return view('errors.404');
        }
  
        throw $e;
    }
  
    $statusCode = $response->getStatusCode();
    $data = $response->getBody()->getContents();
    
    $housesData = json_decode($data, true);
  
    $results = $housesData['results'];
  
    return view('welcome', ['results' => $results]);
  }




  public function getHouses(Request $request)
    {
        $page = $request->get('page') ? $request->get('page') : 1;
        $price = intval($request->get('Price'));
        $provincia = $request->get('Provincia');
        $ciudad = $request->get('Ciudad');
        $search = $request->get('Search');

        $headers = [
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer 7a54f9633cf443d988c0c49e2b77989b'
        ];

        $client = new Client();

        $propertiesPerPage = 50;

        $allProperties = [];

        for ($pageNumber = 1; $pageNumber <= 19; $pageNumber++) {
            try {
                $response = $client->request('GET', "https://witei.com/api/v1/houses/?page=$pageNumber&status=available", [
                    'headers' => $headers
                ]);
            } catch (RequestException $e) {
                if ($e->getResponse()->getStatusCode() == 404) {
                    return view('errors.404');
                }

                throw $e;
            }

            $statusCode = $response->getStatusCode();
            $data = $response->getBody()->getContents();

            $housesData = json_decode($data, true);

            if (isset($housesData['results'])) {
                $allProperties = array_merge($allProperties, $housesData['results']);
            } else {
                printf('No se encontraron resultados en la página', $pageNumber + 1);
            }
        }

        $totalProperties = count($allProperties);


        if ($price != 0) {
            $allProperties = array_filter($allProperties, function ($house) use ($price) {
                return $house['selling_cost'] <= $price;
            });
        }

        if ($provincia) {
            $allProperties = array_filter($allProperties, function ($house) use ($provincia) {
                return strpos($house['province'], $provincia) !== false;
            });
        }

        if ($ciudad) {
            $allProperties = array_filter($allProperties, function ($house) use ($ciudad) {
                return strpos($house['town'], $ciudad) !== false;
            });
        }

        if ($search) {
            $allProperties = array_filter($allProperties, function ($house) use ($search) {
                return strpos(strtolower($house['title']), strtolower($search)) !== false ||
                    strpos(strtolower($house['identifier']), strtolower($search)) !== false ||
                    strpos(strtolower($house['province']), strtolower($search)) !== false ||
                    strpos(strtolower($house['town']), strtolower($search)) !== false ||
                    strpos(strtolower($house['street']), strtolower($search)) !== false ||
                    strpos(strtolower($house['kind']), strtolower($search)) !== false;
            });
        }

        $filteredProperties = count($allProperties);

        usort($allProperties, function ($house1, $house2) use ($price) {
            return abs($house1['selling_cost'] - $price) <=> abs($house2['selling_cost'] - $price);
        });

        $startIndex = ($page - 1) * $propertiesPerPage;
        $endIndex = $startIndex + $propertiesPerPage;
        $results = array_slice($allProperties, $startIndex, $endIndex);

        $totalPages = ceil(count($allProperties) / $propertiesPerPage);

        return view('houses', [
            'results' => $results,
            'currentPage' => $page,
            'totalPages' => $totalPages,
            'totalProperties' => $totalProperties,
            'filteredProperties' => $filteredProperties,
        ]);
    }

  


// ULTIMO CODIGO VIGENTE
//   public function getHouses(Request $request)
// {
//   $page = $request->get('page') ? $request->get('page') : 1;
//   $price = intval($request->get('Price'));
//   $provincia = $request->get('Provincia');
//   $ciudad = $request->get('Ciudad');
//   $search = $request->get('Search');
 
//   $headers = [
//       'Content-Type' => 'application/json',
//       'Authorization' => 'Bearer 7a54f9633cf443d988c0c49e2b77989b'
//   ];
 
//   $client = new Client();
 
//   try {
//       // Obtén todos los resultados de la API
//       $response = $client->request('GET', "https://witei.com/api/v1/houses/?&status=available", [
//           'headers' => $headers
//       ]);
//   } catch (RequestException $e) {
//       if ($e->getResponse()->getStatusCode() == 404) {
//           return view('errors.404');
//       }
 
//       throw $e;
//   }
 
//   $statusCode = $response->getStatusCode();
//   $data = $response->getBody()->getContents();
 
//   $housesData = json_decode($data, true);

//   $results = $housesData['results'];
 
//   // Aplica los filtros a todas las propiedades
//   if ($price != 0) {
//       // Filtrar propiedades por precio
//       $results = array_filter($results, function ($house) use ($price) {
//           return $house['selling_cost'] <= $price;
//       });
//   }

//   // Filtrar por provincia y ciudad
 
//     // Filtrar por provincia y ciudad
//     if ($provincia) {
//         $results = array_filter($results, function ($house) use ($provincia) {
//             return strpos($house['province'], $provincia) !== false;
//         });
//     }
    
//     if ($ciudad) {
//         $results = array_filter($results, function ($house) use ($ciudad) {
//             return strpos($house['town'], $ciudad) !== false;
//         });
//     }
    

//   // Ordenar por precio
//   usort($results, function ($house1, $house2) use ($price) {
//       return abs($house1['selling_cost'] - $price) <=> abs($house2['selling_cost'] - $price);
//   });

//   // Filtrar por búsqueda
//   if ($search) {
//       $results = array_filter($results, function ($house) use ($search) {
//           return strpos(strtolower($house['title']), strtolower($search)) !== false ||
//                 strpos(strtolower($house['identifier']), strtolower($search)) !== false ||
//                 strpos(strtolower($house['province']), strtolower($search)) !== false ||
//                 strpos(strtolower($house['town']), strtolower($search)) !== false ||
//                 strpos(strtolower($house['street']), strtolower($search)) !== false ||
//                 strpos(strtolower($house['kind']), strtolower($search)) !== false;
//       });
//   }

//   // Filtrar por estado
//   $results = array_filter($results, function ($house) {
//       return $house['raw_status'] == 'available';
//   });


//   // Obtén el número total de propiedades filtradas
//   $totalProperties = count($results);
//   $filteredProperties = count($results);
//   // Implementar paginación
//   $results = array_slice($results, ($page - 1) * 10, 10);

//   return view('houses', ['results' => $results, 'page' => $page, 'totalProperties' => $totalProperties, 'filteredProperties' => $filteredProperties]);
// }






    public function getHouseDetails($id)
{
    $headers = [
        'Content-Type' => 'application/json',
        'Authorization' => 'Bearer 7a54f9633cf443d988c0c49e2b77989b'
    ];

    $client = new Client();
    $response = $client->request('GET', "https://witei.com/api/v1/houses/$id", [
        'headers' => $headers
    ]);

    $statusCode = $response->getStatusCode();
    $data = $response->getBody()->getContents();
    
    $houseData = json_decode($data, true);

    return view('house_details', compact('houseData'));
}


};