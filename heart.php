<?php
header("Content-Type: application/json");

if(isset($_GET["count"]) && $_GET["count"] != ""){
    $count = intval($_GET["count"]); // Ensure it's an integer
    $count++; // Increment count

    // Return the new count as JSON
    echo json_encode(["count" => $count, "like-count" => $count]);
} else {
    echo json_encode(["error" => "Invalid count"]);
}
?>