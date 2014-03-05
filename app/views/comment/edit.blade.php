@extends('layouts.default')
@section('main')
    {{ Form::model($comment, array('method' =>  'PUT', 'route' => array('comment.update', $comment->id), 'class' => 'form-horizontal', 'role' => 'form')) }}
        @include('comment/_partials/_form', ['submit_text' => '修改'])
    {{ Form::close() }}
@stop