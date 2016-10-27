@extends('layouts.portal')
@section('pcontent')

<div class="pull-right">
  <a href="{{url('tickets/create')}}" class="btn btn-success">{{trans('tickets.create')}}</a>
</div>

<div class="clearfix">&nbsp;</div>
<div class="clearfix">&nbsp;</div>

<div class="panel panel-primary">
 <div class="panel-heading">{{trans('tickets.general')}}</div>
  <div class="panel-body">
   <table class="table table-striped">
     <thead>
       <th>{{trans('tickets.subject')}}</th>
       <th>{{trans('tickets.status')}}</th>
       <th>{{trans('tickets.updated_at')}}</th>
       <th>&nbsp;</th>
     </thead>
     <tbody>
       <tr>
         <td><a href="#">Configuration - Control Panel</a></td>
         <td>Open</td>
         <td>October 16, 2016 3:37:26 AM</td>
       </tr>

       <tr>
         <td><a href="#">Service unreachable - Application is not responding</a></td>
         <td>Open</td>
         <td>October 16, 2016 3:37:26 AM</td>
       </tr>
  </tbody>
</table>
</div>
</div>
@endsection
