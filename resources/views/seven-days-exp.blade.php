@extends('product')
@section('prodBody')
<div class="container">
	<h4 class="thin">7 Days Expired</h4>

	<div>
	<table id="example" class="display" cellspacing="0" width="100%">
	        <thead>
	            <tr>
	                <th>Target Name</th>
	                <th>Licsense Plate No.</th>
	                <th>IMEI No.</th>
	                <th>Activation Time</th>
	                <th>Due Date</th>
	                <th>Last Location</th>
	                <th>Status</th>
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
	                <td>Active</td>
	            </tr>
	            <tr>
	                <td>Garrett Winters</td>
	                <td>Accountant</td>
	                <td>Tokyo</td>
	                <td>63</td>
	                <td>2011/07/25</td>
	                <td>$170,750</td>
	                <td>Active</td>
	            </tr>
	            <tr>
	                <td>Ashton Cox</td>
	                <td>Junior Technical Author</td>
	                <td>San Francisco</td>
	                <td>66</td>
	                <td>2009/01/12</td>
	                <td>$86,000</td>
	                <td>Active</td>
	            </tr>
	            <tr>
	                <td>Cedric Kelly</td>
	                <td>Senior Javascript Developer</td>
	                <td>Edinburgh</td>
	                <td>22</td>
	                <td>2012/03/29</td>
	                <td>$433,060</td>
	                <td>Active</td>
	            </tr>
	            <tr>
	                <td>Airi Satou</td>
	                <td>Accountant</td>
	                <td>Tokyo</td>
	                <td>33</td>
	                <td>2008/11/28</td>
	                <td>$162,700</td>
	                <td>Active</td>
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