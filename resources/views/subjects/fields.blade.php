<!-- Name Subjects Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name_subjects', 'Name Subjects:') !!}
    {!! Form::text('name_subjects', null, ['class' => 'form-control','maxlength' => 10,'maxlength' => 10]) !!}
</div>

<!-- Course Field -->
<div class="form-group col-sm-6">
    {!! Form::label('course', 'Course:') !!}
    {!! Form::text('course', null, ['class' => 'form-control','maxlength' => 10,'maxlength' => 10]) !!}
</div>

<!-- Parallel Field -->
<div class="form-group col-sm-6">
    {!! Form::label('parallel', 'Parallel:') !!}
    {!! Form::text('parallel', null, ['class' => 'form-control','maxlength' => 2,'maxlength' => 2]) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('subjects.index') }}" class="btn btn-secondary">Cancel</a>
</div>
