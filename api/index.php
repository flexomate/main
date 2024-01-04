<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
$method = $_SERVER("REQUEST_METHOD");

switch ($method) {
  case "POST" :
    $input = file_get_contents('php://input');
    echo $input;
    $dataFile = fopen("student.json", "w");
    fwrite($dataFile, $input);
    $response = ["status" => 200; "message" => "Post executed successfully!"];
    echo($response);
}
