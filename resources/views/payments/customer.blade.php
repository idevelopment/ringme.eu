@extends('layouts.portal')
@section('pcontent')
<div class="panel panel-primary">
 <div class="panel-heading">{{trans('payments.general')}}</div>
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
</table>
</div>
</div>
@endsection
