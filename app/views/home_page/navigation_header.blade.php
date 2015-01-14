
  <div class="navbar-wrapper">
    <div class="container">

      <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
             {{ link_to('/', 'Loida\'s Sidecar', array("class"=>"navbar-brand" )) }}
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="<?php if($active_page=='Home') echo 'active'; ?>">      
                  {{ link_to('/', 'Home') }}
              </li>
              <li class="<?php if($active_page=='Categories') echo 'active'; ?>"> 
                {{ link_to('/lists_of_categories', 'Categories') }} 
              </li>
              <li class="<?php if($active_page=='Contact Us') echo 'active'; ?>"> 
                {{ link_to('/contact_us', 'Contact Us') }}
              </li>
              <li> 
                {{ link_to('#', 'Message Us', array('id'=>'addbtn')) }}
              </li>
            </ul>
            <!-- SEARCH FORM -->
            {{ Form::open(array('url'=>'/search','class'=>'navbar-form navbar-right', 'role'=>'form')) }}
              <div class="form-group">
                {{ Form::text('search_key', $key, array('placeholder'=>'Search Keyword', 'class'=>'form-control')) }}  
              </div>
              <button type="submit" class="btn btn-primary">Search</button>
            {{ Form::close() }}
          <!-- SEARCH FORM -->
          </div>
        </div>
      </nav>

    </div>
  </div>