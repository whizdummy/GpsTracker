@extends('index')
@section('body')
<article class="main white" style="margin-left: 20%; margin-right: 20%; border-radius: 10px;"> <!--START OF MAIN-->    
  <div class="row container">         
      <h2 class="col s12 green-text text-darken-4 center thin">Add Client</h2>
        <form class="col s12 " action="{{ url('client') }}" method="post" enctype="multipart/form-data">
          <div class="row">

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
                <input name="strGender" type="radio" id="male" value="Male"/>
                <label for="male">Male</label>
              
                <input name="strGender" type="radio" id="female" value="Female"/>
                <label for="female">Female</label>
              </p>
            </div>

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

            <div class="row"> 
              <div class="col s6">
              <a class="btn-large waves-effect waves-light red center" href="index.jsp">CANCEL
              <i class="material-icons right">cancel</i>
              </a>
            </div>

            <div class="col s6">
              <button class="btn-large waves-effect waves-light center" type="submit" name="action">SUBMIT
              <i class="material-icons right">done</i>
              </button>
            </div>
            </div>         
          </div>
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
</article>  <!--END OF MAIN--> 
@endsection