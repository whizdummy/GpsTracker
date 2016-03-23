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
			                <a href=""><i class="material-icons red-text">delete</i></a>
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
	       	 	        <input name="strGender" type="radio" id="male" value="Male"/>
	       	 	        <label for="male">Male</label>
	       	 	      
	       	 	        <input name="strGender" type="radio" id="female" value="Female"/>
	       	 	        <label for="female">Female</label>
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
	         	<input id="username" type="text" class="validate" name="strContactNo" required>
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

<style type="text/css">
	#modal1{
		width: 1000px !important;
	}
</style>
<script type="text/javascript">
	function editId(id) {
		var url =  "{!! route('admin.show', ':id') !!}";
		var newValue = url.replace(':id', id);

		$.ajax({
			url: newValue,
			type: "GET",
			success: function(data) {
				console.log(data);
			},
			error: function(xhr) {
				console.log(xhr);
			}
		});
	}

	function deleteId(id) {

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
</script>


@endsection