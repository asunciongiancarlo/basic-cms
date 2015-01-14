{{ $message }}
{{ Form::open(array('url' =>'sessions/store'))  }}
{{ Form::label('username','Username: ') 		}}
{{ Form::text('username') 						}}
{{ Form::label('password','Password: ') 		}}
{{ Form::password('password') 					}}
{{ Form::submit('Log in') 						}}
{{ Form::close() 								}}