<?php
include './php/errorHandle.php';
include './php/sqlConnection.php';

class Main{
    private static $sqlConnection;
    
    public static function init(){
        try {
            self::$sqlConnection = new SqlConnection();

        } catch(Exception $ex) {
            ErrorHandleFile::sendError($ex->getMessage());
        }
    }
    public static function finish(){
        ErrorHandleFile::close();
    }
}
Main::init();
Main::finish();
?>