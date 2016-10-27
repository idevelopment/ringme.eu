@extends('layouts.portal')
@section('pcontent')
    <div class="alert alert-warning">
        <p>You have one open invoice.</p>
    </div>
    <div class="panel panel-primary">
      <div class="panel-heading">{{trans('orders.my_open_orders')}}</div>
      <div class="panel-body">
        <table class="table table-striped">
          <thead>
            <th>{{trans('orders.number')}}</th>
            <th>{{trans('orders.date')}}</th>
            <th>{{trans('orders.status')}}</th>
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
      <div class="panel-heading">{{trans('payments.my_recent_payments')}}</div>
      <div class="panel-body">
        <table class="table">
          <thead>
            <th>{{trans('payments.date')}}</th>
            <th>{{trans('payments.amount')}}</th>
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
@endsection
