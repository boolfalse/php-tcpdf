<?php


require_once "config.php";

session_start();

//if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
//    header("location: login.php");
//    exit;
//}

$template_id = $_POST['template_id'];
if(empty($template_id)){
    echo json_encode(Array(
        'result' => false,
        'message' => "Template ID was not provided!",
    ));
}
elseif(!filter_var($template_id, FILTER_VALIDATE_INT)){
    echo json_encode(Array(
        'result' => false,
        'message' => "Not valid template ID!",
    ));
}
else {
    $template = Array();
    $sql = "SELECT id, title, content FROM templates WHERE id = " . $template_id . " LIMIT 1;";
    $result = $link->query($sql);

    $link->close();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();

        $template['id'] = $row['id'];
        $template['title'] = $row['title'];
        $template['content'] = $row['content'];

        echo json_encode(Array(
            'result' => true,
            'message' => "Template successfully found.",
            'template' => $template,
        ), true);
    } else {
        echo json_encode(Array(
            'result' => false,
            'message' => "Template not found!",
        ));
    }
}