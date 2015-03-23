<?php
include './php/errorHandle.php';
include './php/sqlConnection.php';
include './php/domBuilder.php';

class Main{
    private static $sqlConnection;
    private static $domBuilder;
    private static $settings;
    
    public static function init(){
        try {
            self::$settings = self::getJson("settings");
            //self::$sqlConnection = new SqlConnection();
            self::$domBuilder = new DomBuilder("antNest", self::$settings);
            self::$domBuilder->build();        
        } catch(Exception $ex) {
            ErrorHandleFile::sendError($ex->getMessage());
        }
    }
    public static function getJson($fileName){
        return json_decode(file_get_contents("./json/".$fileName.".json"));
    }
    public static function finish(){
        ErrorHandleFile::close();
    }
}
Main::init();
Main::finish();
?>