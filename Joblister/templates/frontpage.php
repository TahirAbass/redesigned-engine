<!-- This file is to show the main page. -->
<?php include 'inc/header.php'; ?> 
      <div class="jumbotron">
        <h1>Find Your Career</h1>
        <form method="GET" action="index.php">
            <select name="category" class="form-control">
            <option value="0">Choose your Category</option>
            <?php foreach ($categories as $category): ?>
            <option value="<?php echo $category->id;?>"><?php echo $category->name; ?></option>
            <?php endforeach; ?>
          </select>
          <br>
          <input type="submit" class="btn btn-md btn-success" value="FIND">
        </form>
      </div>
      <h3><?php echo $title;?></h3>
      <?php foreach ($jobs as $job): ?>
      <div class="row marketing">
        <div class="col-md-10"> <!-- page size attribute --> 
          <h4><?php echo $job->company; ?></h4>

      </div>
        <div class="col-md-2">
          <a class="btn btn-danger" href="job.php?id=<?php echo $job->id;?>">View</a>
          
        </div>
      </div>
      <?php endforeach; ?> 
      
<?php include 'inc/footer.php'; ?> 
