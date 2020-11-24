<div class="table-responsive-sm">
    <table class="table table-striped" id="questions-table">
        <thead>
            <tr>
                <th>Theme Id</th>
        <th>Number Question</th>
        <th>Question</th>
        <th>Answer</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($questions as $question)
            <tr>
                <td>{{ $question->theme_id }}</td>
            <td>{{ $question->number_question }}</td>
            <td>{{ $question->question }}</td>
            <td>{{ $question->answer }}</td>
                <td>
                    {!! Form::open(['route' => ['questions.destroy', $question->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('questions.show', [$question->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('questions.edit', [$question->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>