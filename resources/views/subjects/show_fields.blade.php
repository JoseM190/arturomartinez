<!-- Name Subjects Field -->
<div class="form-group">
    {!! Form::label('name_subjects', 'Name Subjects:') !!}
    <p>{{ $subject->name_subjects }}</p>
</div>

<!-- Course Field -->
<div class="form-group">
    {!! Form::label('course', 'Course:') !!}
    <p>{{ $subject->course }}</p>
</div>

<!-- Parallel Field -->
<div class="form-group">
    {!! Form::label('parallel', 'Parallel:') !!}
    <p>{{ $subject->parallel }}</p>
</div>

