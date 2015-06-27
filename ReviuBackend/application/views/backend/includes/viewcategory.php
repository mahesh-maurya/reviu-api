<div class=" row" style="padding:1% 0;">

	<div class="col-md-10">
    </div>
	<div class="col-md-2">
	
		<a class="btn btn-primary pull-right"  href="<?php echo site_url('site/createcategory'); ?>"><i class="icon-plus"></i>Create </a> &nbsp; 
	</div>
</div>
<div class="row">
	<div class="col-lg-12">
		<section class="panel">
			<header class="panel-heading">
                category Details
            </header>
			<div class="drawchintantable">
                <?php $this->chintantable->createsearch("category Details");?>
                <table class="table table-striped table-hover" id="" cellpadding="0" cellspacing="0" >
                <thead>
                    <tr>
                        <th data-field="id">Id</th>
                        <th data-field="name">name</th>
                        <th data-field="parentname">parentname</th>
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
                if(resultrow.parentname==null)
                {
                resultrow.parentname="";
                }
                return "<tr><td>" + resultrow.id + "</td><td>" + resultrow.name + "</td><td>" + resultrow.parentname + "</td><td><a class='btn btn-primary btn-xs' href='<?php echo site_url('site/editcategory?id=');?>"+resultrow.id +"'><i class='icon-pencil'></i></a><a class='btn btn-danger btn-xs'  onclick=\"return confirm('Are you sure you want to delete?')\" href='<?php echo site_url('site/deletecategory?id='); ?>"+resultrow.id +"'><i class='icon-trash '></i></a></td><tr>";
            }
            generatejquery('<?php echo $base_url;?>');
        </script>
	</div>
</div>












<div class=" row" style="padding:1% 0;">
	<div class="col-md-12">
		<div class=" pull-right col-md-1 createbtn" ><a class="btn btn-primary" href="<?php echo site_url('site/createcategory'); ?>"><i class="icon-plus"></i>Create </a></div>
	</div>
</div>
<div class="row">
	<div class="col-lg-12">
		<section class="panel">
			<header class="panel-heading">
                Category Details
            </header>
			<table class="table table-striped table-hover" id="" cellpadding="0" cellspacing="0" >
			<thead>
				<tr>
					<th>Id</th>
					<th>Name</th>
					<th>Parent</th>
					<th> Actions </th>
				</tr>
			</thead>
			<tbody>
			   <?php foreach($table as $row) { ?>
					<tr>
						<td><?php echo $row->id; ?></td>
						<td><?php echo $row->name; ?></td>
						<td><?php echo $row->parent; ?></td>
						<td> <a class="btn btn-primary btn-xs" href="<?php echo site_url('site/editcategory?id=').$row->id;?>"><i class="icon-pencil"></i></a>
                                      <a class="btn btn-danger btn-xs" href="<?php echo site_url('site/deletecategory?id=').$row->id; ?>"><i class="icon-trash "></i></a>
									 
					  </td>
					</tr>
					<?php } ?>
			</tbody>
			</table>
		</section>
<?php echo $this->pagination->create_links(); ?>
	</div>
  </div>
