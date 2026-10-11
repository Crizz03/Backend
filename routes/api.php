<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return response()->json([
        "success" => true,
        "data" => [
            "today_income" => 6500,
            "today_expenses" => 470,
            "today_balance" => 6030,
            "monthly_income" => 45000,
            "monthly_expenses" => 12450,
            "monthly_balance" => 32550
        ]
    ]);
});

Route::get('/transactions', function () {
    return response()->json([
        "success" => true,
        "data" => [
            [
                "id" => 1,
                "type" => "income",
                "description" => "Freelance Web Project",
                "category" => "Freelance",
                "amount" => 6500,
                "date" => "2026-10-11"
            ],
            [
                "id" => 2,
                "type" => "expense",
                "description" => "Lunch at Diner",
                "category" => "Food",
                "amount" => 350,
                "date" => "2026-10-11"
            ],
            [
                "id" => 3,
                "type" => "expense",
                "description" => "Jeepney & Taxi Fare",
                "category" => "Transport",
                "amount" => 120,
                "date" => "2026-10-11"
            ],
            [
                "id" => 4,
                "type" => "income",
                "description" => "Monthly Salary",
                "category" => "Salary",
                "amount" => 32000,
                "date" => "2026-10-01"
            ],
            [
                "id" => 5,
                "type" => "income",
                "description" => "Online Consultation",
                "category" => "Business",
                "amount" => 6500,
                "date" => "2026-10-02"
            ],
            [
                "id" => 6,
                "type" => "expense",
                "description" => "Electricity & Internet Bill",
                "category" => "Bills",
                "amount" => 2450,
                "date" => "2026-10-03"
            ],
            [
                "id" => 7,
                "type" => "expense",
                "description" => "New Clothes & Shoes",
                "category" => "Shopping",
                "amount" => 5400,
                "date" => "2026-10-05"
            ],
            [
                "id" => 8,
                "type" => "expense",
                "description" => "Movie Night & Snacks",
                "category" => "Entertainment",
                "amount" => 850,
                "date" => "2026-10-08"
            ]
        ]
    ]);
});

Route::get('/plans', function () {
    return response()->json([
        "success" => true,
        "data" => [
            [
                "id" => 1,
                "category" => "Food & Groceries",
                "budget" => 350,
                "note" => "Lunch and coffee budget for tomorrow",
                "priority" => "High"
            ],
            [
                "id" => 2,
                "category" => "Transport",
                "budget" => 150,
                "note" => "Commute to work and back",
                "priority" => "Medium"
            ],
            [
                "id" => 3,
                "category" => "Bills & Utilities",
                "budget" => 500,
                "note" => "Quick store run or small errand",
                "priority" => "Low"
            ],
            [
                "id" => 4,
                "category" => "Entertainment",
                "budget" => 300,
                "note" => "Gym session and hydration drink",
                "priority" => "Low"
            ]
        ]
    ]);
});

Route::get('/categories', function () {
    return response()->json([
        "success" => true,
        "data" => [
            [
                "id" => 1,
                "name" => "Salary",
                "type" => "income"
            ],
            [
                "id" => 2,
                "name" => "Freelance",
                "type" => "income"
            ],
            [
                "id" => 3,
                "name" => "Business",
                "type" => "income"
            ],
            [
                "id" => 4,
                "name" => "Investments",
                "type" => "income"
            ],
            [
                "id" => 5,
                "name" => "Food",
                "type" => "expense"
            ],
            [
                "id" => 6,
                "name" => "Transport",
                "type" => "expense"
            ],
            [
                "id" => 7,
                "name" => "Bills",
                "type" => "expense"
            ],
            [
                "id" => 8,
                "name" => "Shopping",
                "type" => "expense"
            ],
            [
                "id" => 9,
                "name" => "Entertainment",
                "type" => "expense"
            ],
            [
                "id" => 10,
                "name" => "Health & Fitness",
                "type" => "expense"
            ]
        ]
    ]);
});

Route::get('/reports', function () {
    return response()->json([
        "success" => true,
        "data" => [
            "period" => "October 2026",
            "total_income" => 45000,
            "total_expenses" => 12450,
            "net_balance" => 32550,
            "highest_expense_category" => "Shopping"
        ]
    ]);
});