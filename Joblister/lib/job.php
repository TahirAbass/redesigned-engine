<?php 
	class Job{
		private $db;

		public function __construct(){
			$this->db = new Database;
		}

	// Get All Jobs
		public function getAllJobs(){
			$this->db->query("SELECT jobs.*, categories.name AS cname 
				FROM jobs
				INNER JOIN categories
				ON jobs.category_id = categories.id
				ORDER BY post_date DESC
				");
			// Assign result set
			$results = $this->db->resultSet();
			return $results;	
		}

	// Get Categories

		public function getCategories(){
			$this->db->query("SELECT * from categories");
	// Assign Result Set
			$results = $this->db->resultSet();

			return $results;
		}

	// Get Job By Category

		public function getByCategory($category){
			$this->db->query("SELECT jobs.*, categories.name AS cname 
				FROM jobs
				INNER JOIN categories
				ON jobs.category_id = categories.id
				WHERE jobs.category_id = $category
				ORDER BY post_date DESC
				");
			// Assign result set
			$results = $this->db->resultSet();
			return $results;	
		}
		// Get Category
		public function getCategory($category_id){
			$this->db->query("SELECT * FROM categories WHERE id = :category_id");  
			$this->db->bind(':category_id',$category_id);

		// Assign Row
			$row = $this->db->single();
			return $row;
		}

		// Get Job
		 public function getJob($id)
		{
			
			$this->db->query("SELECT * FROM jobs WHERE id = :id");  
			$this->db->bind(':id',$id);

		// Assign Row
			$row = $this->db->single();
			return $row;
		
	}

	// Create Job
	public function create($data){
		// Insert Query
			$this->db->query("INSERT INTO jobs(category_id, company, description, job_url)
		VALUES (:category_id,:company,:description,:job_url)");

		// Bind Data
		$this->db->bind(':category_id', $data['category_id']);
		$this->db->bind(':company', $data['company']);
		$this->db->bind('description', $data['description']);
		$this->db->bind('job_url', $data['job_url']);
		//Executing data
		if ($this->db->execute()) {
			return true;
		} else {
			return false;
		}

	}

	// Delete Job

	public function delete($id){
	 	// Insert Query
			$this->db->query("DELETE FROM jobs WHERE id = $id");
		//Executing data
		if ($this->db->execute()) {
			return true;
		} else {
			return false;
		}
	}

	// Update Job
	public function update($id, $data){
		// Insert Query
			$this->db->query("UPDATE `jobs` SET
				`category_id`= :category_id,
				`company`= :company,
				`description`= :description,
				`job_url`= :job_url
				 WHERE id = $id");

		// Bind Data
		$this->db->bind(':category_id', $data['category_id']);
		$this->db->bind(':company', $data['company']);
		$this->db->bind('description', $data['description']);
		$this->db->bind('job_url', $data['job_url']);
		//Executing data
		if ($this->db->execute()) {
			return true;
		} else {
			return false;
		}

	}



}