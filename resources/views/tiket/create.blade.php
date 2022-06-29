<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah - Tiket</title>
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
                <div class="pull-left mb-2">
                    <h3>Tambah</h3>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('tiket.index') }}"> Back</a>
                </div>
            </div>
        </div>
        @if(session('status'))
            <div class="alert alert-success mb-1 mt-1">
                {{ session('status') }}
            </div>
        @endif

        <br>
        {{-- @foreach ($film as $key => $item)
            {{dd($item)}}
        @endforeach --}}

        {{-- {{$film[0]['sutradara']}} --}}
        
        {{-- @foreach ($film as $key => $item)
            @if ($key == 0)
                {{$item['id']}}
            @endif
        @endforeach --}}

        {{-- @foreach ($film as $fil => $f)
            @if ($fil == 0)
                @foreach ($f as $key => $item)
                    {{$item}}
                @endforeach
            @endif
        @endforeach --}}

        {{-- @foreach ($film as $fil => $f)
            @if ($fil == $num)
                {{$num++}}
                @foreach ($f as $key => $item)
                    {{$item}}
                @endforeach
            @endif
        @endforeach --}}

        <form action="{{ route('tiket.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nama Bioskop:</strong>
                        {{-- <input type="text" id="nama_bioskop" name="nama_bioskop" class="form-control" placeholder="Masukkan Nama Bioskop" autocomplete="off"> --}}
                        <select class="form-control mb-1" name="nama_bioskop" id="nama_bioskop">
                            <option disabled selected>Pilih Bioskop</option>
                            @foreach($bioskops as $bioskop)
                                <option data-row="{{$bioskop}}" value="{{$bioskop->nama_bioskop}}">{{$bioskop->nama_bioskop}}</option>
                            @endforeach
                        </select>
                        @error('nama_bioskop')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nomor Telepon Bioskop:</strong>
                        <input type="text" id="telepon_bioskop" name="telepon_bioskop" class="form-control" placeholder="Masukkan No Bioskop" autocomplete="off">
                        @error('telepon_bioskop')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Alamat Bioskop:</strong>
                        <input type="text" id="alamat_bioskop" name="alamat_bioskop" class="form-control" placeholder="Masukkan Alamat Bioskop" autocomplete="off">
                        @error('alamat_bioskop')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Judul Film:</strong>
                        {{-- <input type="text" id="judul_film" name="judul_film" class="form-control" placeholder="Masukkan Judul Film" autocomplete="off"> --}}
                        <select class="custom-select" id="judul_film" name="judul_film">
                            <option disabled selected>Pilih Judul</option>
                            @foreach ($film as $key => $ui)
                            {{-- @foreach ($film as $ui) --}}
                                {{-- @if ($key == 0) --}}
                                <tr>
                                    <option data-row="{{$ui['harga']}}">{{$ui['judul']}}</option>
                                    {{-- <option value="{{$desa->nama_desa}}" @if (isset($datadasar)) @if ($datadasar->nama_desa == $desa->nama_desa) selected @endif @endif>{{$desa->nama_desa}}</option> --}}
                                </tr>
                                {{-- @endif --}}
                            @endforeach
                        </select>
                        @error('judul_film')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

              <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                      <strong>Harga Film:</strong>
                      <input type="text" id="harga_film" name="harga_film" class="form-control" placeholder="Masukkan Harga Film" autocomplete="off">
                      @error('harga_film')
                          <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                      @enderror
                  </div>
              </div>

                <button type="submit" class="btn btn-primary ml-3">Submit</button>
            </div>
        </form>
    </div>
</body>
<script>
    $(document).ready(function() {
        $(document).on('change', '#nama_bioskop', function(){
            var res   =  $(this).find(':selected').data('row');
            console.log(res);
            $('#telepon_bioskop').val(res.telepon_bioskop);
            $('#alamat_bioskop').val(res.alamat_bioskop);
        });

        $(document).on('change', '#judul_film', function(){
            var res   =  $(this).find(':selected').data('row');
            console.log(res);
            $('#harga_film').val(res);
        });
    });
</script>
</html>