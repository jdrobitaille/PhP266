<?php

/**
 * A method to check if a Post request has been made.
 *    
 * @return boolean
 */
function isPostRequest() {
    return ( filter_input(INPUT_SERVER, 'REQUEST_METHOD') === 'POST' );
}


function updateTestRow($id ,$dataone, $datatwo){
     $db = getDatabase();
     $stmt = $db->prepare("UPDATE test set dataone = :dataone, datatwo = :datatwo where id = :id");
     
     $binds = array(
        ":id" => $id,
        ":dataone" => $dataone,
        ":dataone" => $dataone
             
         if ($stmt->execute($binds) && $stmt->rowCount() > 0) 
                   $result = 'Record updated';
                
         
    )
     
}