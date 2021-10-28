<li class="nav-item">
    <a href="{{ route('pacientes.index') }}"
       class="nav-link {{ Request::is('pacientes*') ? 'active' : '' }}">
        <p>Pacientes</p>
    </a>
</li>

<li class="nav-item">

<a href="{{ route('vuecliente.index') }}"

class="nav-link {{ Request::is('vuecliente*') ? 'active' : '' }}">

<p>Vue Cliente</p>

</a>

</li>


