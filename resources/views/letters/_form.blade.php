 {{--{!! Form::hidden('userIp',1) !!}--}}
 {{--{!! Form::hidden('userId',1) !!}--}}

<div class="form-group">
    {!! Form::label('userName','Name:') !!}
    {!! Form::text('userName',null,['class'=>'form-control'])!!}
</div>

<div class="form-group">
    {!! Form::label('email','Email:') !!}
    {!! Form::email('email',null,['class'=>'form-control'])!!}
</div>

<div class="form-group">
    {!! Form::label('homePage','Home Page:') !!}
    {!! Form::url('homePage',null,['class'=>'form-control'])!!}
</div>

<div class="form-group">
    {!! Form::label('text','Text:') !!}
    {!! Form::textarea('text',null,['class'=>'form-control'])!!}
</div>

<div class="form-group">
    {!! Form::submit($submitButtonName,['class'=>'btn btn-primary form-control']) !!}
</div>