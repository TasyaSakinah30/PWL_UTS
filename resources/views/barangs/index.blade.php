@extends('barangs.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                
            </div>
            <div class="float-right my-2">
                <a class="btn btn-warning" href="{{ route('barang.create') }}"> Input Barang</a>
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
            <th>ID Barang</th>
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th>Kategori Barang</th>
            <th>Harga</th>
            <th>Qty</th>
            <th width="280px">Action</th>
        </tr>
        @if (count($posts) > 0)
        @foreach ($posts as $Barang)
        <tr>
 
            <td>{{ $Barang->id }}</td>
            <td>{{ $Barang->kode_barang }}</td>
            <td>{{ $Barang->nama_barang }}</td>
            <td>{{ $Barang->kategori_barang }}</td>
            <td>{{ $Barang->harga }}</td>
            <td>{{ $Barang->qty }}</td>
            <td>
            <form action="{{ route('barang.destroy',$Barang->id) }}" method="POST">
 
                <a class="btn btn-info" href="{{ route('barang.show',$Barang->id) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('barang.edit',$Barang->id) }}">Edit</a>
                @csrf 
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
        </form>
        </td>
    </tr>
    @endforeach
    @endif
 </table>
@endsection