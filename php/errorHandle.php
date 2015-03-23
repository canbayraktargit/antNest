<?php
class ErrorHandleFile {
    public static $logDirectoryName = "./error/";
    public static $logFileName = "logs";
    public static $logDirectory;
    public static $logFile;
    public static $permission = 0777;
    public static $isEnabled = false;
    public static $dateFormat = "d m y -> H i s";
    
    public static function start(){
        if(!self::$isEnabled){
            self::setDirectory();
            self::setLogFile();
            self::$isEnabled = true;
            self::sendError("ErrorHandleFile", "started");
        }
    }
    public static function setDirectory(){
        self::$logDirectory = opendir(self::$logDirectoryName);
        if(self::$logDirectory == false){
            self::createDirectory();
            self::setDirectory();
            return ;
        }
    }
    public static function createDirectory(){
        mkdir(self::$logDirectoryName);
        chmod(self::$logDirectoryName, self::$permission);
    }
    public static function setLogFile(){
        self::$logFile = fopen(self::$logDirectoryName.self::$logFileName, 'a');
    }
    public static function sendError($source, $message){
        fprintf(self::$logFile, date(self::$dateFormat)." :\t ".$source." \t ".$message."\n");
    }
    public static function close(){
        fclose(self::$logFile);
    }
}
ErrorHandleFile::start();
?>