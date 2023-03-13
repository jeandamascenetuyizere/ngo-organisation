<?php
require_once('dbconnection.php');
ini_set("display_errors", "1");
error_reporting(E_ALL);
class rolemodel_model extends dbconnection{
    private $role_id;
    private $role_of_emp;
    private $created_at;
    public function __construct($role_id=null,$role_of_emp="",$created_at=""){
        parent::__construct();
        $this->role_id = $role_id;
        $this->role_of_emp = $role_of_emp;
        $this->created_at = $created_at;
    }

    public function send_role($role_of_emp,$created_at){
        try {
            $stm = $this->db->prepare("INSERT INTO roles (role_of_emp,created_at) VALUES(?,?)");
            $stm->execute([$role_of_emp,$created_at]);
            return "<h6 style='color:green;'>record success</h6>";
        } catch (Exception $error) {
        return $error->getMessage();
        }
    }
}
?>