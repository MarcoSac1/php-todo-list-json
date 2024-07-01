<?php 

// $toDo =[
//     [
//         "nome" => "Prenotazione medica",
//         "luogo"=> "Ospedale",
//         "scadenza"=> "2024-07-15"
//     ],
//     [
//         "nome" => "Ritiro pacchetto",
//         "luogo" => "Posta",
//         "scadenza" => "2024-07-10"
//     ],
//     [
//         "nome" => "Prenotazione viaggio",
//         "luogo" => "Aeroporto",
//         "scadenza" => "2024-08-01"
//     ],
//     [
//         "nome" => "Pagamento fattura",
//         "luogo" => "Banca",
//         "scadenza" => "2024-07-20"
//     ]
// ];    

// // var_dump($toDo);

header('content-type:application/json');

// echo json_encode($toDo);

$rawData = file_get_contents('./db/todo.json');
$data = json_decode($rawData, true );

// var_dump($rawData,  $data);
echo json_encode($data);
?>