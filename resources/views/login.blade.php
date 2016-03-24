@extends('index')
@section('body')

<div>
<article class="main">
    <div class="col s12" align="middle" style="margin-top: 5%;">
      <img src="{{URL::asset('img/titlewhite.png')}}" ><br>
      <h4 class="white-text light center" >High End Tracking Device</h4>
    </div>
 </article>
</div>
 	
 <div class="center green darken-1 z-depth-1" style="margin-right: 30%; margin-left: 30%; margin-top: 10%; border-radius: 10px;">
 		<h1 class="thin white-text text-darken-4 center">Log In</h1>
	 	{!! Form::open(array('url' => 'login', 'method'	=> 'POST', 'class' => 'col s12')) !!}
		 	{{ csrf_field() }}
		 	<div class="container">
		      <div class="row">
		        <div class="input-field col s12">
		          <input  id="username" type="text" class="validate white-text" name="strUsername">
		          <label for="username" class="white-text">Username</label>
		        </div>
		        <div class="input-field col s12">
		          <input id="password" type="password" class="validate white-text" name="strPassword">
		          <label for="password" class="white-text">Password</label>
		        </div>
		      </div>

		      <button class="btn waves-effect waves-light col s12" type="submit" name="action">Submit
		          <i class="material-icons right">send</i>
		        </button>
		     </div>
	    {!! Form::close() !!}
 </div>


@endsection