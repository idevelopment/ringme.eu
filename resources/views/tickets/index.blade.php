@extends('layouts.app')
@section('content')
<section class="navigation">
    <div class="container">
        <div class="row">
         <div class="col-lg-8">
           <h3>Customer portal</span></h3>
           </div>
        </div>
    </div>
</section>

<section>
  <div class="container">
<div class="col-md-3">
  <div class="list-group">
    <a href="#" class="list-group-item"><i class="fa fa-user"></i> Personal details</a>
    <a href="#" class="list-group-item"><i class="fa fa-shopping-cart"></i> My orders</a>
    <a href="#" class="list-group-item"><i class="fa fa-history"></i> My payments</a>
    <a href="{{route('tickets.index')}}" class="list-group-item"><i class="fa fa-life-ring"></i> Support tickets</a>
    <a href="{{route('settings.index')}}" class="list-group-item"><i class="fa fa-gear"></i> Settings</a>
    <a href="{{url('logout')}}" class="list-group-item"><i class="fa fa-sign-out"></i> Sign out</a>
  </ul>
</div>

<div class="clearfix">&nbsp;</div>

<div class="list-group">
  <a href="#" class="list-group-item"><i class="fa fa-user"></i> Personal details</a>
  <a href="#" class="list-group-item"><i class="fa fa-shopping-cart"></i> My orders</a>
  <a href="#" class="list-group-item"><i class="fa fa-history"></i> My payments</a>
  <a href="{{route('tickets.index')}}" class="list-group-item"><i class="fa fa-life-ring"></i> Support tickets</a>
  <a href="{{route('settings.index')}}" class="list-group-item"><i class="fa fa-gear"></i> Settings</a>
  <a href="{{url('logout')}}" class="list-group-item"><i class="fa fa-sign-out"></i> Sign out</a>
</ul>
</div>

</div>

<div class="col-md-9">
        <table class="table table-bordered">
          <thead>
            <th>Subject</th>
            <th class="col-md-1">Status</th>
            <th class="col-md-3">Last update</th>
            <th>&nbsp;</th>
          </thead>
          <tbody>
            <tr>
              <td><a href="#">[NL] Configuration - Control Panel</a></td>
              <td>Open</td>
              <td>October 16, 2016 3:37:26 AM</td>
              <td><a href="#"><i class="fa fa-search"></i></a></td>
            </tr>

            <tr>
              <td><a href="#">[NL] Configuration - Control Panel</a></td>
              <td>Open</td>
              <td>October 16, 2016 3:37:26 AM</td>
              <td><a href="#"><i class="fa fa-search"></i></a></td>
            </tr>

            <tr>
              <td><a href="#">[NL] Configuration - Control Panel</a></td>
              <td>Gesloten</td>
              <td>October 16, 2016 3:37:26 AM</td>
              <td><a href="#"><i class="fa fa-search"></i></a></td>
            </tr>

            <tr>
              <td><a href="#">[NL] Configuration - Control Panel</a></td>
              <td>Closed</td>
              <td>October 16, 2016 3:37:26 AM</td>
              <td><a href="#"><i class="fa fa-search"></i></a></td>
            </tr>
          </tbody>
        </table>
</div>
</div>
</section>
@endsection
