@extends('layouts.default')
@section('main')
    @if($comments->count() == 0)
        <div class="panel panel-default">
          <div class="panel-heading">無任何留言</div>
          <div class="panel-body">
          </div>
        </div>
    @endif
    @foreach($comments as $comment)
        <div class="panel panel-primary">
          <div class="panel-heading">{{{ $comment->title }}} ({{{ $comment->user->email }}})</div>
          <div class="panel-body">
            {{{ $comment->body }}}
          </div>
        </div>
    @endforeach
@stop