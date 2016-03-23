@extends('index')
@section('body')
<div class="container">
<article class="white" style = "border-radius: 10px;">
	<div class="container">
		<br>
		<h4 class="thin">Admin List</h4>

		<div>
		<table id="example" class="display" cellspacing="0" width="100%">
		        <thead>
		            <tr>
		                <th>Name</th>
		                <th>Email</th>
		                <th>Contact No.</th>
		                <th>Address</th>
		                <th>Zip Code</th>
		                <th>Date Created</th>
		                <th>Actions</th>
		            </tr>
		        </thead>
		        <tbody>
		        	@foreach($admin_details as $admin_detail)
		            <tr>
		                <td>{!! $admin_detail->strLastName . ', ' . $admin_detail->strFirstName . ' ' . $admin_detail->strMiddleName !!}</td>
		                <td>{!! $admin_detail->strEmail !!}</td>
		                <td>{!! $admin_detail->strContactNo !!}</td>
		                <td>{!! $admin_detail->txtPermanentAddress !!}</td>
		                <td>{!! $admin_detail->zipCode !!}</td>
		                <td>{!! $admin_detail->created_at !!}</td>
		                <td> 
			                <a href="javascript:editId({{ $admin_detail->adminId }})"><i class="material-icons blue-text text-darken-3">mode_edit</i></a>
			                <a href="javascript:deleteId({{ $admin_detail->adminId }})"><i class="material-icons red-text">delete</i></a>
			                <a href=""><i class="material-icons green-text">payment</i></a>
		                </td>
		            </tr>
		            @endforeach
		        </tbody>
		    </table>
		</div>

		<div class="fixed-action-btn" style="bottom: 10%; right: 10%">
		   <a class="btn-floating btn-large green darken-4 modal-trigger" href="#addAdmin">
		     <i class="large material-icons">add</i>
		   </a>
		 </div>
		<div>
			<br>
		</div>
	</div>

	<!-- Modal Structure -->
	 <div id="updateAdmin" class="modal">
	   <div class="modal-content">
	     <h4>Update Admin</h4>
	     <form class="col s12 " action="" method="POST" id="updateAdminForm">
	       <div class="row">
   			<input type="hidden" name="_token" value="{!! csrf_token() !!}">
	       	 {!! method_field('PUT') !!}
	       	 <input hidden="hidden" name="adminId" id="adminId" />
	       	 <div class="col s6">
	       	 	    <h6 class="col s12">Name</h6>
	       	 	    <div class="input-field col s4">
	       	 	    <input id="firstName_update" type="text" class="validate" name="strFirstName" required>
	       	 	    <label for="firstName_update" id="lblFirstName">First Name</label>
	       	 	    </div>

	       	 	    <div class="input-field col s4">
	       	 	    <input id="middleName_update" type="text" class="validate" name="strMiddleName">
	       	 	    <label for="middleName_update" id="lblMiddleName">Middle Name</label>
	       	 	    </div>

	       	 	    <div class="input-field col s4">
	       	 	    <input id="lastName_update" type="text" class="validate" name="strLastName" required>
	       	 	    <label for="lastName_update" id="lblLastName">Last Name</label>
	       	 	    </div>

	       	 	    <h6 class="col s6">Birthday</h6>
	       	 	    <h6 class="col s6">Gender</h6>

	       	 	    <div class="col s6">

	       	 	      <input type="date" name="dateBirthday" class="datepicker" id="bday_update">

	       	 	    </div>

	       	 	    <div class="col s6">
	       	 	      <p>
	       	 	        <input name="strGender" type="radio" id="male_update" value="Male"/>
	       	 	        <label for="male_update">Male</label>
	       	 	      
	       	 	        <input name="strGender" type="radio" id="female_update" value="Female"/>
	       	 	        <label for="female_update">Female</label>
	       	 	      </p>
	       	 	    </div>

	       	 	    <div class="input-field col s12">
	       	 	  		<textarea id="address_update" class="materialize-textarea" name="txtPermanentAddress"></textarea>
	       	 	 	 	<label for="address_update" id="lblAddress">Address</label>
	       	 		</div>

	       	 	   

	       	 </div>
	          
	         <div class="col s6">
	         	<h6 class="col s12">Contact Information</h6>

	         	<div class="input-field col s6">
	         	<input id="email_update" type="email" class="validate" name="strEmail" required>
	         	<label for="email_update" id="lblEmail">E-mail Address</label>
	         	</div>

	         	<div class="input-field col s6">
	         	<input id="contactNo_update" type="text" class="validate" name="strContactNo" required>
	         	<label for="contactNo_update" id="lblContactNo">Contact No.</label>
	         	</div>

	         </div>
	         </div>
	         <br><br>
	       </div>
	       <div class="modal-footer">
	         <button class="btn waves-effect waves-light green darken-3 white-text" type="submit" name="action">UPDATE
	          </button>
	         <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat green-text">CANCEL</a>
	       </div>
	     </form>
	   </div>
	 </div>

	 <!-- Modal Structure -->
	  <div id="addAdmin" class="modal">
	   <div class="modal-content">
	     <h4>Create Admin</h4>
	     <form class="col s12 " action="{{ url('admin') }}" method="post" enctype="multipart/form-data">
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

	       	 	      <input type="date" name="dateBirthday" class="datepicker" id="bday">

	       	 	    </div>

	       	 	    <div class="col s6">
	       	 	      <p>
	       	 	        <input name="strGender" type="radio" id="male_create" value="Male" />
	       	 	        <label for="male_create">Male</label>
	       	 	      
	       	 	        <input name="strGender" type="radio" id="female_create" value="Female"/>
	       	 	        <label for="female_create">Female</label>
	       	 	      </p>
	       	 	    </div>

	       	 	    <div class="input-field col s12">
	       	 	  		<textarea id="textarea1" class="materialize-textarea" name="txtPermanentAddress"></textarea>
	       	 	 	 	<label for="textarea1">Address</label>
	       	 		</div>

	       	 	   

	       	 </div>
	          
	         <div class="col s6">
	         	<h6 class="col s12">Contact Information</h6>

	         	<div class="input-field col s6">
	         	<input id="email" type="email" class="validate" name="strEmail" required>
	         	<label for="email">E-mail Address</label>
	         	</div>

	         	<div class="input-field col s6">
	         	<input id="contanctNo" type="text" class="validate" name="strContactNo" required>
	         	<label for="contanctNo">Contact No.</label>
	         	</div>

	         	<h6 class="col s12">Account Information</h6>

	         	<div class="input-field col s6">
	         	<input id="username" type="text" class="validate" name="strUsername" required>
	         	<label for="username">Username</label>
	         	</div>

	         	<div class="input-field col s6">
	         	<input id="password" type="password" class="validate" name="strContactNo" required>
	         	<label for="password">Password</label>
	         	</div>

	         	<div class="input-field col s6 offset-s3">
	         	<input id="confirmpassword" type="password" class="validate" name="strContactNo" required>
	         	<label for="confirmpassword">Confirm Password</label>
	         	
	         </div>
	         </div>
	         <br><br>
	       </div>

	       <div class="modal-footer">
	         <button class="btn waves-effect waves-light green darken-3 white-text" type="submit" name="action">CREATE
	          </button>
	         <a class=" modal-action modal-close waves-effect waves-green btn-flat green-text">CANCEL</a>
	       </div>
	   	</div>
	     </form> 
	</div>

