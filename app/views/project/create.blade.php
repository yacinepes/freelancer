



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign-Up: A Laravel Form</title>
    <style>
        body {
      width: 800px;
      margin: 20px auto;  
    }
        label {
            display: block;
            padding-top: 1em;
        }
        input[type="submit"] {
            display: block;
            margin-top: 2em;
        }
        textarea {
            display: block;
            margin-bottom: 1em;
        }
        input[type="checkbox"] {
            display: inline-block;
            margin-top: 1em;
        }
        label[for="agree"] {
            display: inline;
        }

    </style>
</head>

<body>
<h1>Newsletter sign up</h1>
{{ Form::open(['action'=>'projectController@store']) }}

     {{ Form::label('person', 'Email Address') }}
     {{ Form::text('person') }}

   

    {{ Form::label('title', 'Comments') }}
    {{ Form::textarea('title', '', array('placeholder' => 'What are your interests?')) }}
     
   
     
     {{ Form::submit('Sign Up') }}

{{ Form::close() }}
</body>
</html>

