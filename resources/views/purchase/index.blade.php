@extends('layout.app')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Purchase list </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('cars.index') }}"> Car List</a>
                <a class="btn btn-success" href="{{ route('purchase.create') }}"> New Purchase</a>
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
            <th>Car Name</th>
            <th>Supplier</th>
            <th>Quantity</th>
        </tr>
        @foreach ($purchases as $purchase)
        <tr>
            <td>{{ $purchase->name }}</td>
            <td>{{ $purchase->supplier }}</td>
            <td>{{ $purchase->quantity }}</td>
            
        </tr>
        @endforeach
    </table>

@endsection