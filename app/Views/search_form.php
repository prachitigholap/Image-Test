<!DOCTYPE html>
<html lang="en">


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <title>Food App</title>
</head>


<body>
    
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <div class="my-3 text-center">
                    <h4>Food App for Test
                        <hr class="text-denger">
                    </h4>
                </div>
                <div class="card rounded">
                    <div class="card-body">
                        <div class="row mb-2">
                        <div class="col-sm-4">
                                <div class="text-sm-end">
                                    <div class="input-group">
                                        <!-- <form action="" method="GET"> -->
                                        <form method="post" action="<?= site_url('FormController/search') ?>">
                                            <input type="text" name="product_name" placeholder="Search by name...">
                                            <button type="submit" class="btn btn-primary">Filter</button>
                                        </form>
                                    
                                    </div>
                                </div>
                        </div>
                        </div>
                    
                        <div class="table-responsive">
                            <table class="table table-bordered table-centered mb-0">
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


                        

                        <?php if (!empty($data)) : ?>
                            <?php foreach ($data as $row) : ?>
                                <tr>
                                <td><?= $row->product_name ?></td>
                                <td><?= $row->product_description ?></td>   
                                <td><?= $row->product_category ?></td>   
                                <td><?= $row->veg_non_veg ?></td>   
                                <td><?= $row->topping_name ?></td>  
                                <td><?= $row->group_name ?></td>  
                                </tr>
                                
                                    <?php endforeach; ?>
                                    <?php else : ?>
                                    <p>No results found.</p>
                                    <?php endif; ?>
                                </tr>

                                </tbody>
                            </table>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>