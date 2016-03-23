@extends('index')
@section('body')
<div class="container">
<article class="white" style = "border-radius: 10px;">
	<div class="container">
		<br>
		<h4 class="thin">Client List</h4>

		<div>
		<table id="example" class="display" cellspacing="0" width="100%">
		        <thead>
		            <tr>
		                <th>Target Name</th>
		                <th>License Plate No.</th>
		                <th>IMEI No.</th>
		                <th>Activation Time</th>
		                <th>Due Date</th>
		                <th>Last Location</th>
		                <th>Status</th>
		                <th>Action</th>
		            </tr>
		        </thead>
		            @foreach($client_details as $client_detail)
		            <tr>
		                <td>{!! $client_detail->strLastName . ', ' . $client_detail->strFirstName . ' ' . $client_detail->strMiddleName !!}</td>
		                <td>{!! $client_detail->strPlateNo !!}</td>
		                <td>{!! $client_detail->deviceNo !!}</td>
		                <td>{!! $client_detail->datSubscriptionStart !!}</td>
		                <td>{!! $client_detail->strPlateNo !!}</td>
		                <td>{!! $client_detail->strPlateNo !!}</td>
		                <td>{!! $client_detail->status !!}</td>
		                <td> 
			                <a href="javascript:editId({{ $client_detail->clientId }})"><i class="material-icons blue-text text-darken-3">mode_edit</i></a>
			                <a href=""><i class="material-icons red-text">delete</i></a>
		                </td>
		            </tr>
		            @endforeach
		        </tbody>
		    </table>
		</div>

		<div class="fixed-action-btn" style="bottom: 120px; right: 150px;">
		   <a class="btn-floating btn-large green darken-4 modal-trigger" href="#addClient">
		     <i class="large material-icons">add</i>
		   </a>
		 </div>
		<div>
			<br>
		</div>
	</div>

	<!-- Modal Structure -->
	 <div id="updateClient" class="modal">
	   <div class="modal-content">
	     <h4 class="col s12 green-text text-darken-4 center thin">Update Client</h4>
	             <form class="col s12 " id="updateClientForm" action="signupSubmit" method="post" enctype="multipart/form-data">
	               <div class="row">
	               <div class="col s6">
	               <input id="clientId" type="hidden">
	               		<h6 class="col s12">Name</h6>
	               		<div class="input-field col s4">
	               		<input id="firstName_update" type="text" class="validate" name="strFirstName" required>
	               		<label for="firstName_update" id="lblFirstName">First Name</label>
	               		</div>

	               		<div class="input-field col s4">
	               		<input id="middleName_update" type="text" class="validate" name="strMiddleName">
	               		<label for="middleNmame_update" id="lblMiddleName">Middle Name</label>
	               		</div>

	               		<div class="input-field col s4">
	               		<input id="lastName_update" type="text" class="validate" name="strLastName" required>
	               		<label for="lastName_update" id="lblLastName">Last Name</label>
	               		</div>

	               		<h6 class="col s6">Birthday</h6>
	               		<h6 class="col s6">Gender</h6>

	               		<div class="col s6">
	               		  <input id="bday_update" type="date" class="datepicker" name="dateBirthday">
	               		</div>

	               		<div class="col s6">
	               		  <p>
	               		    <input name="strGender" type="radio" id="male_update" value="Male"/>
	               		    <label for="male_update">Male</label>
	               		  
	               		    <input name="strGender" type="radio" id="female_update" value="Female"/>
	               		    <label for="female_update">Female</label>
	               		  </p>
	               		</div>

	               </div>
	                 
	                 <div class="col s6">
	                 	<div class="input-field col s12">
	                 	    <textarea id="address_update" class="materialize-textarea" name="txtAddress"></textarea>
	                 	    <label for="address_update" id="lblAddress">Address</label>
	                 	</div>

	                 	<div class="input-field col s6">
	                 	<input id="contactNo_update" type="text" class="validate" name="strContactNo" required>
	                 	<label for="contactNo_update" id="lblContactNo">Contact Number</label>
	                 	</div>

	                 	<div class="input-field col s12">
	                 	<input id="deviceNo_update" type="text" class="validate" name="deviceNo" required>
	                 	<label for="deviceNo_update" id="lblDeviceNo">Device No.</label>
	                 	</div>
	                 </div>
	                 
	                 </div>

	     <div class="modal-footer">
	         <button class="btn waves-effect waves-light green darken-3 white-text" type="submit" name="action">UPDATE
	          </button>         
	             </form>
	         <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat green-text">CANCEL</a>
	       </div>
	   </div>
	 </div>

	 <!-- Modal Structure -->
	  <div id="addClient" class="modal">
	    <div class="modal-content">
	      <h4 class="col s12 green-text text-darken-4 center thin">Add Client</h4>
	              <form class="col s12 " action="{{ url('client') }}" method="post" enctype="multipart/form-data">
	                <div class="row">
	                <div class="col s6">
	                		<h6 class="col s12">Name</h6>
	                		<div class="input-field col s4">
	                		<input id="firstName" type="text" class="validate" name="strFirstName" required>
	                		<label for="firstName">First Name</label>
	                		</div>

	                		<div class="input-field col s4">
	                		<input id="middleName" type="text" class="validate" name="strMiddleName">
	                		<label for="middleNmame">Middle Name</label>
	                		</div>

	                		<div class="input-field col s4">
	                		<input id="lastName" type="text" class="validate" name="strLastName" required>
	                		<label for="lastName">Last Name</label>
	                		</div>

	                		<h6 class="col s6">Birthday</h6>
	                		<h6 class="col s6">Gender</h6>

	                		<div class="col s6">
	                		  <input type="date" class="datepicker" name="dateBirthday">
	                		</div>

	                		<div class="col s6">
	                		  <p>
	                		    <input name="strGender" type="radio" id="male_create" value="Male"/>
	                		    <label for="male_create">Male</label>
	                		  
	                		    <input name="strGender" type="radio" id="female_create" value="Female"/>
	                		    <label for="female_create">Female</label>
	                		  </p>
	                		</div>

                			<div class="input-field col s4">
		                		<input name="strPlateNo" type="text" id="plateNo" required/>
	                			<label for="strPlateNo">Plate Number</label>
	                		</div>

	                </div>
	                  
	                  <div class="col s6">
	                  	<div class="input-field col s12">
	                  	    <textarea id="textarea1" class="materialize-textarea" name="txtAddress"></textarea>
	                  	    <label for="textarea1">Address</label>
	                  	</div>

	                  	<div class="input-field col s6">
	                  	<input id="contactNo" type="text" class="validate" name="strContactNo" required>
	                  	<label for="contactNo">Contact Number</label>
	                  	</div>

	                  	<div class="input-field col s12">
	                  	<input id="deviceNo" type="text" class="validate" name="deviceNo" required>
	                  	<label for="deviceNo">Device No.</label>
	                  	</div>
	                  </div>
	                  
	                  </div>        

	      <div class="modal-footer">
	          <button class="btn waves-effect waves-light green darken-3 white-text" type="submit" name="action">CREATE
	           </button> 
	              </form>
	          <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat green-text">CANCEL</a>
	        </div>
	    </div>
	  </div>

