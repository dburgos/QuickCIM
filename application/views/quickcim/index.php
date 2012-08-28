<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?=$this->lang->line('quickcim_title').' - '.$this->lang->line('quickcim_subtitle')?></title>
	<link href='http://fonts.googleapis.com/css?family=Iceland' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="css/quickcim.css" />
</head>
<body>
	<?php 
	$this->load->view('quickcim/header');?>
	<section class="container">
		<div class="row">
			<?php 
			$this->load->view('quickcim/connection');
			$this->load->view('quickcim/tables');
			$this->load->view('quickcim/output');
			?>
		</div>
	</section>
	<script>
		// Required by Bootstrap JS Tooltip for multilanguage  
		var classname_title_txt = "<?=$this->lang->line('quickcim_tables_classname_title')?>";
		var classname_content_txt = "<?=$this->lang->line('quickcim_tables_classname_content')?>";
	</script>
	<script src="lib/jquery-1.7.2.min.js"></script>
	<script src="lib/underscore-min.js"></script>
	<script src="lib/backbone-min.js"></script>
	<script src="lib/bootstrap.min.js"></script>
	<script src="js/utils.js"></script>
	<script src="js/views/connection.js"></script>
	<script src="js/views/tableControls.js"></script>
	<script src="js/views/output.js"></script>
	<script src="js/main.js"></script>
</body>
</html>
