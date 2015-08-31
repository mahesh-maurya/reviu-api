<div class=" row" style="padding:1% 0;">

	<div class="col-md-10">
    </div>
	<div class="col-md-2">
	
		<a class="btn btn-primary pull-right"  href="<?php echo site_url('site/createuser'); ?>"><i class="icon-plus"></i>Create </a> &nbsp; 
	</div>
</div>
<div class="row">
	<div class="col-lg-12">
		<section class="panel">
			<header class="panel-heading">
                user Details
            </header>
			<div class="drawchintantable">
                <?php $this->chintantable->createsearch("user Details");?>
                <table class="table table-striped table-hover" id="" cellpadding="0" cellspacing="0" >
                <thead>
                    <tr>
                        <th data-field="id">Id</th>
                        <th data-field="name">name</th>
                        <th data-field="email">email</th>
                        <th data-field="contact">Contact</th>
                        <th data-field="address">Address</th>
                        <th data-field="city">city</th>
                        <th data-field="accesslevel">accesslevel</th>
                        <th data-field="Send Mail">Send Mail</th>
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
//                var btnsendmail="<a href='<?php echo site_url('site/send?id='); ?>"+resultrow.id+"' class='label label-success label-mini'>Confirm</a>";
                var deletestring="";
                return "<tr><td>" + resultrow.id + "</td><td>" + resultrow.firstname + " " + resultrow.lastname + "</td><td>" + resultrow.email + "</td><td>" + resultrow.contact + "</td><td>" + resultrow.address + "</td><td>" + resultrow.city + "</td><td>" + resultrow.accesslevelname + "</td><td><a class='btn btn-primary btn-xs' href='<?php echo site_url('site/edituser?id=');?>"+resultrow.id +"'><i class='icon-pencil'></i></a><a class='btn btn-danger btn-xs'  onclick=\"return confirm('Are you sure you want to delete?')\" href='<?php echo site_url('site/deleteuser?id='); ?>"+resultrow.id +"'><i class='icon-trash '></i></a></td><tr>";
            }
            generatejquery('<?php echo $base_url;?>');
        </script>
	</div>
</div>
