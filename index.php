<?php

$method = $_SERVER['REQUEST_METHOD'];
//Process only when method is POST
if($method == "POST"){
    $requestBody = file_get_contents('php://input');
    $json = json_decode($requestBody);

    $test = $json->result->parameters->text;

    switch ($text){
        case 'h1':
            $speech = "Hi. Nice to meet you";
            break;
        case 'h2':
            $speech ="Let us know your name please.";
            break;
        case 'h3':
            $speech ="Where are you currently located?";
            break;    
        
        default:
            $speech ="Sorry, I didn't get that. Please ask me something else."
         break;

    }

    $responce = new \stdClass();
    $responce->speech = "";
    $responce->displayText = "";
    $responce->source ="webhook";
    echo json_encode($responce);

}
else
{
    echo "Method not allowed";
 
}

?>
