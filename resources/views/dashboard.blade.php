@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Dashboard</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Total Expenses</h5>
            <p class="card-text">{{ $totalExpenses }}</p>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Total Revenues</h5>
            <p class="card-text">{{ $totalRevenues }}</p>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Balance</h5>
            <p class="card-text">{{ $balance }}</p>
        </div>
    </div>
    <h2>Latest Expenses</h2>
    <ul>
        @foreach($latestExpenses as $expense)
            <li>{{ $expense->description }} - {{ $expense->amount }}</li>
        @endforeach
    </ul>
</div>

@endsection