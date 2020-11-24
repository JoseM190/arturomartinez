<div class="table-responsive-sm">
    <table class="table table-striped" id="exams-table">
        <thead>
            <tr>
                <th>Description</th>
        <th>Detail Id</th>
        <th>Date Exam</th>
        <th>Note Exam</th>
        <th>Student2 Id</th>
        <th>Theme2 Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($exams as $exam)
            <tr>
                <td>{{ $exam->description }}</td>
            <td>{{ $exam->detail_id }}</td>
            <td>{{ $exam->date_exam }}</td>
            <td>{{ $exam->note_exam }}</td>
            <td>{{ $exam->student2_id }}</td>
            <td>{{ $exam->theme2_id }}</td>
                <td>
                    {!! Form::open(['route' => ['exams.destroy', $exam->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('exams.show', [$exam->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('exams.edit', [$exam->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>