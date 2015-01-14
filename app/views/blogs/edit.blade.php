@extends('layouts/default')
@section('content')
	<h3>Edit Blog</h3>

	{{ Form::open(array('id'=>'blogForm','url'=>'blogs','files'=>'true')) 							}}	
	{{ Form::label('Title:') 																		}}
	
	{{ Form::hidden('blod_id',null, array('id'=>'blog_id')) 										}}
	{{ Form::text('blog_title',null, array('id'=>'blog_title','data-parsley-required'=>'true')) 	}}
	<br/>
	{{ Form::label('Body:') 																		}}
	{{ Form::textarea('blog_content',null, ['size'=>'30x5'])										}}
	<br/>
	{{ Form::label('Publish:') 																		}}
	{{ Form::select('blog_publish', 
					array(''=>'select', 
						  'y' => 'Yes', 
						  'n' => 'No'), 
					null, 
					array(
						'id'=>'blog_publish',
						'data-parsley-required'=>'true', 'data-parsley-trigger'=>"change"))			}}
	<br/>
	{{ Form::label('Image:') 																		}}
	{{ Form::file('blog_image') 																	}}
	{{ Form::submit('Save', array('id'=>'btnSave','class'=>'addBtnFireUp')) 						}}
	{{ Form::close() 																				}}	

<script type="text/javascript">
	$('#blogForm').parsley();
	CKEDITOR.replace('blog_content');
</script>	

@stop