
  <!-- Right navbar links -->
  
  <a style="position: absolute; right: 10px;" class="btn btn-success " href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
          <i class="fas fa-sign-out-alt"></i>      {{ __('Deconnexion') }} 
            </a> 


            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
</nav>
<!-- /.navbar -->