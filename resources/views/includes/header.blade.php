    <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top" style="background-color: #4393E6">
      <button class="navbar-toggler navbar-toggler-right hidden-lg-up" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">Θάλασσα</a>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{ route('dashboard') }}">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="{{ route('customers') }}">Πελάτες</a>
          </li>
           <li class="nav-item active">
            <a class="nav-link" href="{{ route('products') }}">Προϊόντα</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#">Παραγγελίες</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#">Βοήθεια</a>
          </li>
        </ul>
      </div>
    </nav>