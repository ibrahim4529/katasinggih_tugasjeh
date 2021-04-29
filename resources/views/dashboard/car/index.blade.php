@extends('dashboard.base')
@section('content')
<div class="container-fluid">
    <div class="animated fadeIn">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
          <div class="card">
              <div class="card-header">
                  <a href="{{ route('cars.create') }}" class="btn btn-success">Tambah Data Mobil</a>
            </div>

              <div class="card-body">
                  <table class="table table-responsive-sm table-striped">
                  <thead>
                    <tr>
                      <th>Merk</th>
                      <th>Warna</th>
                      <th>Harga Sewa</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($cars as $car)
                      <tr>
                        <td>{{ $car->name }}</td>
                        <td>{{ $car->color }}</td>
                        <td>{{ $car->price }}</td>
                        {{-- <td>
                          <a href="{{ url('/cars/' . $car->id) }}" class="btn btn-sm btn-primary">View</a>
                          <a href="{{ url('/cars/' . $car->id . '/edit') }}" class="btn btn-sm btn-primary">Edit</a>

                          <form action="{{ route('cars.destroy', $car->id ) }}" method="POST">
                              @method('DELETE')
                              @csrf
                              <button class="btn btn-sm btn-danger">Delete car</button>
                          </form>
                        </td> --}}
                        <td class="fit"  >
                            <div class="btn-group btn-group-justified" >
                                <a href="{{ url('/cars/' . $car->id) }}" class="btn btn-sm btn-primary">View</a>
                                <a href="{{ url('/cars/' . $car->id . '/edit') }}" class="btn btn-sm btn-primary">Edit</a>
                                <form action="{{ route('cars.destroy', $car->id ) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-sm btn-danger">Delete car</button>
                                </form>
                            </div>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
