<!-- Names Student Field -->
<div class="form-group col-sm-6">
    {!! Form::label('names_student', 'Names Student:') !!}
    {!! Form::text('names_student', null, ['class' => 'form-control','maxlength' => 30,'maxlength' => 30]) !!}
</div>

<!-- Surnames Student Field -->
<div class="form-group col-sm-6">
    {!! Form::label('surnames_student', 'Surnames Student:') !!}
    {!! Form::text('surnames_student', null, ['class' => 'form-control','maxlength' => 30,'maxlength' => 30]) !!}
</div>

<!-- Ci Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ci', 'Ci:') !!}
    {!! Form::number('ci', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('password', 'Password:') !!}
    {!! Form::password('password', ['class' => 'form-control','maxlength' => 20,'maxlength' => 20]) !!}
</div>

<!-- Birthdate Student Field -->
<div class="form-group col-sm-6">
    {!! Form::label('birthdate_student', 'Birthdate Student:') !!}
    {!! Form::text('birthdate_student', null, ['class' => 'form-control','id'=>'birthdate_student']) !!}
</div>

@push('scripts')
   <script type="text/javascript">
           $('#birthdate_student').datetimepicker({
               format: 'YYYY-MM-DD HH:mm:ss',
               useCurrent: true,
               icons: {
                   up: "icon-arrow-up-circle icons font-2xl",
                   down: "icon-arrow-down-circle icons font-2xl"
               },
               sideBySide: true
           })
       </script>
@endpush


<!-- Gender Student Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gender_student', 'Gender Student:') !!}
    {!! Form::text('gender_student', null, ['class' => 'form-control','maxlength' => 1,'maxlength' => 1]) !!}
</div>

<!-- Cellular Student Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cellular_student', 'Cellular Student:') !!}
    {!! Form::number('cellular_student', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('students.index') }}" class="btn btn-secondary">Cancel</a>
</div>
