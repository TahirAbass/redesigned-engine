<!-- This file is to show the form of job creation.
				sirf form show karaye ga.
 -->

<?php include 'inc/header.php'; ?> 
<h2 class="page-header">Add More Career</h2>
<form method="post" action="create.php">
	<div class="form-group"> 
		<label>Company</label>
		<input type="text" class="form-control" name="company">
	</div>
	<div class="form-group"> 
		<label>Category</label>
		<select class="form-control" name="category">
			<option value="0">Choose your Category</option>
            <?php foreach ($categories as $category): ?>
            <option value="<?php echo $category->id;?>"><?php echo $category->name; ?></option>
            <?php endforeach; ?>
		</select>
	</div>
	<div class="form-group"> 
		<label>Description</label>
		<textarea type="text" class="form-control" name="description">
		</textarea>
	</div>
	<div class="form-group"> 
		<label>Job URL</label>
		<input type="text" class="form-control" name="job_url">
	</div>
	<br>
	<input type="submit" class="btn btn-default" value="Submit" name="submit">
</form>
<br>
<br>
<br>
<?php include 'inc/footer.php'; ?> 