<link href="{{ asset('css/navigation.css') }}" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet">

<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>

    <!-- Combine Notification and Profile dropdown containers -->
    <div class="dropdown-group">
      <div class="dropdown-container">
        <details class="dropdown right">
          <summary class="with-down-arrow">
            <span class="material-symbols-outlined">notifications</span>
          </summary>
          <ul>
            <li>
              <a href="#">
                <span class="material-symbols-outlined">info</span> Notification 1
              </a>
            </li>
            <li>
              <a href="#">
                <span class="material-symbols-outlined">info</span> Notification 2
              </a>
            </li>
            <li class="divider"></li>
            <li>
              <a href="#">
                <span class="material-symbols-outlined">info</span> See All Notifications
              </a>
            </li>
          </ul>
        </details>
      </div>

      <div class="dropdown-container">
        <details class="dropdown right">
          <summary class="avatar">
            <img src="https://gravatar.com/avatar/00000000000000000000000000000000?d=mp">
          </summary>
          <ul>
            <li>
              <p>
                <span class="block bold">Jane Doe</span>
                <span class="block italic">jane@example.com</span>
              </p>
            </li>
            <li>
              <a href="{{ route('profile.edit') }}">
                <span class="material-symbols-outlined">account_circle</span> Account
              </a>
            </li>
            <li>
              <a href="#">
                <span class="material-symbols-outlined">settings</span> Settings
              </a>
            </li>
            <li>
              <a href="#">
                <span class="material-symbols-outlined">help</span> Help
              </a>
            </li>
            <li class="divider"></li>
            <li>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>

              <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <span class="material-symbols-outlined">logout</span> Logout
              </a>
            </li>
          </ul>
        </details>
      </div>
    </div>
  </div>
</nav>

<script src="{{ asset('js/navigation.js') }}"></script>

