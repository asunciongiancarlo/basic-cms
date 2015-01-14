<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li>     {{ link_to('users', 'Users', array('class'               =>'navbar-brand'))     }}    </li>
        <li>     {{ link_to('blogs', 'Blogs', array('class'               =>'navbar-brand'))     }}    </li>
        <li>     {{ link_to('categories', 'Categories', array('class'     =>'navbar-brand'))     }}    </li>
        <li>     {{ link_to('banners', 'Banners', array('class'           =>'navbar-brand'))     }}    </li>
        <li>     {{ link_to('static_pages', 'Static Pages', array('class' =>'navbar-brand'))     }}    </li>
        <li>     {{ link_to('cms_messages', 'Messages', array('class'     =>'navbar-brand'))     }}    </li>
        <li>     {{ link_to('/', '| Front End', array('class'             =>'navbar-brand', 'target'=>'_blank'))     }}     </li>
      </ul>
      <p class="navbar-text navbar-right">Signed in as <a href="#" class="navbar-link">{{ $currentUser->username }}</a>  </p>
    </div><!-- /.navbar-collapse -->
     
  </div><!-- /.container-fluid -->
</nav>


