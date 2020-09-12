<?php include_once 'config/init.php'; ?>

<?php
$job = new Job;
// show catergory in url
$template = new Template('templates/frontpage.php');
$category = isset($_GET['category']) ? $_GET['category'] : null;
if ($category){ 
		$template->jobs = $job->getByCategory($category);
		$template->title = 'Careers in '. $job->getCategory($category)->name . ' Sector';
	 	
} else{
		$template->title = 'All Categories';
		$template->jobs = $job->getAllJobs();
}

$template->categories = $job->getCategories();
echo $template;
