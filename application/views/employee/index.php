	



<div class="container">
	<h3>Cariton</h3>
	<div class="alert alert-success" style="display: none;">
		
	</div>
		<button id="showAdmin" class="btn btn-success">Admin</button>
	<button id="showUser" class="btn btn-success">User</button>
	
	<br>
	<br>
	<div id='admin'>
	<h1>Admin</h1>
	<button id="btnAdd" class="btn btn-success">Add New</button>
	<table class="table table-bordered table-responsive" style="margin-top: 20px;">
		<thead>
			<tr>
					<td>Product ID</td>
				<td>Product Name</td>
				<td>Price</td>
				<td>Stocks</td>
				<td>Action</td>
			</tr>
		</thead>
		<tbody id="showdata">
			
		</tbody>
	</table>
</div>

<div id="myModal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Modal title</h4>
      </div>
     <div class="modal-body">
        	<form id="myForm" action="" method="post" class="form-horizontal">
        		<input type="hidden" name="txtId" value="0">
				<input type="hidden" name="Stockings" class="form-control">

        		<div class="form-group" id='rName'>
        			<label for="name" class="label-control col-md-4">Product Name</label>
        			<div class="col-md-8">
        				<input type="text" name="txtEmployeeName" class="form-control">
        			</div>
        		</div>
        		<div class="form-group" id='rPrice'>
        			<label for="address" class="label-control col-md-4">Price</label>
        			<div class="col-md-8">
        				<textarea class="form-control" name="txtAddress"></textarea>
        			</div>
        		</div>
        			<div class="form-group" id='rStocks'>
        			<label for="name" class="label-control col-md-4">Stocks</label>
        			<div class="col-md-8">
        				<input type="text" name="txtStocks" class="form-control">
        			</div>
        		</div>

        			<div class="form-group" id='name' style='display:none;'>
        			<label for="name" class="label-control col-md-4">Name</label>
        			<div class="col-md-8">
        				<input type="text" name="name"  class="form-control" disabled>
        			</div>
        		</div>

        			<div class="form-group" id='price' style='display:none;'>
        			<label for="name" class="label-control col-md-4">Price</label>
        			<div class="col-md-8">
        				<input type="text" name="price"  class="form-control" disabled>
        			</div>
        		</div>

        			<div class="form-group" id='txtQuantity' style='display:none;'>

        			<label for="name" class="label-control col-md-4">Quantity:</label>
        			<div class="col-md-8">
        				<input type="text" name="txtQuantity"  class="form-control">
        			</div>
        		</div>
        	</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" id="btnSave" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



<div id="myModal2" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Modal title</h4>
      </div>
     <div class="modal-body">
        	<form id="myForm" action="" method="post" class="form-horizontal">
        		<input type="hidden" name="txtId" value="0">
        		<div class="form-group">
        			<label for="name" class="label-control col-md-4">Product Name</label>
        			<div class="col-md-8">
        				<input type="text" name="txtEmployeeName" class="form-control">
        			</div>
        		</div>
        		<div class="form-group">
        			<label for="address" class="label-control col-md-4">Price</label>
        			<div class="col-md-8">
        				<textarea class="form-control" name="txtAddress"></textarea>
        			</div>
        		</div>
        			<div class="form-group">
        			<label for="name" class="label-control col-md-4">Stocks</label>
        			<div class="col-md-8">
        				<input type="text" name="txtStocks" class="form-control">
        			</div>
        		</div>
        	</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" id="btnSave" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



<div id="deleteModal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Confirm Delete</h4>
      </div>
      <div class="modal-body">
        	Do you want to delete this record?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" id="btnDelete" class="btn btn-danger">Delete</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<div id='user' style='display:none;'>
<h1>User</h1>
	<table class="table table-bordered table-responsive" style="margin-top: 20px;">
		<thead>
			<tr>
				<td>Product ID</td>
				<td>Product Name</td>
				<td>Price</td>
				<td>Stocks</td>
				<td>Action</td>
			</tr>
		</thead>
		<tbody id="showdata2">
			
		</tbody>
	</table>

</div>

