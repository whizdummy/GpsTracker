@extends('index')
@section('body')
<aside class="aside aside-1 white">
  <h4 class="thin center">Options</h4>
  <ul class="collapsible" data-collapsible="expandable">
      <li>
        <div class="collapsible-header"><h5>Operation Statistics</h5></div>
        <div class="collapsible-body center"><a href="{!! url('moving-overview') !!}"><h5 class="thin">Moving overview</h5></a></div>
        <div class="collapsible-body center"><a href="{!! url('mileage-report') !!}"><h5 class="thin"> Mileage Report</h5></a></div>
        <div class="collapsible-body center"><a href="{!! url('overspeed-details') !!}"><h5 class="thin">Overspeed Details</h5></a></div>
        <div class="collapsible-body center"><a href="{!! url('stay-details') !!}"><h5 class="thin">Stay Details</h5></a></div>
        <div class="collapsible-body center"><a href="{!! url('old-details') !!}"><h5 class="thin"> Old Details</h5></a></div>
        <div class="collapsible-body center"><a href="{!! url('acc-report') !!}"><h5 class="thin">ACC Reports</h5> </a></div>
      </li>
      <li>
        <div class="collapsible-header"><h5>Alarm Statistics</h5></div>
        <div class="collapsible-body center"><a href="{!! url('alarm-overview') !!}"><h5 class="thin"> Alarm overview</h5></a></div>
        <div class="collapsible-body center"><a href="{!! url('alarm-statistics') !!}"><h5 class="thin">Alarm Statistic</h5> </a></div>
        <div class="collapsible-body center"><a href="{!! url('alarm-details') !!}"><h5 class="thin">Alarm Details</h5> </a></div>
      </li>
    </ul>
</aside>
<article class="main white"> <!--START OF MAIN-->    
  @yield('statBody')
</article>  <!--END OF MAIN--> 
@endsection