</article>
</div>

<style type="text/css">
	#updateClient{
		width: 1000px !important;
	}
</style>
<script type="text/javascript">
	$(document).ready(function() {
	    $('#example').DataTable( {
	        dom: 'Bfrtip',
	        buttons: [
	            'copyHtml5',
	            'excelHtml5',
	            'csvHtml5',
	            'pdfHtml5'
	        ]
	    } );
	} );

	function editId(id){

		var url =  "{!! route('client.show', ':id') !!}";
		var newValue = url.replace(':id', id);

		$.ajax({
			type : "GET",
			url : newValue,
			dataType : "json",
			async : true,
			success : function(data){
				console.log(data);
				$('#updateClient').openModal();
				$('#clientId').val(data.clientId);
				$('#lblFirstName').prop('class', 'active');
				$('#firstName_update').val(data.strFirstName);
				$('#lblMiddleName').prop('class', 'active');
				$('#middleName_update').val(data.strMiddleName);
				$('#lblLastName').prop('class', 'active');
				$('#lastName_update').val(data.strLastName);
				$('#lblContactNo').prop('class', 'active');
				$('#contactNo_update').val(data.strContactNo);
				$('#lblAddress').prop('class', 'active');
				$('#address_update').val(data.txtAddress);
				$('#bday_update').val(data.dateBirthday);
				$('#lblDeviceNo').prop('class', 'active');
				$('#deviceNo_update').val(data.deviceNo);
				if (data.strGender === "Male"){
					$("#male_update").prop("checked", true)
				}else{
					$("#female_update").prop("checked", true)
				}
			},
			error : function(xhr){

			}
		});

	}

	$('#updateClientForm').submit(function(event) {
		event.preventDefault();

		var maleGender = document.getElementById('male_update');
		var femaleGender = document.getElementById('female_update');
		var genderValue = '';

		if(maleGender.checked) {
			genderValue = maleGender.value;
		} else if(femaleGender.checked) {
			genderValue = femaleGender.value;
		}

		$.ajax({
			url: "client/" + document.getElementById('clientId').value,
			type: "POST",
			data: {
				_method: 'PUT',
				strFirstName: document.getElementById('firstName_update').value,
				strMiddleName: document.getElementById('middleName_update').value,
				strLastName: document.getElementById('lastName_update').value,
				dateBirthday: document.getElementById('bday_update').value,
				strGender: genderValue,
				txtAddress: document.getElementById('address_update').value,
				deviceNo: document.getElementById('deviceNo_update').value,
				strContactNo: document.getElementById('contactNo_update').value
			}, 
			success: function(data) {
				if (data === "success"){
					window.location.href = "{!! url('client') !!}";
				}else{
					alert('something is wrong.');
				}
			},
			error: function(xhr) {
				console.log(xhr);
			}
		});
	});

</script>


@endsection