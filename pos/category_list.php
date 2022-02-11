<?php 
	require 'backendheader.php';
    require 'connection.php';

    $sql = "SELECT * FROM categories ORDER BY name";
    $statement = $pdo->prepare($sql);
    $statement->execute();

    $categories = $statement->fetchAll();

?>

	<!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Category </h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">All Lists</h6>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
              <a href="category_new.php" class="btn btn-outline-info" >Add New</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Photo</th>
                            <th> Action </th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Photo</th>
                            <th> Action </th>
                        </tr>
                    </tfoot>
                    <tbody>

                        <?php 
                            $i = 1;
                            foreach($categories as $category){
                            $id = $category['id'];
                            $logo = $category['logo'];
                            $name = $category['name'];
                        ?>
                    	<tr>
                            <td> <?php echo $i++; ?> . </td>
                    		<td> <?php echo $name; ?> </td>
                    		<td> <img src="<?= $logo; ?>" class="w-25"> </td>
                    		<td>
                    			<a href="" class="btn btn-outline-warning"> 
                    				<i class="far fa-edit"></i> Edit 
                    			</a>

                    			<a href="" class="btn btn-outline-danger"> 
                    				<i class="fas fa-times"></i> Remove 
                    			</a>
                    		</td>
                    	</tr>

                        <?php } ?>

                    </tbody>


                </table>
            </div>
        </div>
    </div>

<?php 
	require 'backendfooter.php';
?>