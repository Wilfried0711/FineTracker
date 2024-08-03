@extends('layouts.app')

@section('content')
    <h1>Expenses</h1>
    <a href="{{ route('expenses.create') }}">Add New Expense</a>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Amount</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($expenses as $expense)
                <tr>
                    <td>{{ $expense->name }}</td>
                    <td>{{ $expense->amount }}</td>
                    <td>{{ $expense->date->format('Y-m-d') }}</td>
                    <td>
                        <a href="{{ route('expenses.show', $expense) }}">View</a>
                        <a href="{{ route('expenses.edit', $expense) }}">Edit</a>
                        <form action="{{ route('expenses.destroy', $expense) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
