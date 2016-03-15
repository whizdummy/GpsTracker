@extends('statistics')
@section('statBody')
<div class="container">
	<h4 class="thin">Moving Overview Statistics</h4>
	<div>
		<form action="#">
		  	<div class="row">
		  		<div class="col s6">
		  			<input name="group1" type="radio" id="test1" />
		  			<label for="test1">Daily Details</label>
		  			
		  			<input name="group1" type="radio" id="test2" />
		  			<label for="test2">Period Details</label>
		  		</div>
		      
				<div class="col s6">
					
					<input type="date" name="dateBirthday" class="datepicker col s6" id="bday">
					<label for="#bday">From: </label>
					<input type="date" name="dateBirthday2" class="datepicker col s6" id="bday2">
					<label for="#bday2">To: </label>
				</div>
		   </div>
		    
		  </form>
	</div>
	<div>
	<table id="example" class="display" cellspacing="0" width="100%">
	        <thead>
	            <tr>
	                <th>Serial Number</th>
	                <th>Target</th>
	                <th>Mileage (Kilometer)</th>
	                <th>Overspeed</th>
	                <th>Stay</th>
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