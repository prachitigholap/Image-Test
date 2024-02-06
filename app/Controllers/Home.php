<?php

namespace App\Controllers;
use App\Models\CommonModel;
use CodeIgniter\API\ResponseTrait;

class Home extends BaseController
{
        
    public function index()
    {
            $model = new CommonModel();
            $result = $model->selectRecord("merged");
            // echo "<pre>";
            // echo json_encode($fetchRecord);
            // print_r($result);
            $data['title'] = "Select Page";
            $data['result'] = $result;
            // $data['result'] = $result->paginate(10);
            // $data['pager'] = $result->pager;
            return view('welcome_message', $data);
        
    } 
    
    
}
