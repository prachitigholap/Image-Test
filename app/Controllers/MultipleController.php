<?php 
namespace App\Controllers;
use App\Models\MultipleModel;
use CodeIgniter\Controller;
class MultipleController extends Controller
{

 

 public function multiple()

 {

$model = new MultipleModel();

$name = $this->request->getPost('product_name');
//$name = $this->request->getPost[('product_name')];

$data = $model->getdata($name);

return view('multiple_form', ['data' => $data]);

$result = $model->all();
echo "<pre>";
print_r($result);
echo "<pre>";
return view('welcome_message', $result);
//echo view('search_form', $data);
//return view('my_results', ['data' => $data]);
      
//print_r($data);

 }

//  public function multiplesearch()
//  {
// $model = new MultipleModel();
// $any = $this->request->getPost('any');
// // $anydata = $model->getdata($any);
// $result = $this->report_model->getdata($any);
// print_r($result);
// return view('multiple_form', ['data' => $result]);
//  }

 public function getalldb()
 {
$model = new MultipleModel();
    $data = [
            'products' => $model->paginate(10),
            'pager' => $model->pager
        ];
       
      //  return view('search_form', $data);
        return view('multiple_form', ['data' => $data]);
 }


    public function store() {
        helper(['form']);
        $rules = [
            'product_name' => 'required|min_length[3]',
            'product_description' => 'required|min_length[3]',
            'product_category' => 'required|min_length[3]',
            'veg_non_veg' => 'required|min_length[3]',
            'topping_name' => 'required|min_length[3]',
            'group_name' => 'required|min_length[3]'
        
        ];
          
        if($this->validate($rules)){
            $formModel = new Model();
            $data = [
                'product_name' => $this->request->getVar('product_name'),
                'product_description' => $this->request->getVar('product_description'),
                'product_category' => $this->request->getVar('product_category'),
                'veg_non_veg' => $this->request->getVar('veg_non_veg'),
                'topping_name' => $this->request->getVar('topping_name'),
                'group_name' => $this->request->getVar('group_name'),
                
            ];
            $formModel->save($data);
            return redirect()->to('/');
        }else{
            $data['validation'] = $this->validator;
            echo view('welcome_message', $data);
        }        
    }
}