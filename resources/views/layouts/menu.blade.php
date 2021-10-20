@if( auth()->user()->is_approved == 1 )
<li class="nav-item">
    <a href="{{ route('users.index') }}"
       class="nav-link {{ Request::is('users*') ? 'active' : '' }}">
        <p>Users <span class="badge rounded-pill bg-danger">{{ \App\Models\User::where('is_approved',0)->count() }}</span></p>
    </a>
</li>
<!-- <li class="nav-item">
    <a href="{{ route('registrationDetails.index') }}"
       class="nav-link {{ Request::is('registrationDetails*') ? 'active' : '' }}">
        <p>Registration Details</p>
    </a>
</li> -->
@endif
<li class="nav-item">
    <a href="{{ route('registrationDetails.index') }}"
       class="nav-link {{ Request::is('registrationDetails*') ? 'active' : '' }}">
        <p>Registration Details</p>
    </a>
</li>




