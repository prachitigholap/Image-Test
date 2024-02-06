<!DOCTYPE html>
<html lang="en">


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css"/>

    

    <title>Food App</title>
</head>


<body>
    <!-- Script  -->
    <script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script>
        let table = new DataTable('#myTable');
    </script>
    
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <div class="my-3 text-center">
                    <h4>Food App for Test
                        <hr class="text-denger">
                    </h4>
                    <!-- <?php print_r($result) ?> -->
                </div>
                <div class="card rounded">
                    <div class="card-body">
                        <div class="row mb-2">

                            <div class="col-sm-4">
                                <div class="text-sm-end">
                                    <div class="input-group">
                                        <form action="" method="GET">
                                        
                                        <div class="input-group mb-3">
                                            <input type="text" name="searchall" value="<?php if(isset($_GET['searchall'])){echo $_GET['searchall'];}
                                            ?>" 
                                            class="form-control" placeholder="search data">
                                            <button type="submit" class="btn btn-primary">Filter</button>
                                        </div>

                                        <div class="row">
                                        <div class="col-md-4">
                                                <select name="product_category" class="form-select">
                                                    <option value="">Categories</option>
                                                    <option value="Pizza" <?= isset($_GET['product_category']) == true ? ($_GET['product_category'] == 'Pizza' ? 'selected':''): '' ?> >Pizza</option>
                                                    <option value="Burger" <?= isset($_GET['product_category']) == true ? ($_GET['product_category'] == 'Burger' ? 'selected':''): '' ?>>Burger</option>
                                                    <option value="Pasta" <?= isset($_GET['product_category']) == true ? ($_GET['product_category'] == 'Pasta' ? 'selected':''): '' ?>>Pasta</option>
                                                    <option value="Rice" <?= isset($_GET['product_category']) == true ? ($_GET['product_category'] == 'Rice' ? 'selected':''): '' ?>>Rice</option>
                                                    <option value="Sandwich" <?= isset($_GET['product_category']) == true ? ($_GET['product_category'] == 'Sandwich' ? 'selected':''): '' ?>>Sandwich</option>
                                                    <option value="Curry" <?= isset($_GET['product_category']) == true ? ($_GET['product_category'] == 'Curry' ? 'selected':''): '' ?>>Curry</option>
                                                    <option value="Wrap" <?= isset($_GET['product_category']) == true ? ($_GET['product_category'] == 'Wrap' ? 'selected':''): '' ?>>Wrap</option>
                                                    <option value="Soup" <?= isset($_GET['product_category']) == true ? ($_GET['product_category'] == 'Soup' ? 'selected':''): '' ?>>Soup</option>
                                                    <option value="Appetizer" <?= isset($_GET['product_category']) == true ? ($_GET['product_category'] == 'Appetizer' ? 'selected':''): '' ?>>Appetizer</option>
                                                    <option value="Salad" <?= isset($_GET['product_category']) == true ? ($_GET['product_category'] == 'Salad' ? 'selected':''): '' ?>>Salad</option>
                                                    <option value="Beverage" <?= isset($_GET['product_category']) == true ? ($_GET['product_category'] == 'Beverage' ? 'selected':''): '' ?>>Beverage</option>
                                                    <option value="Tacos" <?= isset($_GET['product_category']) == true ? ($_GET['product_category'] == 'Tacos' ? 'selected':''): '' ?>>Tacos</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <select name="veg_non_veg" class="form-select">
                                                    <option value="">Veg/Non-Veg Filter</option>
                                                    <option value="Veg"<?= isset($_GET['veg_non_veg']) == true ? ($_GET['veg_non_veg'] == 'Veg' ? 'selected':''): '' ?>>Veg</option>
                                                    <option value="Non-Veg"<?= isset($_GET['veg_non_veg']) == true ? ($_GET['veg_non_veg']=='Non-Veg' ? 'selected':''): '' ?>>Non-Veg</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <select name="topping_name" class="form-select">
                                                    <option value="">Topping Name</option>
                                                    <option value="Mozzarella" <?= isset($_GET['topping_name']) == true ? ($_GET['topping_name'] == 'Mozzarella' ? 'selected':''): '' ?> >Mozzarella</option>
                                                    <option value="Tomatoes" <?= isset($_GET['topping_name']) == true ? ($_GET['topping_name'] == 'Tomatoes' ? 'selected':''): '' ?>>Tomatoes</option>
                                                    <option value="Onions" <?= isset($_GET['topping_name']) == true ? ($_GET['topping_name'] == 'Onions' ? 'selected':''): '' ?>>Onions</option>
                                                    <option value="Olives" <?= isset($_GET['topping_name']) == true ? ($_GET['topping_name'] == 'Olives' ? 'selected':''): '' ?>>Olives</option>
                                                    <option value="Mayonnaise" <?= isset($_GET['topping_name']) == true ? ($_GET['topping_name'] == 'Mayonnaise' ? 'selected':''): '' ?>>Mayonnaise</option>
                                                    <option value="BBQ Sauce" <?= isset($_GET['topping_name']) == true ? ($_GET['topping_name'] == 'BBQ Sauce' ? 'selected':''): '' ?>>BBQ Sauce</option>
                                                    <option value="Garlic Powder" <?= isset($_GET['topping_name']) == true ? ($_GET['topping_name'] == 'Garlic Powder' ? 'selected':''): '' ?>>Garlic Powder</option>
                                                    <option value="Cumin" <?= isset($_GET['topping_name']) == true ? ($_GET['topping_name'] == 'Cumin' ? 'selected':''): '' ?>>Cumin</option>
                                                </select>
                                            </div>
                                            
                                            <div class="col-md-4">
                                            <button type="submit" class="btn btn-primary">Filter</button>
                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered table-centered mb-0" id="myTable">
                                <thead>
                                    <tr>
                                        <!-- <th style="min-width: 10px">#</th> -->
                                        <!-- <th>Product_id</th> -->
                                        <th>Product_name</th>
                                        <th>Product_description</th>
                                        <th>Product_category</th>
                                        <th>veg_non_veg</th>
                                        <th>topping_name</th>
                                        <th>group_name</th>
                                        <!-- <th class="text-center" colspan="2">Action</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $con = mysqli_connect("localhost", "root", "", "testapp");
                                        if (isset($_GET['searchall'])  ){
                                            $filtervalues = $_GET['searchall']  ;
                                            $query = "SELECT * FROM merged WHERE CONCAT(product_name,product_description,product_category,veg_non_veg,topping_name,group_name) LIKE '%$filtervalues%' ";
                                            $query_run = mysqli_query($con, $query);
                                        
                                        
                                            
                                            if(mysqli_num_rows($query_run)>0){
                                                foreach($query_run as $items){
                                                    ?>
                                                    <tr>
                                                        <td><?= $items['product_name'];?></td>
                                                        <td><?= $items['product_description'];?></td>
                                                        <td><?= $items['product_category'];?></td>
                                                        <td><?= $items['veg_non_veg'];?></td>
                                                        <td><?= $items['topping_name'];?></td>
                                                        <td><?= $items['group_name'];?></td>
                                                    </tr>

                                                    <?php
                                                }

                                            }else{
                                                ?>
                                                <tr>
                                                    <td colspan="6">No Record Found</td>
                                                </tr>
                                            <?php
                                            }
                                        }
                                        if(isset($_GET['veg_non_veg']) && isset($_GET['topping_name']) && isset($_GET['product_category'])){
                                            
                                            $vegnonveg = $_GET['veg_non_veg']  ;
                                            $topping_name = $_GET['topping_name']  ;
                                            $product_category = $_GET['product_category'] ;
                                            $abc = mysqli_query($con, "SELECT * FROM merged WHERE veg_non_veg = '$vegnonveg' AND topping_name = '$topping_name' AND product_category ='$product_category' ");

                                             if(mysqli_num_rows($abc)>0){
                                                 foreach($abc as $items){
                                                     ?>
                                                        <tr>
                                                         <td><?= $items['product_name'];?></td>
                                                         <td><?= $items['product_description'];?></td>
                                                         <td><?= $items['product_category'];?></td>
                                                         <td><?= $items['veg_non_veg'];?></td>
                                                         <td><?= $items['topping_name'];?></td>
                                                         <td><?= $items['group_name'];?></td>
                                                     </tr>

                                                     <?php
                                                 }

                                             }else{
                                                ?>
                                                <tr>
                                                    <td colspan="6">No Record Found</td>
                                                </tr>
                                            <?php
                                            //  $query_run = mysqli_query($con, "SELECT * FROM merged");
                                         }
                                         }
                                        
                                        
                                    ?>
                                    




                                    
                                    
                                    
                                    
                                    
                                    <!-- <?php if(!empty($result)){
                                        $i =1;
                                        foreach ($result as $row){
                                        
                                        ?>
                                    <tr>
                                        <td><?= $i ?></td>
                                        
                                        <td><?php echo $row->product_name ?></td>
                                        <td><?php echo $row->product_description ?></td>
                                        <td><?php echo $row->product_category ?></td>
                                        <td><?php echo $row->veg_non_veg ?></td>
                                        <td><?php echo $row->topping_name ?></td>
                                        <td><?php echo $row->group_name ?></td>
                                    </tr>
                                    <?php $i++;
                                    }
                                } ?> -->

                                </tbody>
                            </table>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>