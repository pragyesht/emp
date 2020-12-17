<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Master Emps Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('master_emp/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                    <button name="create_excel" id="create_excel" class="btn btn-success btn-sm">Create Excel File</button>  
                </div>
            </div>
            <div class="box-body" id="employee_table">
                <table class="table table-striped">
                    <tr>
						<th>Sr.</th>
						<th>Name</th>
						<th>Email</th>
						<th>Mobile</th>
						<th>City</th>
						<th>Dept</th> 
						<th>Country</th>
						<th>State</th>
						<th>Actions</th>
                    </tr>
                    <?php $i=0; foreach($master_emps as $m){ $i++;?>
                    <tr>
						<td><?php echo $i; ?></td>
						<td><?php echo $m['me_fname']. ' '. $m['me_lname']; ?></td>
						<td><?php echo $m['me_email']; ?></td>
						<td><?php echo $m['me_mobile']; ?></td>
						<td><?php echo $m['me_city']; ?></td>
						<td><?php echo $m['me_dept_id']; ?></td>
						<td><?php echo $m['me_country']; ?></td>
						<td><?php echo $m['me_state']; ?></td>
						<td>
                            <a href="<?php echo site_url('master_emp/edit/'.$m['me_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('master_emp/remove/'.$m['me_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                <div class="pull-right">
                    <?php echo $this->pagination->create_links(); ?>                    
                </div>                
            </div>
        </div>
    </div>
</div>
<script>  
 $(document).ready(function(){  
      $('#create_excel').click(function(){  
      		var pathname = window.location.pathname;
      		var search = window.location.search;
           	var page = "<?php echo site_url('excel/emp')?>?data=" + pathname + search;  
           	window.open (page, '_blank');  
      });  
 });  
 </script>  