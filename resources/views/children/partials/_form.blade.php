<div class="form-group">
    {!! Form::label('firstname', 'First Name:', ['class' => 'col-xs-2 control-label']) !!}
  <div class="col-xs-10">
    {!! Form::text('firstname',$value = null,['class' => 'form-control']) !!}
  </div>
</div>
<div class="form-group">
    {!! Form::label('lastname', 'Last Name:', ['class' => 'col-xs-2 control-label']) !!}
    <div class="col-xs-10">
    {!! Form::text('lastname',$value = null,['class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('dob', 'Dob:', ['class' => 'col-xs-2 control-label']) !!}
    <div class="col-xs-10">
    {!! Form::date('dob',null,['class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('frequency', 'Frequency:', ['class' => 'col-xs-2 control-label']) !!}
    <div class="col-xs-10">
    {!! Form::text('frequency',null,['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('chilid', 'Child ID:', ['class' => 'col-xs-2 control-label']) !!}
    <div class="col-xs-10">
    {!! Form::text('childid',null,['class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('document', 'Document:', ['class' => 'col-xs-2 control-label']) !!}
    @if ($child->document != "")
      <div class="col-xs-5">
        <a href="{!! '/childrendocuments/' . $child->document !!}" class="btn btn-primary" target="_blank">
          <span class="glyphicon glyphicon-file"></span>{!! $child->document !!}
        </a>
      </div>
    @endif
    <div class="col-xs-5">
    {!! Form::file('document',['class' => 'form-control']) !!}
    </div>

</div>

<div class="form-group">
    {!! Form::label('phone', 'Phone:', ['class' => 'col-xs-2 control-label']) !!}
    <div class="col-xs-10">
    {!! Form::text('phone',null,['class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('address', 'Address:', ['class' => 'col-xs-2 control-label']) !!}
    <div class="col-xs-10">
    {!! Form::text('address',null,['class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('zipcode', 'Zip Code:', ['class' => 'col-xs-2 control-label']) !!}
    <div class="col-xs-10">
    {!! Form::text('zipcode',null,['class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('servicecoordinatorname', 'SCoord.:', ['class' => 'col-xs-2 control-label']) !!}
    <div class="col-xs-10">
    {!! Form::text('servicecoordinatorname',null,['class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('parentcaregivername', 'Parent:', ['class' => 'col-xs-2 control-label']) !!}
    <div class="col-xs-10">
    {!! Form::text('parentcaregivername',null,['class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('servicestartdate', 'Serv Start Date:', ['class' => 'col-xs-2 control-label']) !!}
    <div class="col-xs-10">
    {!! Form::date('servicestartdate',null,['class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('serviceenddate', 'Serv End Date:', ['class' => 'col-xs-2 control-label']) !!}
    <div class="col-xs-10">
    {!! Form::date('serviceenddate',null,['class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('slug', 'Slug:', ['class' => 'col-xs-2 control-label']) !!}
    <div class="col-xs-10">
    {!! Form::text('slug',null,['class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group">
   <div class="col-xs-offset-2 col-xs-10">
    {!! Form::submit($submit_text, ['class'=>'btn btn-primary']) !!}
  </div>
</div>