</article>
</div>

	     <div id="deleteAdmin" class="modal modal-fixed-footer">
		    <div class="modal-content">
		      <h4>Deactivate Admin</h4>
		      <form id="deleteAdminForm">
		      	<input type="hidden" id="deleteAdminId">
		      <p>Are you sure to deactivate this admin?</p>
		    </div>
		    <div class="modal-footer">
			      <button class="btn waves-effect waves-light green darken-3 white-text" type="submit" name="action">YES
		          </button>
	    		</form>
	          <a class=" modal-action modal-close waves-effect waves-green btn-flat green-text">NO</a>
		    </div>
		</form>
		 </div>

<style type="text/css">
	#modal1{
		width: 1000px !important;
	}
</style>
<script type="text/javascript">

	$(document).ready(function(){
	    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
		// $('.modal-trigger').leanModal();
	});

	function editId(id) {
		var url =  "{!! route('admin.show', ':id') !!}";
		var newValue = url.replace(':id', id);

		$.ajax({
			url: newValue,
			type: "GET",
			success: function(data) {
				console.log(data);
				$('#updateAdmin').openModal();
				$('#adminId').val(data.adminId);
				$('#lblFirstName').prop('class', 'active');
				$('#firstName_update').val(data.strFirstName);
				$('#lblMiddleName').prop('class', 'active');
				$('#middleName_update').val(data.strMiddleName);
				$('#lblLastName').prop('class', 'active');
				$('#lastName_update').val(data.strLastName);
				$('#lblEmail').prop('class', 'active');
				$('#email_update').val(data.strEmail);
				$('#lblContactNo').prop('class', 'active');
				$('#contactNo_update').val(data.strContactNo);
				$('#lblAddress').prop('class', 'active');
				$('#address_update').val(data.txtPermanentAddress);
				$('#bday_update').val(data.dateBirthday);
				if (data.strGender === "Male"){
					$("#male_update").prop("checked", true)
				}else{
					$("#female_update").prop("checked", true)
				}
			},
			error: function(xhr) {
				console.log(xhr);
			}
		});
	}

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

	$('#updateAdminForm').submit(function(event) {
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
			url: "admin/" + document.getElementById('adminId').value,
			type: "POST",
			data: {
				_method: 'PUT',
				firstName: document.getElementById('firstName_update').value,
				middleName: document.getElementById('middleName_update').value,
				lastName: document.getElementById('lastName_update').value,
				birthday: document.getElementById('bday_update').value,
				gender: genderValue,
				address: document.getElementById('address_update').value,
				email: document.getElementById('email_update').value,
				contactNum: document.getElementById('contactNo_update').value
			}, 
			success: function(data) {
				window.location.href = "{!! url('admin') !!}";
			},
			error: function(xhr) {
				console.log(xhr);
			}
		});
	});


	function deleteId(id){

		$('#deleteAdmin').openModal();
		// $('#deleteAdminId').val(id);
		// alert('here');

	}

	$('#deleteAdminForm').submit(function(event){
		event.preventDefault();

	});
	

</script>


@endsection