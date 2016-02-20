<?php

// Composer autoload
require_once __DIR__ . '/vendor/autoload.php';

use src\Trip;

// ## Manually 
// $boardingCollection = array(
//     array(
//         'Departure' => 'C',
//         'Arrival' => 'D',
//         'Transportation' => 'Bus',
//     ),
//     array(
//         'Departure' => 'A',
//         'Arrival' => 'B',
//         'Transportation' => 'Train',
//         'TransportationNumber' => '78A',
//         'Seat' => '45B',
//     )
// );
//
// $trip = new Trip($boardingCollection);
//
// // Add another boarding
// $trip->addBoarding(array(
//     'Departure' => 'B',
//     'Arrival' => 'C',
//     'Transportation' => 'Plane',
//     'TransportationNumber' => '11A',
//     'Seat' => '10A',
//     'Gate' => '10A',
// ));

// ## From file
include_once('cards.php');
$trip = new Trip($boardingCollection);

// Sort them
$trip->sort();

// Display
$trip->tripString();
