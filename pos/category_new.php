<?php 
	require 'backendheader.php';

?>

	<!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Category </h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Add New Category</h6>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
              <a href="category_list.php" class="btn btn-outline-info" > Go Back </a>
            </div>
        </div>
        <div class="card-body">
            <!-- Action -> သွားမဲ့ filename / METHOD -> GET-POST / ENCTYPE -> photoပါရင် မဖြစ်မနေထည့်ရမယ် -->
            <form action="category_add.php" method="POST" enctype="multipart/form-data">
                <div class="row mb-3">
                    <label for="inputPhoto" class="col-sm-2 col-form-label">Photo</label>
                    <div class="col-sm-10">
                      <input type="file" id="inputPhoto" name="photo">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputName" name="categoryname">
                    </div>
                </div>
                
                <!-- <input type="submit" name="Save" value="Save" class="btn btn-primary"> -->
                <button type="submit" class="btn btn-primary"> 
                    <i class="fas fa-save"></i> Save
                </button>
            </form>
        </div>
    </div>

<?php 
	require 'backendfooter.php';
?>