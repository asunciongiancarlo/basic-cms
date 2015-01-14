@extends('home_page/default')
@section('content')
<?php 
extract($data);
extract($product);
?>
    <div class="container marketing" style="margin-top: 88px;">
	    <?php print_r($breadCrumbs); ?>
		<?php  print_r($categories); ?>
		<div class="jumbotron"> 
			<div id="galleria"> 
			@foreach($images as $image)
				<a href="{{ URL().'/img/original/'.$image->image_name }}" >
					{{ HTML::image('/img/thumbnail/'.$image->image_name, null, 
						array('data-big'=>URL().'/img/original/'.$image->image_name,
						"data-title"=> $form_data['blog_title'],
						"data-description"=> $form_data['blog_content']						
						));
					 }}
				</a>
			@endforeach
			</div>
			<h3> 
				{{ $form_data['blog_title']   }} 
			</h3>
			<h5>
				<i>{{ $form_data['blog_intro']   }}</i>
			</h5>
				 {{ $form_data['blog_content'] }}  
			<p class='blogPrice'> 
				₱ {{ number_format($form_data['price'], 2, '.', ',')   }} 
				  {{ ($form_data['blog_sale']=='y') ? '- SALE!!!' : '' }}  
			</p>
			
			<!-- RELATED PRODUCTS BASED ON CURRENT CATEGORY -->
			@if($related_products)
			<hr class="featurette-divider ">
			<h3> Related Items </h3>
			 @foreach($related_products as $blog)
			 <div class="col-sm-6 col-md-4">
		        <div class="thumbnail {{ isThisANewItem($blog->created_at) }}">
		        <!-- ADD NEW LABEL -->
		        @if(isThisANewItem($blog->created_at)=='NEW')
		        	<span class='newLabel'>NEW ITEM</span>
		        @else
					<span class='newLabel'>&nbsp;</span>
		        @endif
		           {{ HTML::image('img/thumbnail/'.$blog->blog_image, null ) }}
		          <div class="caption">
		            <h3 title='{{ $blog->blog_title }}'>{{ Str::limit($blog->blog_title,50) }}</h3>
		            <p> {{ Str::limit($blog->blog_intro, 50) }} </p>
		            <p class='blogPrice'>
						₱ {{ number_format($blog->price, 2, '.', ',')    }} 
	            	  	  {{ ($blog->blog_sale=='y') ? '- SALE!!!' : '' }} 
		            </p>
		            <p> {{ link_to('/preview_item/'.$blog->id, 'View Details', array("class"=>"btn btn-primary", "role"=>"button")) }} </p>
		          </div>
		        </div>
	      	 </div>
	      	 @endforeach
			@else
			<p> No uploaded items yet. </p>
			@endif
		</div>
	    <hr class="featurette-divider">
    </div><!-- /.container -->
	
	<script type="text/javascript">
	// Load the classic theme
    Galleria.loadTheme("../js/galleria.classic.min.js");
    // Initialize Galleria
    Galleria.run('#galleria');
    Galleria.ready(function() {
    this.attachKeyboard({
        left: this.prev,
        right: this.next
    	});
	});
	</script>
 <?php 
 function isThisANewItem($date_from_user)
 {
 	// Convert to timestamp
	$start_ts = strtotime(date('Y-m-d', strtotime('+5 days', strtotime(date('Y-m-d H:m:s'))))); 
	$end_ts   = strtotime(date('Y-m-d', strtotime('-5 days', strtotime(date('Y-m-d H:m:s'))))); 
	$user_ts  = strtotime(date('Y-m-d', strtotime('+0 days', strtotime(date($date_from_user))))); 
	
	// Check that user date is between start & end
	if(!($user_ts >= $start_ts) && ($user_ts <= $end_ts)) 
		echo '';
	else 												  
		return 'NEW';	
 } 
 ?>  
@stop



