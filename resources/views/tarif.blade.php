@extends('dashboard')

@section('content')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Data Tarif</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Tarif</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <a href="{{ route('addtarif') }}"><button class="btn btn-primary">Tambahkan Data Daya</button></a>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Daya</th>
                  <th>Tarif</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($data as $tarif)
                    
                <tr>
                  
                  <td>{{$tarif->id_tarif}}</td>
                  <td>{{$tarif->daya}}</td>
                  <td>{{$tarif->tarifperkwh}}</td>
                  <td>
                  <a href="{{ route('edittarif',$tarif ->id_tarif) }}"><button class="btn btn-success">Edit</button></a>
                  <a href="{{ route('deletetarif', $tarif ->id_tarif) }}"><button class="btn btn-danger">Delete</button></a>
                  </td>
                </tr>
                <tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
      </div>
    </div>
  </div>
</section>
@endsection