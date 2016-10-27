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
        <a href="#" class="list-group-item"><i class="fa fa-user"></i> {{trans('portal.account_management')}}</a>
        <a href="#" class="list-group-item"><i class="fa fa-shopping-cart"></i> {{trans('portal.my_orders')}}</a>
        <a href="{{route('payments.index')}}" class="list-group-item"><i class="fa fa-history"></i> {{trans('portal.my_payments')}}</a>
        <a href="{{route('tickets.index')}}" class="list-group-item"><i class="fa fa-life-ring"></i> {{trans('portal.tickets')}}</a>
        <a href="{{route('settings.index')}}" class="list-group-item"><i class="fa fa-gear"></i> {{trans('portal.settings')}}</a>
        <a href="{{url('/logout')}}" class="list-group-item"><i class="fa fa-sign-out"></i> {{trans('portal.logout')}}</a>
      </ul>
    </div>
  </div>

  <div class="col-md-9">
    @yield('pcontent')
  </div>
</section>
@endsection
