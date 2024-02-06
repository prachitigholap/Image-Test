<?php 
namespace App\Models;
use CodeIgniter\Model;
class MultipleModel extends Model
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

// public function getanydata($any){
//     $this->db->select('*');
//     $this->db->from('merged');
//     // $this->db->join('address a','c.addressID = a.addressID','left');
//     // $this->db->where('a.countryID',$id);
//     // $this->db->query("select * from products ")->get()->result()
//     $this->db->where('product_name,product_description,product_category,veg_non_veg,topping_name,group_name', $any);
//     $this->db->like('%$any%')
//     $result = $this->db->get()->result_array();
//     return $result;
//   }
function all(){
    return $this->db->table('merged')->get()->getResult();
}
}