<script>
	$(function(){
		showAllEmployee();
		showAllEmployee2();



	$('#showAdmin').click(function(){
			$('#admin').show();
			$('#user').hide();
		;
		});

		$('#showUser').click(function(){
			$('#admin').hide();
			$('#user').show();


		;
		});


		//Add New
		$('#btnAdd').click(function(){
			$('#myModal').modal('show');
			$('#myModal').find('.modal-title').text('Add New Employee');
			$('#myForm').attr('action', '<?php echo base_url() ?>employee/addEmployee');
		});


		$('#btnSave').click(function(){
			var url = $('#myForm').attr('action');
			var data = $('#myForm').serialize();
			//validate form
			var empoyeeName = $('input[name=txtEmployeeName]');
			var address = $('textarea[name=txtAddress]');
			var result = '';
			if(empoyeeName.val()==''){
				empoyeeName.parent().parent().addClass('has-error');
			}else{
				empoyeeName.parent().parent().removeClass('has-error');
				result +='1';
			}
			if(address.val()==''){
				address.parent().parent().addClass('has-error');
			}else{
				address.parent().parent().removeClass('has-error');
				result +='2';
			}

			if(result=='12'){
				$.ajax({
					type: 'ajax',
					method: 'post',
					url: url,
					data: data,
					async: false,
					dataType: 'json',
					success: function(response){
						if(response.success){
							$('#myModal').modal('hide');
							$('#myForm')[0].reset();
							if(response.type=='add'){
								var type = 'added'
							}else if(response.type=='update'){
								var type ="updated"
							}
							$('.alert-success').html('Employee '+type+' successfully').fadeIn().delay(4000).fadeOut('slow');
							showAllEmployee();
							showAllEmployee2();
						}else{
							alert('Notthings Edited');
						}
					},
					error: function(){
						alert('Could not add data');
					}
				});
			}
		});

		//edit
		$('#showdata').on('click', '.item-edit', function(){
			var id = $(this).attr('data');
			$('#myModal').modal('show');
			$('#myModal').find('.modal-title').text('Edit Employee');
			$('#myForm').attr('action', '<?php echo base_url() ?>employee/updateEmployee');
			$.ajax({
				type: 'ajax',
				method: 'get',
				url: '<?php echo base_url() ?>employee/editEmployee',
				data: {id: id},
				async: false,
				dataType: 'json',
				success: function(data){
					$('input[name=txtEmployeeName]').val(data.employee_name);
					$('textarea[name=txtAddress]').val(data.address);
					$('input[name=txtId]').val(data.id);
					$('input[name=txtStocks]').val(data.created_at);
				}
			});
		});

		//delete- 
		$('#showdata').on('click', '.item-delete', function(){
			var id = $(this).attr('data');
			$('#deleteModal').modal('show');
			//prevent previous handler - unbind()
			$('#btnDelete').unbind().click(function(){
				$.ajax({
					type: 'ajax',
					method: 'get',
					async: false,
					url: '<?php echo base_url() ?>employee/deleteEmployee',
					data:{id:id},
					dataType: 'json',
					success: function(response){
						if(response.success){
							$('#deleteModal').modal('hide');
							$('.alert-success').html('Employee Deleted successfully').fadeIn().delay(4000).fadeOut('slow');
							showAllEmployee();
						}else{
							alert('Error');
						}
					},
					error: function(){
						alert('Error deleting');
					}
				});
			});
		});



		//function
		function showAllEmployee(){
			$.ajax({
				type: 'ajax',
				url: '<?php echo base_url() ?>employee/showAllEmployee',
				async: false,
				dataType: 'json',
				success: function(data){
					var html = '';
					var i;
					for(i=0; i<data.length; i++){
						html +='<tr>'+
									'<td>'+data[i].id+'</td>'+
									'<td>'+data[i].employee_name+'</td>'+
									'<td>'+data[i].address+'</td>'+
									'<td>'+data[i].created_at+'</td>'+
									'<td>'+
										'<a href="javascript:;" class="btn btn-info item-edit" data="'+data[i].id+'">Edit</a>'+
										'<a href="javascript:;" class="btn btn-danger item-delete" data="'+data[i].id+'">Delete</a>'+
									'</td>'+
							    '</tr>';
					}
					$('#showdata').html(html);
				},
				error: function(){
					alert('Could not get Data from Database');
				}
			});
		}




				function showAllEmployee2(){
			$.ajax({
				type: 'ajax',
				url: '<?php echo base_url() ?>employee/showAllEmployee',
				async: false,
				dataType: 'json',
				success: function(data){
					var html = '';
					var i;
					for(i=0; i<data.length; i++){
						html +='<tr>'+
									'<td>'+data[i].id+'</td>'+
									'<td>'+data[i].employee_name+'</td>'+
									'<td>'+data[i].address+'</td>'+
									'<td>'+data[i].created_at+'</td>'+
									'<td>'+
										'<a href="javascript:;" class="item-edit2" data="'+data[i].id+'">Add to Cart</a>'+
									
									'</td>'+
							    '</tr>';
					}
					$('#showdata2').html(html);
				},
				error: function(){
					alert('Could not get Data from Database');
				}
			});
		}


	$('#showdata2').on('click', '.item-edit2', function(){
			var id = $(this).attr('data');
			$('#txtQuantity').show();

			$('#name').show();
			$('#price').show();

			$('#rName').hide();
			$('#rPrice').hide();
			$('#rStocks').hide();


			$('#myModal').modal('show');
			$('#myModal').find('.modal-title').text('Edit Employee');
			$('#myForm').attr('action', '<?php echo base_url() ?>employee/updateEmployee');
			$.ajax({
				type: 'ajax',
				method: 'get',
				url: '<?php echo base_url() ?>employee/editEmployee',
				data: {id: id},
				async: false,
				dataType: 'json',
				success: function(data){
					//$('input[name=txtEmployeeName]').val(data.employee_name);
					//$('textarea[name=txtAddress]').val(data.address);
					$('input[name=txtId]').val(data.id);
					$('input[name=txtStocks]').val(data.created_at);

					$('input[name=name]').val(data.employee_name);
					$('input[name=price]').val(data.address);

					$('input[name=Stockings]').val(data.address);

				},
				error: function(){
					alert('Could not Edit Data');
				}
			});
		});


	});
</script>