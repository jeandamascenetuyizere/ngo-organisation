<?php
require_once('dbconnection.php');
ini_set("display_errors", "1");
error_reporting(E_ALL);
class create_model extends dbconnection{
    private $emp_id;
    private $name;
    private $phone;
    private $email;
    private $application_date;
    private $dob;
    private $username;
    private $ngo_id;

    public function __construct($emp_id=null,$name="",$phone="",$email="",$application_date="",$dob="",$username=""){
        parent::__construct();
        $this->emp_id = $emp_id;
        $this->name = $name;
        $this->phone = $phone;
        $this->email = $email;
        $this->application_date = $application_date;
        $this->dob = $dob;
        $this->username = $username;
    }

    public function send_employee($name,$phone,$email,$application_date,$dob,$username){
        try {
            $stm = $this->db->prepare("INSERT INTO employees (name,phone,email,application_date,dob,username,ngo_id) VALUES(?,?,?,?,?,?,?)");
            $stm->execute([$name,$phone,$email,$application_date,$dob,$username,1]);
            return "<h6 style='color:green;'>record success</h6>";
        } catch (Exception $error) {
        return $error->getMessage();
        }
    }
}
?>