@extends('tp')

@section('content')
<div class="well panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">New Child</h3>
    </div>
    <div class="panel-body">
      {!! Form::model(new App\Child, ['route' => ['children.store'], 'files' => true, 'class' => 'well form-horizontal']) !!}
          @include('children/partials/_form', ['submit_text' => 'Save'])
      {!! Form::close() !!}

    </div>
</div>

@endsection
