@extends('statistics')
@section('statBody')
<div class="container">
	<h4 class="thin">ACC Report</h4>
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
				    <label>Target: </label>
				 </div>

				 <div class="input-field col s6">
				    <select>
				      <option value="" disabled selected>Choose your option</option>
				      <option value="1">Option 1</option>
				      <option value="2">Option 2</option> 
				      <option value="3">Option 3</option>
				    </select>
				    <label>ACC: </label>
				 </div>
		      
				<div class="col s6">
					<span class="col s2">From: </span>
					<input type="date" name="dateBirthday" class="datepicker col s4" id="bday">
					<span class="col s2">To: </span>
					<input type="date" name="dateBirthday2" class="datepicker col s4" id="bday2">
				</div>

				<div class="col s6"> 					
					<button class="btn waves-effect waves-light" type="submit" name="action">Submit
					  <i class="material-icons right">send</i>
					</button>
				</div>
		   </div>
		   <hr>
		    
		  </form>
	</div>
	

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