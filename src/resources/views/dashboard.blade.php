@extends('bytenet::layout')

@section('header')
    <section class="content-header">
      <h1>
        {{ trans('bytenet::base.dashboard') }}<small>{{ trans('bytenet::base.first_page_you_see') }}</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('admin') }}">{{ config('bytenet.base.project_name') }}</a></li>
        <li class="active">{{ trans('bytenet::base.dashboard') }}</li>
      </ol>
    </section>
@endsection


@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-default">
                <div class="box-header with-border">
                    <div class="box-title">{{ trans('bytenet::base.login_status') }}</div>
                </div>

                <div class="box-body">{{ trans('bytenet::base.logged_in') }}</div>
            </div>
        </div>
    </div>
@endsection
