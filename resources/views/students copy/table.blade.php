<div class="table-responsive-sm">
    <table class="table table-striped" id="students-table">
        <thead>
            <tr>
                <th>Names Student</th>
        <th>Surnames Student</th>
        <th>Ci</th>
        <th>Email</th>
        <th>Password</th>
        <th>Birthdate Student</th>
        <th>Gender Student</th>
        <th>Cellular Student</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($students as $student)
            <tr>
                <td>{{ $student->names_student }}</td>
            <td>{{ $student->surnames_student }}</td>
            <td>{{ $student->ci }}</td>
            <td>{{ $student->email }}</td>
            <td>{{ $student->password }}</td>
            <td>{{ $student->birthdate_student }}</td>
            <td>{{ $student->gender_student }}</td>
            <td>{{ $student->cellular_student }}</td>
                <td>
                    {!! Form::open(['route' => ['students.destroy', $student->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('students.show', [$student->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('students.edit', [$student->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>