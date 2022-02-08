<?php 
	require 'backendheader.php';
?>

	<!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Category </h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">All Lists</h6>
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
                    	<tr>
                    		<td> 1. </td>
                    		<td> Fashion </td>
                    		<td> <img src=""> </td>
                    		<td>
                    			<a href="" class="btn btn-outline-warning"> 
                    				<i class="far fa-edit"></i> Edit 
                    			</a>

                    			<a href="" class="btn btn-outline-danger"> 
                    				<i class="fas fa-times"></i> Remove 
                    			</a>
                    		</td>
                    	</tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?php 
	require 'backendfooter.php';
?>