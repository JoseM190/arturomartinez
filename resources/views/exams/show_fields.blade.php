<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $exam->description }}</p>
</div>

<!-- Detail Id Field -->
<div class="form-group">
    {!! Form::label('detail_id', 'Detail Id:') !!}
    <p>{{ $exam->detail_id }}</p>
</div>

<!-- Date Exam Field -->
<div class="form-group">
    {!! Form::label('date_exam', 'Date Exam:') !!}
    <p>{{ $exam->date_exam }}</p>
</div>

<!-- Note Exam Field -->
<div class="form-group">
    {!! Form::label('note_exam', 'Note Exam:') !!}
    <p>{{ $exam->note_exam }}</p>
</div>

<!-- Student2 Id Field -->
<div class="form-group">
    {!! Form::label('student2_id', 'Student2 Id:') !!}
    <p>{{ $exam->student2_id }}</p>
</div>

<!-- Theme2 Id Field -->
<div class="form-group">
    {!! Form::label('theme2_id', 'Theme2 Id:') !!}
    <p>{{ $exam->theme2_id }}</p>
</div>

