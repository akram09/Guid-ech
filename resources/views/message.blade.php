<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title></title>
  
  
  <!-- CSRF Token -->
 <meta name="csrf-token" content="{{ csrf_token() }}"> 
</head>

<body>
<div class="mask rgba-black-light d-flex justify-content-center align-items-center"> 
      <h2>Hello Admin,</h2>
<p>You received an email from : {{ $name }}</p>
<p>Here are the details:</p>
<p>Name: {{ $name }}</p>
<p>Email: {{ $email }}</p>
<p>Subject: {{ $subject }}</p>
<p>Message: {{ $user_message }}</p>
<p>Thank You</p>
 </div>
    
  
</body>

</html>
