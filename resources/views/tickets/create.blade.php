@extends('layouts.portal')
@section('pcontent')
<div class="panel panel-primary">
 <div class="panel-heading">{{trans('tickets.create')}}</div>
  <div class="panel-body">
    <form class="">
      <div class="form-group">
        <label for="subject" class="control-label">{{trans('tickets.subject')}} <span class="text-danger">*</span></label>
        <input type="text" id="subject" name="subject" class="form-control">
      </div>

      <div class="form-group">
        <label for="message" class="control-label">{{trans('tickets.message')}} <span class="text-danger">*</span></label>
        <textarea name="message" id="message" rows="10" class="form-control"></textarea>
      </div>

      <div class="form-group">
        <button class="btn btn-primary">{{trans('tickets.submit')}}</button>
        <button class="btn btn-danger">{{trans('tickets.cancel')}}</button>
      </div>
      
    </form>
</div>
</div>
@endsection
