<div class="table-responsive-sm">
    <table class="table table-striped" id="details-table">
        <thead>
            <tr>
                <th>Student1 Id</th>
        <th>Theme1 Id</th>
        <th>Question Id</th>
        <th>Answer Student</th>
        <th>Score</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($details as $detail)
            <tr>
                <td>{{ $detail->student1_id }}</td>
            <td>{{ $detail->theme1_id }}</td>
            <td>{{ $detail->question_id }}</td>
            <td>{{ $detail->answer_student }}</td>
            <td>{{ $detail->score }}</td>
                <td>
                    {!! Form::open(['route' => ['details.destroy', $detail->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('details.show', [$detail->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('details.edit', [$detail->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>