
//ULTIMO CODIGO VIGENTE
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
//       $response = $client->request('GET', "https://witei.com/api/v1/houses/?page=4", [
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




//   public function getHouses(Request $request)
//   {
//    $page = $request->get('page') ? $request->get('page') : 1;
//    $price = intval($request->get('Price'));
//    $provincia = $request->get('Provincia');
//    $ciudad = $request->get('Ciudad');
//    $search = $request->get('Search');
  
//    $headers = [
//        'Content-Type' => 'application/json',
//        'Authorization' => 'Bearer 7a54f9633cf443d988c0c49e2b77989b'
//    ];
  
//    $client = new Client();
  
//    try {
//        // Obtén todos los resultados de la API
//        $response = $client->request('GET', "https://witei.com/api/v1/houses", [
//            'headers' => $headers
//        ]);
//    } catch (RequestException $e) {
//        if ($e->getResponse()->getStatusCode() == 404) {
//            return view('errors.404');
//        }
  
//        throw $e;
//    }
  
//    $statusCode = $response->getStatusCode();
//    $data = $response->getBody()->getContents();
  
//    $housesData = json_decode($data, true);
//    $totalProperties = count($housesData['results']);
//    $results = $housesData['results'];
  
//    // Si no se seleccionó un precio, no filtrar por precio
//    if ($price != 0) {
//        // Filtrar propiedades por precio
//        $results = array_filter($results, function ($house) use ($price) {
//            return $house['selling_cost'] <= $price;
//        });
//    }
  
//    // Ordenar por precio
//    usort($results, function ($house1, $house2) use ($price) {
//        return abs($house1['selling_cost'] - $price) <=> abs($house2['selling_cost'] - $price);
//    });
  
//    // Filtrar por búsqueda
//    if ($search) {
//        $results = array_filter($results, function ($house) use ($search) {
//            return strpos(strtolower($house['title']), strtolower($search)) !== false ||
//                  strpos(strtolower($house['identifier']), strtolower($search)) !== false ||
//                  strpos(strtolower($house['province']), strtolower($search)) !== false ||
//                  strpos(strtolower($house['town']), strtolower($search)) !== false ||
//                  strpos(strtolower($house['street']), strtolower($search)) !== false ||
//                  strpos(strtolower($house['kind']), strtolower($search)) !== false;
//        });
//    }
  
//    // Filtrar por estado
//    $results = array_filter($results, function ($house) {
//        return $house['raw_status'] == 'available';
//    });
  
//    // Obtén el número de propiedades filtradas
//    $filteredProperties = count($results);
  
//    // Implementar paginación
//    $results = array_slice($results, ($page - 1) * 10, 10);
  
//    return view('houses', ['results' => $results, 'page' => $page, 'totalProperties' => $totalProperties, 'filteredProperties' => $filteredProperties]);
// }
  
  


//   public function getHouses(Request $request)
// {
//  $page = $request->get('page') ? $request->get('page') : 1;
//  $price = intval($request->get('Price'));
//  $provincia = $request->get('Provincia');
//  $ciudad = $request->get('Ciudad');
//  $search = $request->get('Search');

//  $headers = [
//      'Content-Type' => 'application/json',
//      'Authorization' => 'Bearer 7a54f9633cf443d988c0c49e2b77989b'
//  ];

//  $client = new Client();

//  try {
//      $response = $client->request('GET', "https://witei.com/api/v1/houses?page=$page&selling_cost=$price&province=$provincia&town=$ciudad", [
//          'headers' => $headers
//      ]);
//  } catch (RequestException $e) {
//      if ($e->getResponse()->getStatusCode() == 404) {
//          return view('errors.404');
//      }

//      throw $e;
//  }

//  $statusCode = $response->getStatusCode();
//  $data = $response->getBody()->getContents();

//  $housesData = json_decode($data, true);
//  $results = $housesData['results'];

//  // Si no se seleccionó un precio, no filtrar por precio
//  if ($price != 0) {
//      // Filtrar propiedades por precio
//      $results = array_filter($results, function ($house) use ($price) {
//          return $house['selling_cost'] <= $price;
//      });
//  }

//  // Ordenar por precio
//  usort($results, function ($house1, $house2) use ($price) {
//      return abs($house1['selling_cost'] - $price) <=> abs($house2['selling_cost'] - $price);
//  });

//  // Filtrar por búsqueda
//  if ($search) {
//      $results = array_filter($results, function ($house) use ($search) {
//          return strpos(strtolower($house['title']), strtolower($search)) !== false ||
//                strpos(strtolower($house['identifier']), strtolower($search)) !== false ||
//                strpos(strtolower($house['province']), strtolower($search)) !== false ||
//                strpos(strtolower($house['town']), strtolower($search)) !== false ||
//                strpos(strtolower($house['street']), strtolower($search)) !== false ||
//                strpos(strtolower($house['kind']), strtolower($search)) !== false;
//      });
//  }

//  $results = array_filter($results, function ($house) {
//      return $house['raw_status'] == 'available';
//  });

//  $response = $client->request('GET', "https://witei.com/api/v1/houses", [
//      'headers' => $headers
//  ]);
//  $data = $response->getBody()->getContents();
//  $allHousesData = json_decode($data, true);
//  $totalProperties = count($allHousesData['results']);

