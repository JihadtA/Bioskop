<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Beranda - Film</title>
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
        <h3>Beranda - Film</h3>
      </div>
    </div>
  </div>

  @if ($message = Session::get('success'))
    <div class="alert alert-success">
      <p>{{ $message }}</p>
    </div>
  @endif

  <div class="table-responsive">
  <table class="table table-bordered table-hover text-center" id="table_anc" style="overflow-x: auto;">
    <thead>
      <tr class="bg-success text-white">
        <th>Id</th>
        <th width="30%">Judul Film</th>
        <th width="30%">Sutradara</th>
        <th width="30%">Sinopsis</th>
        <th>Tahun Rilis</th>
        <th>Rating</th>
        <th>Harga</th>
        <th>Genre Id</th>
        <th>Created</th>
        <th>Updated</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($films as $keys => $film)
        <tr>
          @foreach ($film as $key => $item)
            <th>{{$item}}</th>
          @endforeach
        </tr>
      @endforeach
    </tbody>
  </table>
  </div>
</div>
</body>
</html>