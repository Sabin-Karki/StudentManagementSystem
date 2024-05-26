<?php
require_once "Dbconn.php";

if(isset($_GET['id'])){
    $id = $_GET['id'];

    delete_function($id, $conn);
}

    function delete_function($id, $conn){
        $query ="DELETE FROM students where id = $id";
        $exec = mysqli_query($conn, $query); 
        
        
    if($exec){
        echo "id with $id Deleted Successfully";
    }else{
        echo mysqli_error($conn);
    }
    }

?>