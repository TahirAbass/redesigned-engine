<!-- This file is to display single class after choosing.
	single job show karaye ga	-->

<?php include 'inc/header.php'; ?> 
<h2 class="page-header"><?php echo $job->company; ?></h2>
<hr>
<p class="lead" style="text-align: justify;"><?php echo $job->description; ?></p><br>
<ul class="list-group">
	<li class="list-group-item"><strong>Company URL :</strong> <?php 
          echo preg_replace("#(^|[\n ])(([\w]+?://[\w\#$%&~.\-;:=,?@\[\]+]*)(/[\w\#$%&~/.\-;:=,?@\[\]+]*)?)#is", "\\1<a href=\"\\2\" title=\"\\2\" rel=\"nofollow\">\\2</a>", $job->job_url); ?>
    </li>
</ul>
</hr>
<br>
<a href="index.php">Go Back</a>
<br><br><br>

<div class="well">
		<a href="edit.php?id=<?php echo $job->id; ?>" class="btn btn-default">Edit</a>
		<form style="display:inline;" method="post" action="job.php">
			<input type="hidden" name="del_id" value="<?php echo $job->id;?>">
			<input type="submit" class="btn btn-danger" value="Delete">
</div>
<?php include 'inc/footer.php'; ?> 




