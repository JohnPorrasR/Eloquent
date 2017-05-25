<ul class="dropdown-menu">
    <li>
        <a href="{{ route('all')  }}">
            Todos los archivos
        </a>
    </li>
    <li>
        <a href="{{ route('get', 'f')  }}">
            Todos los usuarios femenina (GET)
        </a>
    </li>
    <li>
        <a href="{{ route('get', 'm')  }}">
            Todos los usuarios masculino (GET)
        </a>
    </li>
    <li>
        <a href="{{ route('get-custom')  }}">
            Lista de usuarios con array (GET)
        </a>
    </li>
    <li>
        <a href="{{ route('lists')  }}">
            Lista de usuarios para select (lists)
        </a>
    </li>
    <li>
        <a href="{{ route('first-last')  }}">
            First last
        </a>
    </li>
    <li>
        <a href="{{ route('paginate')  }}">
            Paginate
        </a>
    </li>
</ul>