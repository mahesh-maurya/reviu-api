
<div class="row">
	<div class="col-lg-12">
		<section class="panel">
			<header class="panel-heading">
                Details
                <style>
                    tr
                    {
                    text-align:center;
                    }
                    th
                    {
                    text-align:center;
                    }
</style>
            </header>
            <div class="row">
               <div class="col-lg-3">
                   
               </div>
               <div class="col-lg-6">
                   <table class="table table-striped table-hover" id="" cellpadding="0" cellspacing="0" >
                        <tr>
                            <th>First Name</th>
                            <th></th>
                            <th>Last Name</th>
                        </tr>
                        <tr>
                            <td><?php echo $user->firstname;?></td>
                            <td></td>
                            <td><?php echo $user->lastname; ?></td>
                        </tr>
                        <tr>
                            <th></th>
                            <th>Email</th>
                            <th></th>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td><?php echo $user->email; ?></td>
                            <td>&nbsp;</td>
                        </tr>
                          <tr>
                            <th></th>
                            <th>Hashed Id</th>
                            <th></th>
                        </tr>
                        <tr>
                            <td></td>
                            <td><?php echo $user->hashid;?></td>
                            <td></td>
                        </tr>
                          <tr>
                            <th></th>
                            <th>Code to be insert</th>
                            <th></th>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td><?php echo base64_decode($user->iframecode);?></td>
                            <td>&nbsp;</td>
                        </tr>
                          
                    </table>
               </div>
               <div class="col-lg-3">
                   
               </div>
                
            </div>
            
			
		</section>
	</div>
  </div>
