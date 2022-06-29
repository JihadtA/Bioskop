<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Beranda - Tiket</title>
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
        <h3>Beranda - Tiket</h3>
      </div>
      <div class="pull-right">
        <a class="btn btn-success" href="{{ route('tiket.create') }}"> Tambah</a>
      </div>
    </div>
  </div>

  @if ($message = Session::get('success'))
    <div class="alert alert-success">
      <p>{{ $message }}</p>
    </div>
  @endif
  <table class="table table-bordered">
    <tr>
      <th>Id</th>
      <th>Bioskop</th>
      <th>Telepon</th>
      <th>Alamat</th>
      <th>Film</th>
      <th>Harga</th>
      <th width="15%" class="text-center">Action</th>
    </tr>
  @foreach ($tiket as $data)
    <tr>
      <td>{{ $data->id }}</td>
      <td>{{ $data->nama_bioskop }}</td>
      <td>{{ $data->telepon_bioskop }}</td>
      <td>{{ $data->alamat_bioskop }}</td>
      <td>{{ $data->judul_film }}</td>
      <td>{{ $data->harga_film }}</td>
      <td class="text-center">
        <form action="{{ route('tiket.destroy',$data->id) }}" method="Post">
          <a class="btn btn-primary" href="{{ route('tiket.edit',$data->id) }}">Edit</a>
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger">Delete</button>
        </form>
      </td>
    </tr>
  @endforeach
  </table>
  {!! $tiket->links() !!}
</div>
</body>
</html>