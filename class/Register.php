<?php
require_once "../autoload.php";
class Register {
    public static $firstname;
    public static $lastname;
    public static $username;
    public static $password;
    public static $DateofBirt;

    public function __construct( $firstname,$lastname,$username,$password,$DateofBirt){
        self::$firstname    = $firstname;
        self::$lastname     = $lastname;
        self::$username     = $username;
        self::$password     = $password;
        self::$DateofBirt   = $DateofBirt;

    }
    public function insertRegister(){
        $dataAll = [
            self::$firstname,
            self::$lastname,
            self::$username,
            self::$password,
            self::$DateofBirt
        ];
        $stmt = "INSERT INTO `tb_profile`(`P_NAME`, `P_DETAIL`, `P_STATUS`) VALUES (?,?,?)";
        

        $db = new CRUD('insert',$stmt,$dataAll);
        $db->run();

    }
}
?>