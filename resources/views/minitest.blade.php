@extends('layouts.master')
@section('title', 'MiniTest - Supermarket Bill')
@section('content')
<div class="container mt-4">
    <div class="card">
        <div class="card-header">
            <h4>Supermarket Bill</h4>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>Item</th>
                        <th>Quantity</th>
                        <th>Price per Unit</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    @php $totalBill = 0; @endphp
                    @foreach($bill as $item)
                    <tr>
                        <td>{{ $item['item'] }}</td>
                        <td>{{ $item['quantity'] }}</td>
                        <td>${{$item['price']}}</td>
                        <td>${{ $item['quantity'] * $item['price'] }}</td>
                    </tr>
                    @php $totalBill += $item['quantity'] * $item['price']; @endphp
                    @endforeach
                </tbody>
                <tfoot>
                    <tr class="table-info">
                        <td colspan="3"><strong>Total Amount</strong></td>
                        <td><strong>${{$totalBill }}</strong></td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
@endsection
