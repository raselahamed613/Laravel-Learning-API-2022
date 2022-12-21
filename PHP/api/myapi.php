<?php
// echo "New API Make"
header('Content-Type: application/json');

$method = $_SERVER['REQUEST_METHOD'];

switch ($method){
    case 'GET': 
        handleGetOperation();
        break;
    case 'POST':
        // echo "post received";
        // echo '{"result": "post received"}';
        $data = json_decode(file_get_contents('php://input'), true);
        handlePostOperation($data);
        break;
    case 'PUT': 
        $data = json_decode(file_get_contents('php://input'), true);
        handlePutOperation($data);
        break;
    case 'DELETE':
        $data = json_decode(file_get_contents('php://input'), true);
        handleDeleteOperation($data);
        break;
}

function handleGetOperation(){
    include "db.php";

    $sql = "SELECT * FROM test";

    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){
        //output data of each row
        $rows = array();
        while($r = mysqli_fetch_assoc($result)){
            $rows["result"][] = $r; // with result object
            // $rows[] = $r // only array 
        }
        echo json_encode($rows);
    }else{
        echo '{"result": "No Data Found" }';
    }

}
function handlePostOperation($data){
    include "db.php";

    $name = $data["name"];
    $phone = $data ["phone"];

    $sql = "INSERT INTO test(name, phone, time) VALUES('$name', '$phone',NOW())";


    if(mysqli_query($conn, $sql)){
        echo '{"resut": "success"}';
    }else{
        echo '{"result": "error"}';
    }
}
function handlePutOperation($data){
    include "db.php";
    $id = $data["id"];
    $name = $data["name"];
    $phone = $data ["phone"];

    $sql = "UPDATE test SET name = '$name', phone = '$phone', time = NOW() WHERE id = '$id'";


    if(mysqli_query($conn, $sql)){
        echo '{"resut": " update success"}';
    }else{
        echo '{"result": "update error"}';
    }
}
function handleDeleteOPeration($data){
    include "db.php";
    $id = $data["id"];

    $sql = "DELETE FROM test WHERE id = '$id'";


    if(mysqli_query($conn, $sql)){
        echo '{"resut": " Delete success"}';
    }else{
        echo '{"result": "Delete error"}';
    }
}
?>