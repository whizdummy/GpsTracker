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
	                <th>Date</th>
	                <th>Vibration Alarm</th>
	                <th>Electricity cutoff Alarm</th>
	                <th>Low Battery Alarm</th>
	                <th>SOS Alarm</th>
	            </tr>
	        </thead>
	        <tfoot>
	            <tr>
	                <th>Name</th>
	                <th>Position</th>
	                <th>Office</th>
	                <th>Age</th>
	                <th>Start date</th>
	                <th>Salary</th>
	            </tr>
	        </tfoot>
	        <tbody>
	            <tr>
	                <td>Tiger Nixon</td>
	                <td>System Architect</td>
	                <td>Edinburgh</td>
	                <td>61</td>
	                <td>2011/04/25</td>
	                <td>$320,800</td>
	            </tr>
	            <tr>
	                <td>Garrett Winters</td>
	                <td>Accountant</td>
	                <td>Tokyo</td>
	                <td>63</td>
	                <td>2011/07/25</td>
	                <td>$170,750</td>
	            </tr>
	            <tr>
	                <td>Ashton Cox</td>
	                <td>Junior Technical Author</td>
	                <td>San Francisco</td>
	                <td>66</td>
	                <td>2009/01/12</td>
	                <td>$86,000</td>
	            </tr>
	        </tbody>
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