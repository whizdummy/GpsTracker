@extends('statistics')
@section('statBody')
<div class="container">
	<h4 class="thin">Stay Details</h4>
	<div>
		<form action="#">
		  	<div class="row">

		  		<div class="input-field col s6">
		  		    <select>
		  		      <option value="" disabled selected>Choose your option</option>
		  		      <option value="1">Option 1</option>
		  		      <option value="2">Option 2</option>
		  		      <option value="3">Option 3</option>
		  		    </select>
		  		    <label>Target</label>
		  		 </div>
		      
				<div class="col s12">
					<span class="col s2">From: </span>
					<input type="date" name="dateBirthday" class="datepicker col s4" id="bday">
					<span class="col s2">To: </span>
					<input type="date" name="dateBirthday2" class="datepicker col s4" id="bday2">
					
				</div>
		   </div>
		   <hr>
		    
		  </form>
	</div>
	<div>
	<table id="example" class="display" cellspacing="0" width="100%">
	        <thead>
	            <tr>
	                <th>Serial Number</th>
	                <th>Begin Time</th>
	                <th>End Time</th>
	                <th>Stay Duration</th>
	                <th>Location</th>
	                <th>Operation</th>
	            </tr>
	        </thead>
	       
	    </table>
	</div>

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
	</script>

	<script type="text/javascript">
            	$(document).ready(function() {
            		$('.datepicker').pickadate({
		               selectMonths: true, // Creates a dropdown to control month
		               selectYears: 15, // Creates a dropdown of 15 years to control year
                   format: 'yyyy-mm-dd',
                   formatSubmit: 'yyyy-mm-dd',
		                onClose: function() {
                      $(this).blur();
                    }
                 });
            	});
            </script>
</div>
@endsection