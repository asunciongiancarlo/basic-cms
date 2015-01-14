@extends('home_page/default')
@section('content')
<?php 
extract($data);
?>
<!-- NAVBAR
================================================== -->
    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      
        <ol class="carousel-indicators">
          @foreach($banners as $banner)
            <?php $active = ($x==1) ? 'active' : '' ?>
            <li data-target="#myCarousel" data-slide-to="{{ $x++ }}" class="{{ $active }}"></li>
          @endforeach
        </ol>
      
      <div class="carousel-inner" role="listbox">
      <?php $x=1; ?>
      @foreach($banners as $banner)
        <?php $active = ($x==1) ? 'active' : '' ?>
        <div class="item {{ $active }}">
          {{ HTML::image('img/banners/'.$banner->banner_image, $banner->banner_header) }}
          <div class="container">
            <div class="carousel-caption">
              <h1>{{ $banner->banner_header }}</h1>
              <p>{{ $banner->banner_sub_header }}</p>
              @if($banner->banner_link!='#') 
                <p><a class="btn btn-lg btn-primary" href="{{ $banner->banner_link }}" role="button" target="_new">Learn More</a></p>
              @endif
            </div>
          </div>
        </div>
        <?php $x++; ?>
      @endforeach
      </div>
      <a class="left carousel-control" href="http://getbootstrap.com/examples/carousel/#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="http://getbootstrap.com/examples/carousel/#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->
    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
    
    <div class="container marketing">
      <h3 class="HomeFeaturedItems"> Featured Items </h3>
      <!-- Three columns of text below the carousel -->
      <div class="row">
      @foreach($featured_items as $featured_item)
        <div class="col-lg-4">
          {{ HTML::image('img/thumbnail/'.$featured_item->image_name, $featured_item->blog_title, array('class'=>'img-circle')) }}
          <h2> {{ Str::limit($featured_item->blog_title, 50) }} </h2>
          <p>  {{ Str::limit($featured_item->blog_intro, 100) }}</p>
          <p>
            {{link_to('/preview_item/'.$featured_item->blog_id, 'View Details »', array("class"=>"btn btn-default", "role"=>"button"))}}
          </p>
        </div>
      @endforeach
      </div>
      <hr class="featurette-divider">
     
      <!-- Three columns of text below the featured items -->
      <h3 class="HomeFeaturedItems"> Sale Items </h3>
      <div class="row">
      @foreach($sale_items as $sale_item)
        <div class="col-lg-4">
          {{ HTML::image('img/thumbnail/'.$sale_item->image_name, $sale_item->blog_title, array('class'=>'img-circle')) }}
          <h2> {{ Str::limit($sale_item->blog_title, 50) }} </h2>
          <p>  {{ Str::limit($sale_item->blog_intro, 100) }}</p>
          <p>
            {{link_to('/preview_item/'.$sale_item->blog_id, 'View Details »', array("class"=>"btn btn-default", "role"=>"button"))}}
          </p>
        </div>
      @endforeach
      </div>
      <!-- /END THE FEATURETTES -->
    </div><!-- /.container -->
@stop



