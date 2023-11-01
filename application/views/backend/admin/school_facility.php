<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
        	<div class="panel-heading">
            	<div class="panel-title" >
            		<i class="entypo-plus-circled"></i>
					<?php echo ('Add Home Form');?>
            	</div>
            </div>
			<div class="panel-body">
				
                <?php echo form_open(base_url() . 'index.php?admin/student/create/' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo ('Select Facility');?></label>
                        
						<div class="col-sm-5">
							<select name="facility" class="form-control">
                              <option value=""><?php echo ('Select SchoolFacility');?></option>
                              <option value="schoolBus"><?php echo ('SchoolBus');?></option>
                              <option value="playground"><?php echo ('Playground');?></option>
                              <option value="healthcenter"><?php echo ('HealthCenter');?></option>
                              <option value="positivelearning"><?php echo ('PositiveLearning');?></option>
                            </select>
						</div> 
					</div>
					
					<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo ('Facility Information');?></label>
                        
						<div class="col-sm-5">
							<!-- <input type="text" class="form-control" name="address" value="" > -->
						<textarea name="" id="" cols="63" rows="4" placeholder="Enter Selected Facility Information"></textarea>
                        </div> 
					</div>
                    <div class="form-group">
						<div class="col-sm-offset-3 col-sm-5">
							<button type="submit" class="btn btn-info"><?php echo ('Save');?></button>
						</div>
					</div>
                <?php echo form_close();?>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">

	function get_class_sections(class_id) {

    	$.ajax({
            url: '<?php echo base_url();?>index.php?admin/get_class_section/' + class_id ,
            success: function(response)
            {
                jQuery('#section_selector_holder').html(response);
            }
        });

    }

</script>