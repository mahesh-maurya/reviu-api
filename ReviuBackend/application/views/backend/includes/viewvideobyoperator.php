<div class=" row" style="padding:1% 0;">

	<div class="col-md-10">
	
</div>
	<div class="col-md-2">
	
		<a class="btn btn-primary pull-right"  href="<?php echo site_url('site/createvideobyoperator'); ?>"><i class="icon-plus"></i>Create </a> &nbsp; 
	</div>
	
	
<!--
	<div class="col-md-2">
	<div id="delete" class="btn btn-success">Delete Selected</div>
	</div>
-->
</div>
<div class="row">
	<div class="col-lg-12">
		<section class="panel">
			<header class="panel-heading">
                Video Details
            </header>
			<div class="drawchintantable">
                <?php $this->chintantable->createsearch("video Details");?>
                <table class="table table-striped table-hover" id="" cellpadding="0" cellspacing="0" >
                <thead>
                    <tr>
                        <th data-field="id">Id</th>
                        <th data-field="title">Title</th>
                        <th data-field="description">Description</th>
                        <th data-field="username">User</th>
                        <th data-field="lat">Latitude</th>
                        <th data-field="long">Longitude</th>
                        <th data-field="url">URL</th>
<!--					<td><i class=" icon-edit"></i>Status</td>-->
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
                return "<tr><td>" + resultrow.id + "</td><td>" + resultrow.title + "</td><td>" + resultrow.description + "</td><td>" + resultrow.username + "</td><td>" + resultrow.lat + "</td><td>" + resultrow.long + "</td><td>" + resultrow.url + "</td><td><a class='btn btn-primary btn-xs' href='<?php echo site_url('site/editvideobyoperator?id=');?>"+resultrow.id +"'><i class='icon-pencil'></i></a><a class='btn btn-danger btn-xs'  onclick=\"return confirm('Are you sure you want to delete?')\" href='<?php echo site_url('site/deletevideobyoperator?id='); ?>"+resultrow.id +"'><i class='icon-trash '></i></a></td><tr>";
            }
            generatejquery('<?php echo $base_url;?>');
        </script>
	</div>
</div>
