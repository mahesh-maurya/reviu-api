	    <section class="panel">
		    <header class="panel-heading">
				 Videopart Details
			</header>
			<div class="panel-body">
			  <form class="form-horizontal tasi-form" method="post" action="<?php echo site_url('site/editvideopartbyoperatorsubmit');?>">
				<input type="hidden" id="normal-field" class="form-control" name="id" value="<?php echo set_value('id',$beforevideopart->id);?>" style="display:none;">
				
				<div class=" form-group" style="display:none;">
				  <label class="col-sm-2 control-label">Video</label>
				  <div class="col-sm-4">
					<?php
						
						echo form_dropdown('video',$video,set_value('video',$beforevideopart->video),'class="chzn-select form-control" 	data-placeholder="Choose a video..."');
					?>
				  </div>
				</div>
				
				<div class=" form-group">
				  <label class="col-sm-2 control-label" for="normal-field">Part</label>
				  <div class="col-sm-4">
					<input type="number" id="normal-field" class="form-control" name="part" value="<?php echo set_value('part',$beforevideopart->part);?>">
				  </div>
				</div>
				<div class=" form-group">
				  <label class="col-sm-2 control-label" for="normal-field">Question</label>
				  <div class="col-sm-4">
				  <textarea name="question" id="" cols="20" rows="10" class="form-control tinymce"><?php echo set_value('question',$beforevideopart->question);?></textarea>
				  </div>
				</div>
				
				<div class=" form-group">
				  <label class="col-sm-2 control-label" for="normal-field">Video Url</label>
				  <div class="col-sm-4">
					<input type="text" id="normal-field" class="form-control" name="videourl" value="<?php echo set_value('videourl',$beforevideopart->videourl);?>">
				  </div>
				</div>
				
				<div class=" form-group">
				  <label class="col-sm-2 control-label">Status</label>
				  <div class="col-sm-4">
					<?php
						
						echo form_dropdown('status',$status,set_value('status',$beforevideopart->status),'class="chzn-select form-control" 	data-placeholder="Choose a Status..."');
					?>
				  </div>
				</div>
				
				
				<div class=" form-group">
				  <label class="col-sm-2 control-label">&nbsp;</label>
				  <div class="col-sm-4">
				  <button type="submit" class="btn btn-primary">Save</button>
				  <a href="<?php echo site_url('site/viewvideopartbyoperator?id=').$videoid; ?>" class="btn btn-secondary">Cancel</a>
				</div>
				</div>
			  </form>
			</div>
		</section>
