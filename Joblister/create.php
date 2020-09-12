<!-- This file will create the job after validating job. -->

<?php include_once 'config/init.php'; ?>

<?php
$job = new Job;

if(isset($_POST['submit'])){
	// Creating Data array
	$data = array();
	$data['company'] = $_POST['company'];
	$data['category_id'] = $_POST['category'];
	$data['description'] = $_POST['description'];
	$data['job_url'] = $_POST['job_url'];

	if($job->create($data)){
		redirect('index.php', 'Career URL has been added','success');
	}else {
		redirect('index.php','Something went wrong','error');
	}

}

$template = new Template('templates/job-create.php');

$template->categories = $job->getCategories();
echo $template;
