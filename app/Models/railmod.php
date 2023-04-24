<?php

namespace App\Models;

use CodeIgniter\Model;
use Exception;

class railmod extends Model
{
    private $dbp;
    private $resultg;
    private $email;
    private $returndata;

    public function __construct()
    {
        $this->dbp = \Config\Database::connect("railing");
    }
    public function getappdetails()
    {
        $queryg = $this->dbp->query("SELECT * FROM staticdata;");
        $this->resultg = $queryg->getResultArray();
        return $this->resultg[0];
    }
    public function getallcategories($order)
    {
        $queryg = $this->dbp->query("SELECT * FROM categories ORDER BY category_id {$order};");
        $this->resultg = $queryg->getResultArray();
        return $this->resultg;
    }
    public function getdetailedcat()
    {
        
        $queryg = $this->dbp->query("SELECT c.*, CONCAT('[', REPLACE(GROUP_CONCAT(CONCAT('{\"id\":', p.product_id, ',\"name\":\"', p.product_name, '\",\"price\":', p.product_price, '}')), ',', '},{'), ']') AS top_5_products
            FROM categories c
            LEFT JOIN products p ON c.category_id = p.category_id 
            GROUP BY c.category_id
            ORDER BY c.category_id DESC
            LIMIT 5;");
        $this->resultg = $queryg->getResultArray();
        return $this->resultg;
    }


    public function getallproducts($order,$limit)
    {
        $queryg = $this->dbp->query("SELECT products.*, categories.*
        FROM products
        JOIN categories ON products.category_id = categories.category_id  ORDER BY products.product_id {$order} LIMIT {$limit};");
        $this->resultg = $queryg->getResultArray();
        return $this->resultg;
    }
    public function getlimitedproducts($limit, $order)
    {
        $queryg = $this->dbp->query("SELECT products.*, categories.*
        FROM products
        JOIN categories ON products.category_id = categories.category_id  ORDER BY products.product_id {$order} LIMIT {$limit};");
        $this->resultg = $queryg->getResultArray();
        return $this->resultg;
    }
    public function getproductsbycat($cat_id, $limit)
    {
        $queryg = $this->dbp->query("SELECT products.*, categories.*
        FROM products
        JOIN categories ON products.category_id = categories.category_id WHERE products.category_id={$cat_id} LIMIT {$limit}");
        $this->resultg = $queryg->getResultArray();
        return $this->resultg;
    }
    public function getproductsbyid($prod_id, $limit)
    {
        $queryg = $this->dbp->query("SELECT products.*, categories.*
        FROM products
        JOIN categories ON products.category_id = categories.category_id WHERE products.product_id={$prod_id} LIMIT {$limit}");
        $this->resultg = $queryg->getResultArray();
        return $this->resultg;
    }
    public function gettotalpc($cat_id)
    {
        $queryg = $this->dbp->query("SELECT COUNT(*) AS cnt
        FROM products
        JOIN categories ON products.category_id = categories.category_id WHERE products.category_id={$cat_id}");
        $this->resultg = $queryg->getResultArray();
        return $this->resultg[0]['cnt'];
    }
    public function gettrendprod($order, $limit)
    {
        $queryg = $this->dbp->query("SELECT products.*, categories.*
        FROM products
        JOIN categories ON products.category_id = categories.category_id ORDER BY products.trend {$order} LIMIT $limit");
        $this->resultg = $queryg->getResultArray();
        return $this->resultg;
    }

    public function contactemail($subject, $message, $from, $name = '')
    {
        try {
            $message = '
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <title>' . $subject . '</title>
                <style>
                    body {
                        font-family: Arial, sans-serif;
                        font-size: 14px;
                        line-height: 1.5;
                        color: #333;
                    }
                    img {
                        max-width: 100%;
                        height: auto;
                    }
                    .wrapper {
                        max-width: 600px;
                        margin: 0 auto;
                        padding: 20px;
                        background-color: #fff;
                    }
                    .header {
                        text-align: center;
                        margin-bottom: 20px;
                    }
                    .header img {
                        max-width: 150px;
                        height: auto;
                        margin-bottom: 10px;
                    }
                    .content {
                        margin-bottom: 20px;
                    }
                    .button {
                        display: inline-block;
                        padding: 10px 20px;
                        background-color: #007bff;
                        color: #fff;
                        text-decoration: none;
                        border-radius: 5px;
                    }
                    .footer {
                        text-align: center;
                    }
                    .footer p {
                        margin: 0;
                    }
                </style>
            </head>
            <body>
                <div class="wrapper">
                    <div class="content">
                        <p>Hi wonderful User,</p>
                        <h2><b> From: ' . $from . '</b></h2>
                        <p>' . $name . '</p>
                        <p>' . $message . '</p>
                        <p>Any abnormalities should be reported as soon as experience.</p>
                        <p>Thank you for your support!</p>
                    </div>
                    <div class="footer">
                        <p>© 2023 EEjournals.org. All rights reserved.</p>
                    </div>
                </div>
            </body>
            </html>
    
            ';
            $this->email = \Config\Services::email();
            // $this->email->setTo('okeyjournals@gmail.com');
            $this->email->setTo('okeyjournals@gmail.com');
            $this->email->setFrom('eetest@sowseed146.com');
            $this->email->setSubject($subject);
            $this->email->setMessage($message);

            if (!$this->email->send()) {
                $this->returndata = [
                    'status' => 'failed',
                    'message' => 'Email failed '
                ];
                // $this->email->printDebugger()
            } else {
                $this->returndata = [
                    'status' => 'success',
                    'message' => 'Email sent succesfully '
                ];
            }
        } catch (Exception $ex) {
            $this->returndata = [
                'status' => 'failed',
                'message' => 'Email failed ' . $ex->getMessage()
            ];
        }
        return $this->returndata;
    }
    public function gettodaysdate($format = "M d Y")
    {
        $t = time();
        return date($format, $t);
    }
    public function registervisit()
    {
        $d = $this->gettodaysdate("Y-m") . '-00';
        // echo $d;
        $queryg = $this->dbp->query("SELECT * FROM analytics WHERE andate = '" . $d . "' AND antype = 'admin';");
        $resultg = $queryg->getResultArray();
        // print_r($resultg);
        if (count($resultg) >= 1) {
            $builder = $this->dbp->table('analytics')->where(['andate' => $d, "antype" => 'admin']);
            $builder->update(
                [
                    'ancount' => $resultg[0]['ancount'] + 1,
                    'lastlink' => strtolower(trim(uri_string()))
                ]
            );
        } else {
            $builder = $this->dbp->table('analytics');
            $builder->insert(
                [
                    'ancount' => 1,
                    'antype' => 'admin',
                    'lastlink' => strtolower(trim(uri_string())),
                    'andate' => $d
                ]
            );
        }
    }
}
