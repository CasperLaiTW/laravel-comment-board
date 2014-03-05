@extends('layouts.default')
@section('main')
    {{ Form::model(new \Comment, array('route' => array('comment.store'), 'class' => 'form-horizontal', 'role' => 'form')) }}
        <div class="form-group">
            {{ Form::label('email', 'email:', array('class' => 'col-sm-3 control-label no-padding-right')) }}
            <div class="col-sm-9" style="text-align:left;margin-top: 6px;">
                {{{ $user->email }}}
            </div>
          {{ Form::hidden('user_id', $user->id) }}
        </div>
        <div class="space-4"></div>
        <div class="form-group">
            {{ Form::label('title', '標題', array('class' => 'col-sm-3 control-label no-padding-right')) }}
            <div class="col-sm-9">
                {{ Form::text('title', Input::old('title') ,array('class' => 'col-xs-10 col-sm-5', 'placeholder' => '請輸入標題')) }}
            </div>
        </div>
        <div class="space-4"></div>
        <div class="form-group">
            {{ Form::label('body', '內容', array('class' => 'col-sm-3 control-label no-padding-right')) }}
            <div class="col-sm-9">
                {{ Form::textarea('body', Input::old('body') ,array('class' => 'col-xs-10 col-sm-5', 'placeholder' => '請輸入內容')) }}
            </div>
        </div>
        @include('_partials/_form_error', ['errors'  =>  $errors])

        <div class="clearfix form-actions">
            <div class="col-md-9">
                {{ HTML::ButtonWithIcon('<i class="icon-ok bigger-110"></i>新增', array('class' => 'btn btn-info', 'type' => 'submit')) }}

                &nbsp; &nbsp; &nbsp;

                {{ HTML::decode(link_to_route('comment.index', '<i class="icon-remove bigger-110"></i>取消', null, array('class' => 'btn btn-default jquery-confirm'))) }}
            </div>
        </div>
  {{ Form::close() }}

@stop