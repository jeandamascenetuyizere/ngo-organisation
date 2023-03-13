<?php
require_once('dbconnection.php');
ini_set("display_errors", "1");
error_reporting(E_ALL);
class donalmodel_model extends dbconnection{
    private $don_id;
    private $name;
    private $phone;
    private $email;
    private $address;
    private $url;
    private $ngo_id;

    public function __construct($don_id=null,$name="",$phone="",$email="",$address="",$url=""){
        parent::__construct();
        $this->don_id = $don_id;
        $this->name = $name;
        $this->phone = $phone;
        $this->email = $email;
        $this->address = $address;
        $this->url = $url;
    }

    public function send_donar($name,$phone,$email,$address,$url){
        try {
            $stm = $this->db->prepare("INSERT INTO donars (name,phone,email,address,url,ngo_id) VALUES(?,?,?,?,?,?)");
            $stm->execute([$name,$phone,$email,$address,$url,1]);
            return "<h6 style='color:green;'>record success</h6>";
        } catch (Exception $error) {
        return $error->getMessage();
        }
    }
}
?>