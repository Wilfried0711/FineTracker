@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Expense Details</h1>

    <div class="card">
        <div class="card-header">
            <h2>{{ $expense->name }}</h2>
        </div>
        <div class="card-body">
            <p><strong>Amount:</strong> ${{ number_format($expense->amount, 2) }}</p>
            <p><strong>Date:</strong> {{ $expense->date->format('d/m/Y') }}</p>
            <p><strong>Category:</strong> {{ $expense->category->name }}</p>
            <p><strong>User:</strong> {{ $expense->user->name }}</p> <!-- Affiche le nom de l'utilisateur -->

            <!-- Liens pour éditer ou supprimer la dépense -->
            <a href="{{ route('expenses.edit', $expense->id) }}" class="btn btn-warning">Edit</a>

            <form action="{{ route('expenses.destroy', $expense->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>

            <!-- Lien pour revenir à la liste des dépenses -->
            <a href="{{ route('expenses.index') }}" class="btn btn-secondary">Back to List</a>
        </div>
    </div>
</div>

@endsection
