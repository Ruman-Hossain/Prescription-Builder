<!--
//index.php
!-->

<html>  
    <head>  
        <title>PHP - Sending multiple forms data through jQuery Ajax</title>  
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="bootstrap.min.css" />
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    </head>  
    <body>  
        <div class="container">
			<div align="right" style="margin-bottom:5px;">
				<button type="button" name="add" id="add" class="btn btn-success btn-xs">Add</button>
			</div>
			<br />
			<form method="post" id="user_form">
				<div class="table-responsive">
					<table class="table table-striped table-bordered" id="user_data">
						<tr>
                             <td><b>Type</b></td>
                             <td><b>Medicine Name</b></td>
                             <td><b>Day Times</b></td>
                             <td><b>Instruction</b></td>
                             <td><b>Period</b></td>
                             <td><b>Period Type</b></td>
                             <td><b>Remarks</b></td>
                             <td><b>View</b></td>
                             <td><b>Remove</b></td>
                        </tr>
					</table>
				</div>
				<div align="center">
					<input type="submit" name="insert" id="insert" class="btn btn-primary" value="Insert" />
				</div>
			</form>

			<br />
		</div>
		<div id="user_dialog" title="Add Data">
			<div class="form-group">
				<label>Enter Medcine Type</label>
				<input type="text" name="medtype" id="medtype" class="form-control" />
				<span id="error_medtype" class="text-danger"></span>
			</div>
			<div class="form-group">
				<label>Enter Medicine Name</label>
				<input type="text" name="medname" id="medname" class="form-control" />
				<span id="error_medname" class="text-danger"></span>
			</div>
			<div class="form-group">
				<label>Enter Day Times</label>
				<input type="text" name="daytimes" id="daytimes" class="form-control" />
				<span id="error_daytimes" class="text-danger"></span>
			</div>
			<div class="form-group">
				<label>Instruction</label>
				<input type="text" name="instruction" id="instruction" class="form-control" />
				<span id="error_instruction" class="text-danger"></span>
			</div>
			<div class="form-group">
				<label>Period</label>
				<input type="text" name="period" id="period" class="form-control" />
				<span id="error_period" class="text-danger"></span>
			</div>
			<div class="form-group">
				<label>Enter Period Type</label>
				<input type="text" name="periodtype" id="periodtype" class="form-control" />
				<span id="error_periodtype" class="text-danger"></span>
			</div>
			<div class="form-group">
				<label>Remark</label>
				<input type="text" name="remark" id="remark" class="form-control" />
				<span id="error_remark" class="text-danger"></span>
			</div>

			<div class="form-group" align="center">
				<input type="hidden" name="row_id" id="hidden_row_id" />
				<button type="button" name="save" id="save" class="btn btn-info">Save</button>
			</div>
		</div>
		<div id="action_alert" title="Action">

		</div>
    </body>  
</html>  




