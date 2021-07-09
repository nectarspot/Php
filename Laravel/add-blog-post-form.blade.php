<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
  @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
  <div class="card">
    <div class="card-header text-center font-weight-bold">
      Registration Form
    </div>
    <div class="card-body">
      <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="store-form">
       @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Name</label>
          <input type="text" id="name" name="name" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email</label>
          <textarea name="email" class="form-control" required=""></textarea>
        </div>
         <div class="form-group">
          <label for="exampleInputEmail1">Phone Number</label>
          <textarea name="phone_number" class="form-control" required=""></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>    
</body>
</html>