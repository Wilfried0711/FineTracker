<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Expense;

class ExpenseController extends Controller
{
    public function index()
        {
            $expenses = Expense::where('user_id', auth()->id())->get();
            return view('expenses.index', compact('expenses'));
        }

    public function create()
        {
            $categories = auth()->user()->categories; 
            return view('expenses.create', compact('categories'));
        }

    public function store(Request $request)
        {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'amount' => 'required|numeric|min:0',
                'expense_date' => 'required|date',
                'category_id' => 'required|exists:categories,id',
            ]);

            $validated['user_id'] = auth()->id(); 

            Expense::create($validated);

            return redirect()->route('expenses.index')->with('success', 'Expense created successfully.');
        }

    public function show($id)
        {
            $expense = Expense::where('id', $id)->where('user_id', auth()->id())->firstOrFail();
            return view('expenses.show', compact('expense'));
        }

    public function edit($id)
        {
            $expense = Expense::where('id', $id)->where('user_id', auth()->id())->firstOrFail();
            $categories = auth()->user()->categories; // Récupère les catégories associées à l'utilisateur connecté
            return view('expenses.edit', compact('expense', 'categories'));
        }

    public function update(Request $request, $id)
        {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'amount' => 'required|numeric|min:0',
                'expense_date' => 'required|date',
                'category_id' => 'required|exists:categories,id',
            ]);

            $expense = Expense::where('id', $id)->where('user_id', auth()->id())->firstOrFail();

            $expense->update($validated);

            return redirect()->route('expenses.index')->with('success', 'Expense updated successfully.');
        }

    public function destroy($id)
        {
            $expense = Expense::where('id', $id)->where('user_id', auth()->id())->firstOrFail();
            $expense->delete();
            return redirect()->route('expenses.index')->with('success', 'Expense deleted successfully.');
        }
}
