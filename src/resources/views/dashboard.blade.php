@extends('bytenet-admin-base::layout')

@section('header')
      <h1>
        {{ trans('bytenet-admin-base::base.dashboard') }}<small>{{ trans('bytenet-admin-base::base.first_page_you_see') }}</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('admin') }}">{{ config('bytenet.admin.base.project_name') }}</a></li>
        <li class="active">{{ trans('bytenet-admin-base::base.dashboard') }}</li>
      </ol>
@endsection


@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-default">
                <div class="box-header with-border">
                    <div class="box-title">{{ trans('bytenet-admin-base::base.login_status') }}</div>
                </div>

                <div class="box-body">{{ trans('bytenet-admin-base::base.logged_in') }}</div>
            </div>
        </div>
    </div>
@endsection
