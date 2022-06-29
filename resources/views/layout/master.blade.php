<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Bioskop</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" > 
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script> 
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>

<body>
<div class="container">
  <div class="row">
    <div class="col-lg-12 margin-tb">
      <div class="pull-left">
        <a class="btn btn-light" href="{{ route('bioskop.index') }}"> Bioskop</a>
      </div>
      <div class="pull-left">
        <a class="btn btn-light" href="{{ route('film.index') }}"> Film</a>
      </div>
      <div class="pull-right">
        <a class="btn btn-light" href="{{ route('tiket.index') }}"> Tiket</a>
      </div>
    </div>
  </div>
</div>
</body>
</html>