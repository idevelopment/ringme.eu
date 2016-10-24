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
  </div>

  <div class="col-md-9">
    <div class="alert alert-info">
        <p>You have one open invoice.</p>
    </div>
    <div class="panel panel-primary">
      <div class="panel-heading">{{trans('orders.my_open_orders')}}</div>
      <div class="panel-body">
        <table class="table table-striped">
          <thead>
            <th>Order ID</th>
            <th>Date</th>
            <th>Status</th>
          </thead>
          <tbody>
            <tr>
              <td>101</td>
              <td>Sep 20, 2016</td>
              <td>In progress</td>
            </tr>

            <tr>
              <td>102</td>
              <td>Sep 20, 2016 </td>
              <td>In progress</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <div class="panel panel-primary">
      <div class="panel-heading">My recent payments</div>
      <div class="panel-body">
        <table class="table">
          <thead>
            <th>Date</th>
            <th>Amount</th>
          </thead>
          <tbody>
            <tr>
              <td>Sep 20, 2016 </td>
              <td>€ 59,23</td>
            </tr>

            <tr>
              <td>Sep 20, 2016 </td>
              <td>€ 59,23</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

  </div>
</section>
@endsection
