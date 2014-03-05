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
        {{ Form::open(array('method' => 'DELETE', 'route' => array('comment.destroy', $comment->id), 'class' => 'btn-group')) }}
        <div class="panel panel-primary">
          <div class="panel-heading">
            {{{ $comment->title }}} ({{{ $comment->user->email }}})
            {{HTML::decode(link_to_route('comment.edit', '<i class="iglyphicon glyphicon-pencil"></i>', array($comment->id), array('class' => 'btn btn-xs btn-warning')))}}
            {{HTML::ButtonWithIcon('<i class="glyphicon glyphicon-remove"></i>', array('class' => 'btn btn-xs btn-danger', 'type'  =>  'submit')) }}
          </div>
          <div class="panel-body" style="color:#000;">
            {{{ $comment->body }}}
          </div>
        </div>
        {{ Form::close() }}
    @endforeach
@stop