<?php
$job_closing_date = get_field( 'job_closing_date');
$num_jobs = get_field( 'num_jobs');

$job_starting_salary = get_field( 'job_starting_salary');
$job_salary_range = get_field( 'job_salary_range');

$job_work_hours = get_field( 'job_work_hours');
$job_contract = get_field( 'job_contract');
$job_work_time = get_field( 'job_work_time');

$job_apply_email = get_field( 'job_apply_email');	
?>

<div class="panel panel-default vacancy-details" style="width: 100%; margin-bottom: 30px;">
	<div class="panel-heading text-center font-slab-serif caps">Vacancy details</div>
	<table class="table table-bordered">
		<tr>
			<th width="30%">Closing date:</th>
			<td width="70%"><?php echo (empty($job_closing_date)) ? "TBA": date('d/m/Y', strtotime($job_closing_date) ); ?></td>
		</tr>
		<tr>
			<th>Positions available:</th>
			<td><?php echo (empty($num_jobs)) ? " - ":$num_jobs; ?></td>
		</tr>		
		<tr>
			<th>Salary:</th>
			<td><?php echo (empty($job_starting_salary)) ? " - ": $job_starting_salary; ?></td>
		</tr>					
		<tr>
			<th>Working hours:</th> 
			<td><?php echo (empty($job_work_hours)) ? " - ": $job_work_hours; ?></td>
		</tr>	
		<tr>
			<th>Contract:</th>
			<td><?php echo (empty($job_contract)) ? " - ":$job_contract; ?></td>
		</tr>	
		<tr>
			<th>Contracted hours:</th>
			<td><?php echo (empty($job_work_time)) ? " - ":$job_work_time; ?></td>
		</tr>		
			
	</table>
</div>	