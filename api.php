<?php

require "./includes/data.php";

try {
    // Get our request data
    if (!isset($_GET["name"])) {
        throw new Exception("No method specified");
    }
    $function = $_GET["name"];
    unset($_GET["name"]);
    $params = $_GET;

    // Check that the function requested is valid
    $functions = get_defined_functions();
    $functions = $functions["user"];
    // Get rid of get_data function
    $getDataKey = array_search("get_data", $functions);
    unset($getDataKey);
    // Catch invalid functions
    if (!array_search($function, $functions)) {
        throw new Exception("Invalid method called");
    }
    
    // Output the results
    echo json_encode(call_user_func_array($function, $params));
} catch (Exception $e) {
    echo json_encode(array("error" => $e->getMessage()));
}