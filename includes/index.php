<?php
    include 'function.php';
    
    if (isset($_GET["movie"])){
        $data = get_all_movies($conn, $_GET["movie"]);
        echo json_encode($data);
    } else {
        $data = get_all_movies($conn);
        echo json_encode($data);
        //can use this for portfolio pieces too - does not only apply to media
    }

?>