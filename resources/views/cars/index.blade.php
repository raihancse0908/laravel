@extends('layout.app')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Car Shop </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('purchase.index') }}"> Purchase List</a>
                <a class="btn btn-success" href="{{ route('cars.create') }}"> Add New Car</a>
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
            <th>Name</th>
            <th>Brand/Model</th>
            <th>Available Quantity</th>
        </tr>
        @foreach ($cars as $car)
        <tr>
            <td>{{ $car->name }}</td>
            <td>{{ $car->description }}</td>
            <td>
            @php
                $total_quantity = 0;
            @endphp
            @foreach($car->purchases as $purchase)
                @php
                    $total_quantity = $total_quantity + $purchase->quantity;
                @endphp
            @endforeach
            {{ $total_quantity }}
            </td>
            <td>
                <form action="{{ route('cars.destroy',$car->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('cars.show',$car->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('cars.edit',$car->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

@endsection