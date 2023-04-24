<?php

namespace App\Models;

use \App\Models\encode;
use CodeIgniter\CodeIgniter;
use CodeIgniter\Model;

class Authmod extends Model
{
    private $encrypt;
    private $session;
    public function __construct(){
        $this->session = \Config\Services::session();
        $this->encrypt=new encode();
    }
    public function getuser()
    {
        if ($this->session->has("kjkjyunlknkhd6wfuį͘sy")) {
            return  $this->encrypt->decrypt($this->session->get("kjkjyunlknkhd6wfuį͘sy"));
        } else {
            //echo 'notset';
            echo "<script>window.location.href='" . base_url() . "';</script>";
        }
    }
    
    function setuser($name){
        $this->session->set("kjkjyunlknkhd6wfuį͘sy", $this->encrypt->encrypt($name)); 
    }
    function logout(){
        if($this->session->has("kjkjyunlknkhd6wfuį͘sy")){
            $this->session->remove("kjkjyunlknkhd6wfuį͘sy");
        }
    }
  
}
