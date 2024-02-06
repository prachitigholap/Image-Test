<?php 
namespace App\Models;
use CodeIgniter\Model;
class FormModel extends Model
{
    protected $table = 'merged';
    protected $primaryKey = 'id';
    protected $allowedFields = ['product_name', 'product_description', 'product_category', 'veg_non_veg', 'topping_name', 'group_name'];
    


function getdata($name)
{
    $db = \Config\Database::connect();
    $builder = $this->table('merged');
    // $this->db->query("select * from products ")->get()->result()
   

    $builder->select('*');
    
    $builder->where('product_name', $name);


        $query = $builder->get();
         echo $db->getLastQuery();

         return $query->getResult();
       // $result =$query->getResult();
       // return $result;
       

}

}