//  // Obtén el número de propiedades filtradas
//  $filteredProperties = count($results);
//  $total = $filteredProperties ? $filteredProperties : $totalProperties;

//  // Implementar paginación
//  $results = array_slice($results, ($page - 1) * 10, 10);

//  return view('houses', ['results' => $results, 'page' => $page, 'total' => $total, 'filteredProperties' => $filteredProperties, 'totalProperties' => $totalProperties]);
// }













//   public function getHouses(Request $request)
// {
//    $page = $request->get('page') ? $request->get('page') : 1;
//    $price = intval($request->get('Price'));
//    $provincia = $request->get('Provincia');
//    $ciudad = $request->get('Ciudad');
//    $search = $request->get('Search');

//    $client = new \GuzzleHttp\Client();
   
//    $headers = [
//        'Content-Type' => 'application/json',
//        'Authorization' => 'Bearer 7a54f9633cf443d988c0c49e2b77989b'
//    ];

 
//    $url = "https://witei.com/api/v1/houses";
//    $allResults = [];

//    do {
//        $response = $client->request('GET', $url, ['headers' => $headers]);
//        $data = $response->getBody()->getContents();
//        $housesData = json_decode($data, true);

//        $allResults = array_merge($allResults, $housesData['results']);

//        $url = $housesData['next'];
//    } while ($url);

//    // Aplica los filtros a todas las propiedades
//    if ($price != 0) {
//        $allResults = array_filter($allResults, function ($house) use ($price) {
//            return $house['selling_cost'] <= $price;
//        });
//    }

//    // Filtrar por provincia y ciudad
//    if ($provincia) {
//        $allResults = array_filter($allResults, function ($house) use ($provincia) {
//            return strpos($house['province'], $provincia) !== false;
//        });
//    }

//    if ($ciudad) {
//        $allResults = array_filter($allResults, function ($house) use ($ciudad) {
//            return strpos($house['town'], $ciudad) !== false;
//        });
//    }

//    // Ordenar por precio
//    usort($allResults, function ($house1, $house2) use ($price) {
//        return abs($house1['selling_cost'] - $price) <=> abs($house2['selling_cost'] - $price);
//    });

//    // Filtrar por búsqueda
//    if ($search) {
//        $allResults = array_filter($allResults, function ($house) use ($search) {
//            return strpos(strtolower($house['title']), strtolower($search)) !== false ||
//                  strpos(strtolower($house['identifier']), strtolower($search)) !== false ||
//                  strpos(strtolower($house['province']), strtolower($search)) !== false ||
//                  strpos(strtolower($house['town']), strtolower($search)) !== false ||
//                  strpos(strtolower($house['street']), strtolower($search)) !== false ||
//                  strpos(strtolower($house['kind']), strtolower($search)) !== false;
//        });
//    }

//    // Filtrar por estado
//    $allResults = array_filter($allResults, function ($house) {
//        return $house['raw_status'] == 'available';
//    });

//    // Obtén el número total de propiedades filtradas
//    $totalProperties = count($allResults);
//    $filteredProperties = count($allResults);

//    // Implementar paginación
//    $results = array_slice($allResults, ($page - 1) * 10, 10);

//    return view('houses', ['results' => $results, 'page' => $page, 'totalProperties' => $totalProperties, 'filteredProperties' => $filteredProperties]);
// }





<!-- 
public function getHouses(Request $request)
{
 $price = intval($request->get('Price'));
 $provincia = $request->get('Provincia');
 $ciudad = $request->get('Ciudad');
 $search = $request->get('Search');

 $headers = [
   'Content-Type' => 'application/json',
   'Authorization' => 'Bearer 7a54f9633cf443d988c0c49e2b77989b'
 ];

 $client = new Client();
 $allResults = [];

 $page = 1;
 $nextPageExists = true;

 while ($nextPageExists) {
   try {
       // Obtén todos los resultados de la API
       $response = $client->request('GET', "https://witei.com/api/v1/houses/?page=" . $page, [
           'headers' => $headers
       ]);

       $statusCode = $response->getStatusCode();
       $data = $response->getBody()->getContents();
       $housesData = json_decode($data, true);

       $allResults = array_merge($allResults, $housesData['results']);

       $nextPageExists = $housesData['next'] != null;
       $page++;
   } catch (RequestException $e) {
       if ($e->getResponse()->getStatusCode() == 404) {
           return view('errors.404');
       }

       throw $e;
   }
 }

 // Aplica los filtros a todas las propiedades
 if ($price != 0) {
    // Filtrar propiedades por precio
    $allResults = array_filter($allResults, function ($house) use ($price) {
        return $house['selling_cost'] <= $price;
    });
 }

 // Filtrar por provincia y ciudad
 if ($provincia) {
    $allResults = array_filter($allResults, function ($house) use ($provincia) {
        return strpos($house['province'], $provincia) !== false;
    });
 }
 
 if ($ciudad) {
    $allResults = array_filter($allResults, function ($house) use ($ciudad) {
        return strpos($house['town'], $ciudad) !== false;
    });
 }

 // Obtén el número total de propiedades filtradas
 $totalProperties = count($allResults);
 $filteredProperties = count($allResults);

 // Implementar paginación
 $results = array_slice($allResults, ($page - 1) * 10, 10);

 return view('houses', ['results' => $results, 'page' => $page, 'totalProperties' => $totalProperties, 'filteredProperties' => $filteredProperties]);
}
 -->



