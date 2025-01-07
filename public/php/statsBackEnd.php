<?php
// backend.php
header('Content-Type: application/json');

// Données pour le camembert
$data = [
  'labels' => ['Catégorie A', 'Catégorie B', 'Catégorie C'],
  'datasets' => [
    [
      'data' => [40, 30, 30],
      'backgroundColor' => ['#FF6384', '#36A2EB', '#FFCE56'],
    ]
  ]
];

echo json_encode($data);