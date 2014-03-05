@extends('layouts.default')
@section('main')
    {{ Form::model(new \Comment, array('route' => array('comment.store'), 'class' => 'form-horizontal', 'role' => 'form')) }}
        @include('comment/_partials/_form', ['submit_text' => '新增'])
    {{ Form::close() }}
@stop