<nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="">Home</a></li>
              </ul>
                
              <ul class="nav navbar-nav navbar-right">
           	    <li><a href="./">{{Auth::user()->username}}<span class="sr-only"></span></a></li>
          	    <li><a href="/logout">Log out</a></li>
         	  </ul>



            </div>
          </div>
</nav>
