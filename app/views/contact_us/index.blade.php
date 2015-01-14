@extends('home_page/default')
@section('content')
<?php 
extract($data);
?>

<hr style="clear:both"/>
<div class="container marketing" style="margin-top: 88px;">
	 <div class="row featurette">
        <div class="col-md-5">
          {{ $page_data_map->static_page_content }}
        </div>
        <div class="col-md-7">
           {{ $page_data->static_page_content }}  
        </div>
      </div>

</div>
@stop



