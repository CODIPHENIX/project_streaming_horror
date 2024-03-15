<?php
function connectDB($servername,$username,$password,$database){
    try{
    # create instance
            $conn = new mysqli($servername,$username,$password,$database);
        }
    /* check connection */
    catch(Exception $e){
    die ("connection failed");
    }
    return $conn;
}
$conn= connectDB("localhost","root","","horreurvision_db");