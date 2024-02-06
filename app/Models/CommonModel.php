<?php
namespace App\Models;
use CodeIgniter\Model;

class CommonModel extends Model{
    public function selectRecord($table, $where=array()){
        $builder = $this->db->table($table);
        $builder -> select("*");
        // $builder->where("product_id","5");
        $result = $builder->get();
        // echo$this->db->getLastQuery();
        return $result->getResult();
    }

    public function selectRow($table, $where=array()){
        $builder = $this->db->table($table);
        $builder->where($where);
        $result = $builder->get();
        return $result->getRow();
    }

}
    // public function selectRecords($table, $where=array()){
    //     $builder = $this->db->table($table);
    //     $builder -> select("*");
    //     $builder -> where(['product_id' => 15]);
    //     $result = $builder->get();
    //     return $result->getResult();


    // }
    // public function selectCategory(){
    //     $productcategories = ['Pizza', 'Burger'];
    //     $builder = $this->db->table($table);
    //     $builder -> select("*");
    //     $builder->whereIn('product_categories', $productcategories);
    //     $result = $builder->get();
    //     // echo$this->db->getLastQuery();
    //     return $result->getResult(); 
    // }
    
?>