<div class="table-responsive-sm">
    <table class="table table-striped" id="assistances-table">
        <thead>
            <tr>
                <th>Date Assistances</th>
        <th>Student Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($assistances as $assistance)
            <tr>
                <td>{{ $assistance->date_assistances }}</td>
            <td>{{ $assistance->student_id }}</td>
                <td>
                    {!! Form::open(['route' => ['assistances.destroy', $assistance->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('assistances.show', [$assistance->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('assistances.edit', [$assistance->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>