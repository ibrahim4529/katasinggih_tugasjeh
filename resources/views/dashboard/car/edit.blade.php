@extends('dashboard.base')

@section('content')

<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-align-justify"></i> {{ __('Tambah Mobil') }}</div>
                    <form method="POST" action="{{ route('cars.update', $car->id) }}">
                        <div class="card-body m-3">
                            @csrf
                            @method("PUT")
                            <div class="form-group row">
                                <label>Merek</label>
                                <input class="form-control" type="text" value="{{ $car->name }}" placeholder="{{ __('Title') }}" name="name"
                                    required autofocus>
                            </div>

                            <div class="form-group row">
                                <label>Warna</label>
                                <input class="form-control" name="color" value="{{ $car->color }}" placeholder="{{ __('Warna..') }}" required>
                            </div>

                            <div class="form-group row">
                                <label>Harga</label>
                                <input type="number" class="form-control" value="{{ $car->price }}" name="price" required />
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <button type="submit" class="btn btn-primary "> Simpan Dulu Gak Sih!</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('javascript')

@endsection
