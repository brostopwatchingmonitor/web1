<nav id="sidebar">
  <!-- Sidebar Header-->
  <div class="sidebar-header d-flex align-items-center">
  </div>
  <!-- Sidebar Navidation Menus-->
  <span class="heading">Main</span>
  <ul class="list-unstyled">
    <li ><a href="{{ url('home') }}"> <i class="icon-home"></i>Home </a></li>
    <li class="active" ><a href="{{ url('faq') }}"> <i class="icon-padnote"></i>Faq</a></li>
    <li ><a href="{{ url('services') }}"> <i class="icon-padnote"></i>Service</a></li>
    {{-- <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Optional</a>
      <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
      </ul>
    </li> --}}
    <li><a href="{{ url('profile') }}"> <i class="icon-logout"></i>Profile</a></li>
  </ul><span class="heading">Extras</span>
</nav>