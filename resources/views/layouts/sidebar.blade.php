<div class="col-md-3 col-offset-md-1 blog-sidebar" style="margin-top:10px;">
          <div class="sidebar-module sidebar-module-inset">
            <h4 style="font-size: 22px; padding-bottom:5px;">About</h4>
            <p>I am a second year computer engineering student willing to learn new frameworks and trynew things. This blog has been made using laravel (PHP based framework). </p>
          </div>
          <div class="sidebar-module">
            <h4 style="font-size: 22px; padding-bottom:5px;">Archives</h4>
          
            <ol class="list-unstyled">
              @foreach($archives as $stats)

              <li> 
              <a href="/?month={{ $stats['month'] }}&year={{ $stats['year']}}"> 
              {{ $stats['month'] . ' ' . $stats['year']}} </a>
              </li>
              @endforeach
            </ol>
          </div>
          <div class="sidebar-module">
            <h4 style="font-size: 22px; padding-bottom:5px;">Elsewhere</h4>
            
            <ol class="list-unstyled">
              <li><a href="https://github.com/sohamchitalia">GitHub</a></li>
              <li><a href="https://www.linkedin.com/in/soham-chitalia-76a79357/">LinkedIn</a></li>
              <li><a href="#">Facebook</a></li>
            </ol>
          </div>
        </div><!-- /.blog-sidebar -->