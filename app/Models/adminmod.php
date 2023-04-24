<?php

namespace App\Models;

use CodeIgniter\Model;
use \App\Models\Authmod;
use Exception;

class adminmod extends Model
{
    private $dbp;
    private $auth;

    public function __construct()
    {
        $this->dbp = \Config\Database::connect("railing");
        $this->auth = new Authmod();
        if (strtolower(trim(uri_string())) != 'admin') { 
            $dat=json_decode($this->auth->getuser());
            $queryg = $this->dbp->query("SELECT * FROM admin WHERE username = '" . $dat->un . "' AND pass = '" . $dat->pass . "';");
            $resultg = $queryg->getResultArray();
            if (count($resultg) != 1) {
                echo "<script>window.location.href='" . base_url() . "';</script>";
            }
        }else{
            $this->auth->logout();
        }
    }
}
