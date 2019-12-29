<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('first_name', 'First Name', ['class' => 'control-label required']) !!}
            {!! Form::text('first_name', null, ['class' => ['form-control',  $errors->has('first_name') ? 'is-invalid' : '']]); !!}
            <div class="invalid-feedback">{!! ($errors->has('first_name') ? $errors->first('first_name') : '') !!}</div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('last_name', 'Last Name', ['class' => 'control-label required']) !!}
            {!! Form::text('last_name', null, ['class' => ['form-control',  $errors->has('last_name') ? 'is-invalid' : '']]); !!}
            <div class="invalid-feedback">{!! ($errors->has('last_name') ? $errors->first('last_name') : '') !!}</div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('email', 'E-Mail Address', ['class' => 'control-label required']) !!}
            {!! Form::text('email', null, ['class' => ['form-control',  $errors->has('email') ? 'is-invalid' : '']]); !!}
            <div class="invalid-feedback">{!! ($errors->has('email') ? $errors->first('email') : '') !!}</div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('password', 'Password', ['class' => ['control-label', isset($user) ? '' : 'required']]) !!}
            {!! Form::password('password', ['class' => ['form-control',  $errors->has('password') ? 'is-invalid' : '']]); !!}
            <div class="invalid-feedback">{!! ($errors->has('password') ? $errors->first('password') : '') !!}</div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('password_confirmation', 'Confirm Password', ['class' => ['control-label', isset($user) ? '' : 'required']]) !!}
            {!! Form::password('password_confirmation', ['class' => ['form-control',  $errors->has('password_confirmation') ? 'is-invalid' : '']]); !!}
            <div class="invalid-feedback">{!! ($errors->has('password_confirmation') ? $errors->first('password_confirmation') : '') !!}</div>
        </div>
    </div>
</div>

