<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Beranda - Bioskop</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" > 
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script> 
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>

<body>
<div class="container mt-2">
  
  <div class="row">
    <div class="col-lg-12 margin-tb">
      <div class="pull-left">
        <h3>Beranda - Bioskop</h3>
      </div>
      <div class="pull-right mb-2">
        <a class="btn btn-success" href="{{ route('bioskop.create') }}"> Tambah</a>
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
      <th>Nama</th>
      <th>Telepon</th>
      <th>Alamat</th>
      <th width="15%" class="text-center">Action</th>
    </tr>
  @foreach ($bioskop as $data)
    <tr>
      <td>{{ $data->id }}</td>
      <td>{{ $data->nama_bioskop }}</td>
      <td>{{ $data->telepon_bioskop }}</td>
      <td>{{ $data->alamat_bioskop }}</td>
      <td class="text-center">
        <form action="{{ route('bioskop.destroy',$data->id) }}" method="Post">
          <a class="btn btn-primary" href="{{ route('bioskop.edit',$data->id) }}">Edit</a>
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger">Delete</button>
        </form>
      </td>
    </tr>
  @endforeach
  </table>
  {!! $bioskop->links() !!}
</body>
</html>