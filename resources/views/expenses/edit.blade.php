@extends('layouts.app')

@section('content')
    <h1>Edit Expense</h1>
    <form action="{{ route('expenses.update', $expense) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ $expense->name }}" required>
        <label for="amount">Amount:</label>
        <input type="number" id="amount" name="amount" step="0.01" value="{{ $expense->amount }}" required>
        <label for="date">Date:</label>
        <input type="date" id="date" name="date" value="{{ $expense->date->format('Y-m-d') }}" required>
        <button type="submit">Update</button>
    </form>
@endsection
