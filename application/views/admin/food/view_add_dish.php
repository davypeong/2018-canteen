<<<<<<< HEAD
<style>
	.jumbotron{
		box-shadow:  0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    background-color:#009688;
	}
</style>
=======

>>>>>>> 1e2833f40c86d0c71a1a2353a5558f8820f77fb9
<div class="app-content">
	  <div class="app-title">
        <div>
            <h1><i class="fa fa-dashboard"></i>Form to create new dish</h1>
            <p>This application is very useful for admin and finance to manage their needs.</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo base_url() ?>admin/food/listDish"><span class="mdi mdi-arrow-left-bold-circle-outline" style="font-size: 20px;"></span>&nbsp;&nbsp;List of dishes</a></li>
        </ul>
  </div>
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-8" >
			<div class="jumbotron">
			<h2 class="text-center text-success">Add New Dish</h2>
	
			<form action="<?php echo base_url();?>addDish/insert_dish" enctype="multipart/form-data" method="POST">		
		<!-- 	<?php //echo form_open_multipart('addDish/insert_dish');?>  -->
			    <div class="form-group">
			      <label for="email">Dish Name:</label>
<<<<<<< HEAD
			      <input type="text" class="form-control" name="dishName" placeholder="Enter dish name " required >
			    </div>
			    <div class="form-group">
			      <label for="email">Meal Time</label>
			      <select name="mealtime" class="form-control">
			      	<?php 
			      		foreach ($mealTime as $value) {
			       	?>
			      	<option value="<?php echo $value->time_id ?>"><?php echo $value->name ?></option>
			      	<?php } ?>
			      </select>
=======
			      <input type="text" class="form-control" name="dishname" placeholder="Enter dish name " required >
>>>>>>> 1e2833f40c86d0c71a1a2353a5558f8820f77fb9
			    </div>

			    <div class="form-group">
			      <label for="pwd">Dish Image:</label>
			      <input type="file" class="form-control" name="imagename" required placeholder="Enter password">
			      <p><?php echo $error_msg ?></p> 
			    </div>

			    <div class="form-group">
			      <label for="pwd">Dish Description:</label>
			      <input type="text" class="form-control" name="dishdescription" required placeholder="Enter dish's description">
			    </div>

			    <div class="form-group">
			      <label for="pwd">Dish Date:</label>
			      <input type="date" class="form-control" name="dishdate" required placeholder="Choose add date">
			    </div>
			    <br>
			    <a href="<?php echo base_url() ?>admin/food/listDish" class="btn btn-danger float-left" ><i class="mdi mdi-cancel"></i>&nbsp;Cancel</a>
			    <button type="submit" class="btn btn-warning float-right" value="upload"><i class="mdi mdi-plus-circle-outline"></i>&nbsp;Add Dish</button>
			</form>
		</div>
		</div>
		<div class="col-md-2"></div>
