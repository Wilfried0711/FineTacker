@extends('layouts.app')

@section('content')
    <h1>Expense Details</h1>
    <p>Name: {{ $expense->name }}</p>
    <p>Amount: {{ $expense->amount }}</p>
    <p>Date: {{ $expense->date->format('Y-m-d') }}</p>
    <a href="{{ route('expenses.edit', $expense) }}">Edit</a>
    <a href="{{ route('expenses.index') }}">Back to List</a>
@endsection
