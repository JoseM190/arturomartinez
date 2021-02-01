<!-- Date Assistances Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_assistances', 'Date Assistances:') !!}
    {!! Form::text('date_assistances', null, ['class' => 'form-control','id'=>'date_assistances']) !!}
</div>

@push('scripts')
   <script type="text/javascript">
           $('#date_assistances').datetimepicker({
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


<!-- Student Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('student_id', 'Student Id:') !!}
    {!! Form::number('student_id', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('assistances.index') }}" class="btn btn-secondary">Cancel</a>
</div>
