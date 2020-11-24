<li class="nav-item {{ Request::is('students*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('students.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Students</span>
    </a>
</li>
<li class="nav-item {{ Request::is('assistances*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('assistances.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Assistances</span>
    </a>
</li>
<li class="nav-item {{ Request::is('subjects*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('subjects.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Subjects</span>
    </a>
</li>
<li class="nav-item {{ Request::is('themes*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('themes.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Themes</span>
    </a>
</li>
<li class="nav-item {{ Request::is('questions*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('questions.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Questions</span>
    </a>
</li>
<li class="nav-item {{ Request::is('details*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('details.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Details</span>
    </a>
</li>
<li class="nav-item {{ Request::is('exams*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('exams.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Exams</span>
    </a>
</li>
