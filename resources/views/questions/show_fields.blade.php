<!-- Theme Id Field -->
<div class="form-group">
    {!! Form::label('theme_id', 'Theme Id:') !!}
    <p>{{ $question->theme_id }}</p>
</div>

<!-- Number Question Field -->
<div class="form-group">
    {!! Form::label('number_question', 'Number Question:') !!}
    <p>{{ $question->number_question }}</p>
</div>

<!-- Question Field -->
<div class="form-group">
    {!! Form::label('question', 'Question:') !!}
    <p>{{ $question->question }}</p>
</div>

<!-- Answer Field -->
<div class="form-group">
    {!! Form::label('answer', 'Answer:') !!}
    <p>{{ $question->answer }}</p>
</div>

