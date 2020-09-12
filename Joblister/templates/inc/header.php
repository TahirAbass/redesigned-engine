<!DOCTYPE html>
<html>


<head>
	<title>Job lister</title>
	<link rel="stylesheet" href="sources/bootswatch.min.css"> <!-- Source got from the project directory --> 
	<link rel="stylesheet" href="css/styles.css"> 
</head>
<body>

	<div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-left">
            <li role="presentation" class="active"><a href="index.php">Home</a></li>
            <li role="presentation"><a href="create.php">Create Listing</a></li>
             
          </ul>
        </nav>
        <h3 class="text-muted pull-right"><?php echo SITE_TITLE; ?></h3>
      </div>
<?php displayMessage(); ?>