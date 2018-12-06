@extends ('main')
@section ('title', '| Register')
@section ('content')

	<div class = "row">
		<div class = "col-md-6 col-md-offset-3">

		{!! Form::open() !!}

		{{ Form::label('first_name' , "First Name:")}} <span class ='red'>*</span>
		{{ Form::text('first_name', null, ['class' => 'form-control'])}}
		<br>
		{{ Form::label('middle_name' , "Middle Name:")}}
		{{ Form::text('middle_name', null, ['class' => 'form-control'])}}
		<br>
		{{ Form::label('last_name' , "Last Name:")}} <span class ='red'>*</span>
		{{ Form::text('last_name', null, ['class' => 'form-control'])}}
		<br>
		{{ Form::label('birth', 'Date Of Birth:')}} <span class ='red'>*</span>
		{{ Form::date('birth', null, ['class' => 'form-control'])}}
		<br>
		{{ Form::label('gender' , "Gender:")}} <span class ='red'>*</span>
		Male {{ Form::checkbox('gender', '0') }}  Female {{ Form::checkbox('gender', '1') }} Other {{ Form::checkbox('gender', '2') }} 
		<br><br>
		{{ Form::label('email' , "Email:")}} <span class ='red'>*</span>
		{{ Form::text('email', null, ['class' => 'form-control'])}}
		<br>
		 {{ Form::label('phone', 'Phone:')}} <span class ='red'>*</span>
         {{ Form::number('phone', null, array('class' => 'form-control'))}}
         <br>
         {{ Form::label('primary_address', 'Primary Address:')}} <span class ='red'>*</span>
         {{ Form::text('primary_address', null, array('class' => 'form-control'))}}
         <br>
         {{ Form::label('city' , "City:")}} <span class ='red'>*</span>
		 {{ Form::text('city', null, ['class' => 'form-control'])}}
		 <br>
		 {{ Form::label('state' , "State:")}} <span class ='red'>*</span>
		 {{ Form::text('state', null, ['class' => 'form-control'])}}
		 <br>
		 {{ Form::label('zip' , "Zip:")}} <span class ='red'>*</span>
		 {{ Form::number('zip', null, ['class' => 'form-control'])}}
		 <br>
		 {{ Form::label('alt_address', 'Alternate Address:')}}
         {{ Form::text('alt_address', null, array('class' => 'form-control'))}}
         <br>
         {{ Form::label('alt_city' , "Alternate City:")}}
		 {{ Form::text('alt_city', null, ['class' => 'form-control'])}}
		 <br>
		 {{ Form::label('alt_state' , "Alternate State:")}}
		 {{ Form::text('alt_state', null, ['class' => 'form-control'])}}
		 <br>
		 {{ Form::label('alt_zip' , "Alternate Zip:")}}
		 {{ Form::number('alt_zip', null, ['class' => 'form-control'])}}
		 <br>
		 {{ Form::label('position' , "Position: ")}}
		 {{ Form::select('position', array('admin' => 'Admin', 'staff' => 'Staff', 'teacher' => 'Teacher', 'student' => 'Student', 'faculty' => 'Faculty'), 'teacher') }}
		 <br><br>
		{{ Form::label('password', 'Password:')}} <span class ='red'>*</span>
		{{ Form::password('password',['class' => 'form-control'])}}
		<br>
		{{ Form::label('password_confirmation', 'Confirm Password:')}} <span class ='red'>*</span>
		{{ Form::password('password_confirmation', ['class' => 'form-control'])}}
		<br>
		{{ Form::submit('Register', ['class' => 'btn btn-primary btn-block form-spacing-top'])}}
		
		{!! Form::close() !!}
		
		</div>	
	</div>
@endsection