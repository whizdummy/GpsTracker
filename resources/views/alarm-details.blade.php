@extends('statistics')
@section('statBody')
<div class="container">
	<h4 class="thin">Total Alarm Statistics</h4>
	<div>
		<form action="#">
		  	<div class="row">
		      
				<div class="col s12">
					<span class="col s2">From: </span>
					<input type="date" name="dateBirthday" class="datepicker col s4" id="bday">
					<span class="col s2">To: </span>
					<input type="date" name="dateBirthday2" class="datepicker col s4" id="bday2">
					
				</div>
				<div class="col s6">
					<a class="waves-effect waves-light btn">Search</a>
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
	                <th>Alarm Type</th>
	                <th>Alarm Time</th>
	                <th>Longitude</th>
	                <th>Latitude</th>
	                <th>Location Time</th>
	                <th>Speed</th>
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