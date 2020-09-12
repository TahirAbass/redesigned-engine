<!-- This file will create the job after validating job. -->

<?php include_once 'config/init.php'; ?>

<?php
$job = new Job;
$job_id = isset($_GET['id']) ? $_GET['id'] : null;

if(isset($_POST['submit'])){
	// Creating Data array
	$data = array();
	$data['company'] = $_POST['company'];
	$data['category_id'] = $_POST['category'];
	$data['description'] = $_POST['description'];
	$data['job_url'] = $_POST['job_url'];

	if($job->update($job_id, $data)){
		redirect('index.php', 'Career URL has been udated','success');
	}else {
		redirect('index.php','Something went wrong','error');
	}

}

$template = new Template('templates/job-edit.php');
 $template->job = $job->getJob($job_id);
$template->categories = $job->getCategories();
echo $template;
