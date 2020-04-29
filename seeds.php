<?php

require_once "env.php";
require_once "seed-data.php";

// Attempt to connect to MySQL database
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

foreach ($templates as $template) {
//    if(isValidTemplate) {

        try {
            $sql = "INSERT INTO templates (title, content) VALUES (?, ?)";

            if ($stmt = mysqli_prepare($link, $sql)) {
                mysqli_stmt_bind_param($stmt, "ss", $template['title'], $template['content']);

                if (mysqli_stmt_execute($stmt)) {
                    echo "Executed template seed for template: " . $template['title'] . "<br />";
                } else {
                    echo "Something went wrong with content of: " . $template['title'] . "<br />";
                    mysqli_close($link);
                    die();
                }
            }

            mysqli_stmt_close($stmt);
        }
        catch (Exception $e) {
            echo "Something went wrong:<br />" . $e->getMessage() . "<br />";
            mysqli_close($link);
            die();
        }

//    }
}

// Close connection
mysqli_close($link);

echo "<br />";
echo "Seeds executed successfully!<br />";
