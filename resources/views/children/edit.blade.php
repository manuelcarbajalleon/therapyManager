@extends('tp')

@section('content')
<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Edit Child</h3>
    </div>
    <div class="panel-body">
      {!! Form::model($child, ['method' => 'PATCH', 'route' => ['children.update', $child->slug], 'files' => true, 'class' => 'well form-horizontal']) !!}
          @include('children/partials/_form', ['submit_text' => 'Edit Child'])
      {!! Form::close() !!}
    </div>
</div>

@endsection
