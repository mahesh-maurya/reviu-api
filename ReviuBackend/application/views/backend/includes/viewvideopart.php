<div class=" row" style="padding:1% 0;">

	<div class="col-md-10">
	
</div>
	<div class="col-md-2">
	
		<a class="btn btn-primary pull-right"  href="<?php echo site_url('site/createvideopart?id=').$videoid; ?>"><i class="icon-plus"></i>Create </a> &nbsp; 
	</div>

</div>
<div class="row">
	<div class="col-lg-12">
		<section class="panel">
			<header class="panel-heading">
                Video part Details
            </header>
			<div class="drawchintantable">
                <?php $this->chintantable->createsearch("video part Details");?>
                <table class="table table-striped table-hover" id="" cellpadding="0" cellspacing="0" >
                <thead>
                    <tr>
                        <th data-field="id">Id</th>
                        <th data-field="videoname">video</th>
                        <th data-field="part">part</th>
                        <th data-field="question">question</th>
                        <th data-field="videourl">videourl</th>
					    <th data-field="action"> Actions </th>
                    </tr>
                </thead>
                <tbody>
                   
                </tbody>
                </table>
<!--        <div  onclick="return confirm('Are you sure you want to delete?')" id="delete" class="btn btn-success">Delete Selected</div>-->
                   <?php $this->chintantable->createpagination();?>
            </div>
		</section>
		<script>
            function drawtable(resultrow) {
                if(!resultrow.address)
                {
                    resultrow.address="";
                }
                var deletestring="";
                return "<tr><td>" + resultrow.id + "</td><td>" + resultrow.videoname + "</td><td>" + resultrow.part + "</td><td>" + resultrow.question + "</td><td>" + resultrow.videourl + "</td><td><a class='btn btn-primary btn-xs' href='<?php echo site_url('site/editvideopart?id=');?>"+resultrow.id +"&videoid="+resultrow.videoid+"'><i class='icon-pencil'></i></a><a class='btn btn-danger btn-xs'  onclick=\"return confirm('Are you sure you want to delete?')\" href='<?php echo site_url('site/deletevideopart?id='); ?>"+resultrow.id +"&videoid="+resultrow.videoid+"'><i class='icon-trash '></i></a></td><tr>";
            }
            generatejquery('<?php echo $base_url;?>');
        </script>
	</div>
</div>
