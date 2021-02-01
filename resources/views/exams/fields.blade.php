<!-- Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::text('description', null, ['class' => 'form-control','maxlength' => 50,'maxlength' => 50]) !!}
</div>

<!-- Detail Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('detail_id', 'Detail Id:') !!}
    {!! Form::number('detail_id', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Date Exam Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_exam', 'Date Exam:') !!}
    {!! Form::text('date_exam', null, ['class' => 'form-control','id'=>'date_exam']) !!}
</div>

@push('scripts')
   <script type="text/javascript">
           $('#date_exam').datetimepicker({
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


<!-- Note Exam Field -->
<div class="form-group col-sm-6">
    {!! Form::label('note_exam', 'Note Exam:') !!}
    {!! Form::number('note_exam', null, ['class' => 'form-control']) !!}
</div>

<!-- Student2 Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('student2_id', 'Student2 Id:') !!}
    {!! Form::number('student2_id', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Theme2 Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('theme2_id', 'Theme2 Id:') !!}
    {!! Form::number('theme2_id', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('exams.index') }}" class="btn btn-secondary">Cancel</a>
</div>
