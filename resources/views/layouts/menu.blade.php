<li class="nav-item">
    <a class="nav-link" href="/home">
        <i class="nav-icon cil-house"></i>
        <span>Home</span>
    </a>
</li>
<li class="nav-item {{ Request::is('students*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('students.index') }}">
        <i class="nav-icon cil-group"></i>
        <span>Students</span>
    </a>
</li>
<li class="nav-item {{ Request::is('assistances*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('assistances.index') }}">
        <i class="nav-icon cil-address-book"></i>
        <span>Assistances</span>
    </a>
</li>
<li class="nav-item {{ Request::is('subjects*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('subjects.index') }}">
        <i class="nav-icon cil-lan"></i>
        <span>Subjects</span>
    </a>
</li>
<li class="nav-item {{ Request::is('themes*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('themes.index') }}">
        <i class="nav-icon cil-book"></i>
        <span>Themes</span>
    </a>
</li>
<li class="nav-item {{ Request::is('questions*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('questions.index') }}">
        <i class="nav-icon cil-list-numbered-rtl"></i>
        <span>Questions</span>
    </a>
</li>
<li class="nav-item {{ Request::is('details*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('details.index') }}">
        <i class="nav-icon cil-description"></i>
        <span>Details</span>
    </a>
</li>
<li class="nav-item {{ Request::is('exams*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('exams.index') }}">
        <i class="nav-icon cil-notes"></i>
        <span>Exams</span>
    </a>
</li>

<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="">
        <i class="nav-icon cil-contact"></i>
        <span>Contacts</span>
    </a>
    <ul class="nav-dropdown-items">
        <li class="nav-item {{ Request::is('messages*') ? 'active' : '' }}">
          <a class="nav-link" href="{{ route('messages.index') }}">
            <i class="nav-icon cil-at"></i>
            <span>Mail</span>
          </a>
        </li>
      </ul>
</li>
