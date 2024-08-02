@extends('layouts.app')

@section('content')
    <h1>Add New Expense</h1>
    <form action="{{ route('expenses.store') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <label for="amount">Amount:</label>
        <input type="number" id="amount" name="amount" step="0.01" required>
        <label for="date">Date:</label>
        <input type="date" id="date" name="date" required>
        <button type="submit">Save</button>
    </form>
@endsection
