<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Master Emp Add</h3>
            </div>
            <?php echo form_open('master_emp/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="me_fname" class="control-label"><span class="text-danger">*</span>Fname</label>
						<div class="form-group">
							<input type="text" name="me_fname" value="<?php echo $this->input->post('me_fname'); ?>" class="form-control" id="me_fname" />
							<span class="text-danger"><?php echo form_error('me_fname');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="me_lname" class="control-label"><span class="text-danger">*</span>Lname</label>
						<div class="form-group">
							<input type="text" name="me_lname" value="<?php echo $this->input->post('me_lname'); ?>" class="form-control" id="me_lname" />
							<span class="text-danger"><?php echo form_error('me_lname');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="me_email" class="control-label">Email</label>
						<div class="form-group">
							<input type="text" name="me_email" value="<?php echo $this->input->post('me_email'); ?>" class="form-control" id="me_email" />
							<span class="text-danger"><?php echo form_error('me_email');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="me_mobile" class="control-label"><span class="text-danger">*</span>Mobile</label>
						<div class="form-group">
							<input type="text" name="me_mobile" value="<?php echo $this->input->post('me_mobile'); ?>" class="form-control" id="me_mobile" />
							<span class="text-danger"><?php echo form_error('me_mobile');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="me_salary" class="control-label"><span class="text-danger">*</span>Salary</label>
						<div class="form-group">
							<input type="text" name="me_salary" value="<?php echo $this->input->post('me_salary'); ?>" class="form-control" id="me_salary" />
							<span class="text-danger"><?php echo form_error('me_salary');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="me_company" class="control-label">Company</label>
						<div class="form-group">
							<input type="text" name="me_company" value="<?php echo $this->input->post('me_company'); ?>" class="form-control" id="me_company" />
							<span class="text-danger"><?php echo form_error('me_company');?></span>
						</div>
					</div>

					<div class="col-md-6">
						<label for="me_dept_id" class="control-label"><span class="text-danger">*</span>Dept</label>
						<div class="form-group">
							<select name="me_dept_id" class="form-control">
								<option value="">select</option>
								<?php 
								$me_dept_id_values = array(
									'IT'=>'IT',
									'Finance'=>'Finance',
									'Human Resource'=>'Human Resource',
									'Accounts'=>'Accounts',
									'Marketing'=>'Marketing',
								);

								foreach($me_dept_id_values as $value => $display_text)
								{
									$selected = ($value == $this->input->post('me_dept_id')) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('me_dept_id');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="me_country" class="control-label"><span class="text-danger">*</span>Country</label>
						<div class="form-group">
							<select name="me_country" class="form-control">
								<option value="">select</option>
								<?php 
								$me_country_values = array(
									'India'=>'India',
									'United Kingdom'=>'United Kingdom',
									'United States'=>'United States',
									'Australia'=>'Australia',
								);

								foreach($me_country_values as $value => $display_text)
								{
									$selected = ($value == $this->input->post('me_country')) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('me_country');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="me_state" class="control-label"><span class="text-danger">*</span>State</label>
						<div class="form-group">
							<select name="me_state" class="form-control">
								<option value="">select</option>
								<?php 
								$me_state_values = array(
									'State 1'=>'State 1',
									'State 2'=>'State 2',
									'State 3'=>'State 3',
								);

								foreach($me_state_values as $value => $display_text)
								{
									$selected = ($value == $this->input->post('me_state')) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('me_state');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="me_city" class="control-label"><span class="text-danger">*</span>City</label>
						<div class="form-group">
							<select name="me_city" class="form-control">
								<option value="">select</option>
								<?php 
								$me_city_values = array(
									'City 1'=>'City 1',
									'City 2'=>'City 2',
									'City 3'=>'City 3',
								);

								foreach($me_city_values as $value => $display_text)
								{
									$selected = ($value == $this->input->post('me_city')) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('me_city');?></span>
						</div>
					</div>
					
					<div class="col-md-6">
						<div class="form-group">
							<label for="me_gender" class="control-label">Gender</label>
							<div class="radio">
							  <label><input type="radio" value="Male" name="me_gender" checked>Male</label> &nbsp;
							  <label><input type="radio" value="Female" name="me_gender">Female</label>
							</div>
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Save
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>