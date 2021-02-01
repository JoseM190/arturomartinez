<!-- Title Theme Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title_theme', 'Title Theme:') !!}
    {!! Form::text('title_theme', null, ['class' => 'form-control','maxlength' => 30,'maxlength' => 30]) !!}
</div>

<!-- Subject Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('subject_id', 'Subject Id:') !!}
    {!! Form::number('subject_id', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('themes.index') }}" class="btn btn-secondary">Cancel</a>
</div>
