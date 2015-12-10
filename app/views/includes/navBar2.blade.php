<div class="container">
  <font size="3" color="white">
  <nav class="navbar navbar-inverse">
  <div class="navbar-header">
    <a class="navbar-brand" href="{{ URL::to('/home') }}">Home</a>
  </div>
  <ul class="nav navbar-nav">
    <li><a href="{{ URL::to('/order') }}">Order Pizza</a></li>
    <li><a href="{{ URL::to('/viewAllOrders') }}">Manage Orders</a>
  </ul>

  <ul class="nav navbar-nav pull-right">
    <li><a href="{{ URL::to('/users/' . Auth::user()->id) }}">{{ Auth::user()->username }}</a></li>
    <li><a href="{{ URL::to('/logout') }}">Logout</a>
  </ul>
  </nav>
  </font>
</div>