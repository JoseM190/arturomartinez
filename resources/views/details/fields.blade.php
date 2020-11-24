<!-- Student1 Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('student1_id', 'Student1 Id:') !!}
    {!! Form::number('student1_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Theme1 Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('theme1_id', 'Theme1 Id:') !!}
    {!! Form::number('theme1_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Question Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('question_id', 'Question Id:') !!}
    {!! Form::number('question_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Answer Student Field -->
<div class="form-group col-sm-6">
    {!! Form::label('answer_student', 'Answer Student:') !!}
    {!! Form::text('answer_student', null, ['class' => 'form-control','maxlength' => 50,'maxlength' => 50]) !!}
</div>

<!-- Score Field -->
<div class="form-group col-sm-6">
    {!! Form::label('score', 'Score:') !!}
    {!! Form::number('score', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('details.index') }}" class="btn btn-secondary">Cancel</a>
</div>
