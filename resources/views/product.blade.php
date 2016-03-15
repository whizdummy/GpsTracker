@extends('index')
@section('body')
<aside class="aside aside-1 white">
  <h4 class="thin center">Options</h4>
  <ul class="collapsible" data-collapsible="expandable">
      <li>
        <div class="collapsible-header"><h5>Target Management</h5></div>
        <div class="collapsible-body center"><a href="{!! url('product') !!}"><h5 class="thin">All Targets</h5></a></div>
        <div class="collapsible-body center"><a href="{!! url('week-expired') !!}"><h5 class="thin"> 7 Days Expired</h5></a></div>
        <div class="collapsible-body center"><a href="{!! url('months-expired') !!}"><h5 class="thin">60 Days Expired</h5></a></div>
        <div class="collapsible-body center"><a href="{!! url('expired') !!}"><h5 class="thin">Expired</h5></a></div>
      </li>
    </ul>
</aside>
<article class="main white"> <!--START OF MAIN-->    
  @yield('prodBody')
</article>  <!--END OF MAIN--> 
@endsection