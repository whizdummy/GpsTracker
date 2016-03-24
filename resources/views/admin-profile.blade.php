@extends('index')
@section('body')
<article>
<div class="container">
	<div id="profile-page-header" class="card">
            <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="{{URL::asset('img/user-profile-bg.jpg')}}" alt="user background">                    
            </div>
            <figure class="card-profile-image">
                <img src="{{URL::asset('img/jerald.jpg')}}" alt="profile image" class="circle z-depth-2 responsive-img activator">
            </figure>
            <div class="card-content">
              <div class="row">                    
                <div class="col s3 offset-s2">                        
                    <h4 class="card-title grey-text text-darken-4">Jerald John</h4>
                    <p class="medium-small grey-text">Project Manager</p>                        
                </div>
                <div class="col s2 center-align">
                    <h4 class="card-title grey-text text-darken-4">10+</h4>
                    <p class="medium-small grey-text">Work Experience</p>                        
                </div>
                <div class="col s2 center-align">
                    <h4 class="card-title grey-text text-darken-4">6</h4>
                    <p class="medium-small grey-text">Completed Projects</p>                        
                </div>                    
                <div class="col s2 center-align">
                    <h4 class="card-title grey-text text-darken-4">$ 1,253,000</h4>
                    <p class="medium-small grey-text">Busness Profit</p>                        
                </div>                    
                <div class="col s1 right-align">
                  <a class="btn-floating activator waves-effect waves-light darken-2 right">
                      <i class="mdi-action-perm-identity"></i>
                  </a> &nbsp;&nbsp;
                  <a class="btn-floating modal-trigger waves-effect waves-light darken-2 right" href="#updateAccount">
                      <i class="mdi-action-perm-settings"></i>
                  </a>

                </div>
              </div>
            </div>
            <div style="display: none; transform: translateY(0px);" class="card-reveal">
                <p>
                  <span class="card-title grey-text text-darken-4">Roger Waters <i class="mdi-navigation-close right"></i></span>
                  <span><i class="mdi-action-perm-identity cyan-text text-darken-2"></i> Project Manager</span>
                </p>

                <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                
                <p><i class="mdi-action-perm-phone-msg cyan-text text-darken-2"></i> +1 (612) 222 8989</p>
                <p><i class="mdi-communication-email cyan-text text-darken-2"></i> mail@domain.com</p>
                <p><i class="mdi-social-cake cyan-text text-darken-2"></i> 18th June 1990</p>
                <p><i class="mdi-device-airplanemode-on cyan-text text-darken-2"></i> BAR - AUS</p>
            </div>
       </div>

        <!-- Modal Structure -->
         <div id="updateAccount" class="modal">
          <div class="modal-content">
            <h4>Update Account</h4>
            <form class="col s12 " action="{{ url('admin') }}" method="post" enctype="multipart/form-data">
              <div class="row">
              	 <div class="col s12">
              	 	    <h6 class="col s12">Update password</h6>
              	 	    <div class="input-field col s6 offset-s3">
              	 	    <input id="oldPw" type="password" class="validate" name="" required>
              	 	    <label for="oldPw">Old Password</label>
              	 	    </div>

              	 	    <div class="input-field col s6">
              	 	    <input id="newPw" type="password" class="validate" name="">
              	 	    <label for="newPw">New Password</label>
              	 	    </div>

              	 	    <div class="input-field col s6">
              	 	    <input id="reNewPw" type="password" class="validate" name="" required>
              	 	    <label for="reNewPw">Re-enter password</label>
              	 	    </div>
              	 </div>
                <br><br>
              </div>
              <div class="modal-footer">
                <button class="btn waves-effect waves-light green darken-3 white-text" type="submit" name="action">UPDATE
                 </button>
                <a class=" modal-action modal-close waves-effect waves-green btn-flat green-text">CANCEL</a>
              </div>
          	</div>
          </form> 
       </div>
</div>
</article>
@endsection