<script>  
$(document).ready(function(){ 
	
	var count = 0;

	$('#user_dialog').dialog({
		autoOpen:false,
		width:400
	});

	$('#add').click(function(){
		$('#user_dialog').dialog('option', 'title', 'Enter Medicine Info');
		$('#medtype').val('');
		$('#medname').val('');
		$('#error_medtype').text('');
		$('#error_medname').text('');
		$('#medtype').css('border-color', '');
		$('#medname').css('border-color', '');
		$('#save').text('Save');
		$('#user_dialog').dialog('open');
	});

	$('#save').click(function(){
		var error_medtype = '';
		var error_medname = '';
		var medtype = '';
		var medname = '';

		var error_daytimes = '';
		var error_instruction = '';
		var daytimes = '';
		var instruction = '';

		var error_period = '';
		var error_periodtype = '';
		var period = '';
		var periodtype = '';

		var error_remark = '';
		var remark = '';

		if($('#medtype').val() == '')
		{
			error_medtype = 'Medicine type is required';
			$('#error_medtype').text(error_medtype);
			$('#medtype').css('border-color', '#cc0000');
			medtype = '';
		}
		else
		{
			error_medtype = '';
			$('#error_medtype').text(error_medtype);
			$('#medtype').css('border-color', '');
			medtype = $('#medtype').val();
		}	
		if($('#medname').val() == '')
		{
			error_medname = 'Medicine Name is required';
			$('#error_medname').text(error_medname);
			$('#medname').css('border-color', '#cc0000');
			medname = '';
		}
		else
		{
			error_medname = '';
			$('#error_medname').text(error_medname);
			$('#medname').css('border-color', '');
			medname = $('#medname').val();
		}

		if($('#daytimes').val() == '')
		{
			error_daytimes = 'Day times is required';
			$('#error_daytimes').text(error_daytimes);
			$('#daytimes').css('border-color', '#cc0000');
			daytimes = '';
		}
		else
		{
			error_daytimes = '';
			$('#error_daytimes').text(error_daytimes);
			$('#daytimes').css('border-color', '');
			daytimes = $('#daytimes').val();
		}	
		if($('#instruction').val() == '')
		{
			error_instruction = 'Medicine instruction is required';
			$('#error_instruction').text(error_instruction);
			$('#instruction').css('border-color', '#cc0000');
			instruction = '';
		}
		else
		{
			error_instruction = '';
			$('#error_instruction').text(error_instruction);
			$('#instruction').css('border-color', '');
			instruction = $('#instruction').val();
		}

		if($('#period').val() == '')
		{
			error_period = 'Period is required';
			$('#error_period').text(error_period);
			$('#period').css('border-color', '#cc0000');
			period = '';
		}
		else
		{
			error_period = '';
			$('#error_period').text(error_period);
			$('#period').css('border-color', '');
			period = $('#period').val();
		}	
		if($('#periodtype').val() == '')
		{
			error_periodtype = 'Period Type is required';
			$('#error_periodtype').text(error_periodtype);
			$('#periodtype').css('border-color', '#cc0000');
			periodtype = '';
		}
		else
		{
			error_periodtype = '';
			$('#error_periodtype').text(error_periodtype);
			$('#periodtype').css('border-color', '');
			periodtype = $('#periodtype').val();
		}

		if($('#remark').val() == '')
		{
			error_remark = 'Remark is required';
			$('#error_remark').text(error_remark);
			$('#remark').css('border-color', '#cc0000');
			remark = '';
		}
		else
		{
			error_remark = '';
			$('#error_remark').text(error_remark);
			$('#remark').css('border-color', '');
			remark = $('#remark').val();
		}

		if(error_medtype != '' || error_medname != ''|| error_daytimes != ''|| error_instruction != ''|| error_period != ''|| error_periodtype != ''|| error_remark != '')
		{
			return false;
		}
		else
		{
			if($('#save').text() == 'Save')
			{
				count = count + 1;
				output = '<tr id="row_'+count+'"+> ';
				output += '<td>'+medtype+' <input type="hidden" name="hidden_medtype[]" id="medtype'+count+'" class="medtype" value="'+medtype+'" /></td>';
				output += '<td>'+medname+' <input type="hidden" name="hidden_medname[]" id="medname'+count+'" value="'+medname+'" /></td>';
				output += '<td>'+daytimes+' <input type="hidden" name="hidden_daytimes[]" id="daytimes'+count+'" value="'+daytimes+'" /></td>';
				output += '<td>'+instruction+' <input type="hidden" name="hidden_instruction[]" id="instruction'+count+'" value="'+instruction+'" /></td>';
				output += '<td>'+period+' <input type="hidden" name="hidden_period[]" id="period'+count+'" value="'+period+'" /></td>';
				output += '<td>'+periodtype+' <input type="hidden" name="hidden_periodtype[]" id="periodtype'+count+'" value="'+periodtype+'" /></td>';
				output += '<td>'+remark+' <input type="hidden" name="hidden_remark[]" id="remark'+count+'" value="'+remark+'" /></td>';
				output += '<td><button type="button" name="view_details" class="btn btn-warning btn-xs view_details" id="'+count+'">View</button></td>';
				output += '<td><button type="button" name="remove_details" class="btn btn-danger btn-xs remove_details" id="'+count+'">Remove</button></td>';
				output += '</tr>';
				$('#user_data').append(output);
			}
			else
			{
				var row_id = $('#hidden_row_id').val();
				output = '<td>'+medtype+' <input type="hidden" name="hidden_medtype[]" id="medtype'+row_id+'" class="medtype" value="'+medtype+'" /></td>';
				output += '<td>'+medname+' <input type="hidden" name="hidden_medname[]" id="medname'+row_id+'" value="'+medname+'" /></td>';
				output += '<td>'+daytimes+' <input type="hidden" name="hidden_daytimes[]" id="daytimes'+row_id+'" value="'+daytimes+'" /></td>';
				output += '<td>'+instruction+' <input type="hidden" name="hidden_instruction[]" id="instruction'+row_id+'" value="'+instruction+'" /></td>';
				output += '<td>'+period+' <input type="hidden" name="hidden_period[]" id="period'+row_id+'" value="'+period+'" /></td>';
				output += '<td>'+periodtype+' <input type="hidden" name="hidden_periodtype[]" id="periodtype'+row_id+'" value="'+periodtype+'" /></td>';
				output += '<td>'+remark+' <input type="hidden" name="hidden_remark[]" id="remark'+row_id+'" value="'+remark+'" /></td>';
				output += '<td><button type="button" name="view_details" class="btn btn-warning btn-xs view_details" id="'+row_id+'">View</button></td>';
				output += '<td><button type="button" name="remove_details" class="btn btn-danger btn-xs remove_details" id="'+row_id+'">Remove</button></td>';
				
				$('#row_'+row_id+'').html(output);
			}

			$('#user_dialog').dialog('close');
		}
	});

	$(document).on('click', '.view_details', function(){
		var row_id = $(this).attr("id");
		var medtype = $('#medtype'+row_id+'').val();
		var medname = $('#medname'+row_id+'').val();
		var daytimes = $('#daytimes'+row_id+'').val();
		var instruction = $('#instruction'+row_id+'').val();
		var period = $('#period'+row_id+'').val();
		var periodtype = $('#periodtype'+row_id+'').val();
		var remark = $('#remark'+row_id+'').val();

		$('#medtype').val(medtype);
		$('#medname').val(medname);
		$('#daytimes').val(daytimes);
		$('#instruction').val(instruction);
		$('#period').val(period);
		$('#periodtype').val(periodtype);
		$('#remark').val(remark);
		$('#save').text('Edit');
		$('#hidden_row_id').val(row_id);
		$('#user_dialog').dialog('option', 'title', 'Edit Data');
		$('#user_dialog').dialog('open');
	});

	$(document).on('click', '.remove_details', function(){
		var row_id = $(this).attr("id");
		if(confirm("Are you sure you want to remove this row data?"))
		{
			$('#row_'+row_id+'').remove();
		}
		else
		{
			return false;
		}
	});

	$('#action_alert').dialog({
		autoOpen:false
	});

	$('#user_form').on('submit', function(event){
		event.preventDefault();
		var count_data = 0;
		$('.medtype').each(function(){
			count_data = count_data + 1;
		});
		if(count_data > 0)
		{
			var form_data = $(this).serialize();
			$.ajax({
				url:"insert.php",
				method:"POST",
				data:form_data,
				success:function(data)
				{
					$('#user_data').find("tr:gt(0)").remove();
					$('#action_alert').html('<p>Data Inserted Successfully</p>');
					$('#action_alert').dialog('open');
				}
			})
		}
		else
		{
			$('#action_alert').html('<p>Please Add atleast one data</p>');
			$('#action_alert').dialog('open');
		}
	});
	
});  
</script>