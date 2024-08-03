@extends('layouts.app')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <!-- Dashboard Header -->
    <div class="row mb-4">
        <div class="col-lg-8 mb-4 order-0">
            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="col-sm-7">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Congratulations 🎉</h5>
                            <a href="javascript:;" class="btn btn-sm btn-outline-primary">View Badges</a>
                        </div>
                    </div>
                    <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                            <img
                                src="{{ asset('img/illustrations/man-with-laptop-light.png') }}"
                                height="140"
                                alt="View Badge User"
                                data-app-dark-img="{{ asset('img/illustrations/man-with-laptop-dark.png') }}"
                                data-app-light-img="{{ asset('img/illustrations/man-with-laptop-light.png') }}"
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 order-1">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img
                                        src="{{ asset('img/icons/unicons/chart-success.png') }}"
                                        alt="chart success"
                                        class="rounded"
                                    />
                                </div>
                                <div class="dropdown">
                                    <button
                                        class="btn p-0"
                                        type="button"
                                        id="cardOpt3"
                                        data-bs-toggle="dropdown"
                                        aria-haspopup="true"
                                        aria-expanded="false"
                                    >
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                        <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                    </div>
                                </div>
                            </div>
                            <span class="fw-semibold d-block mb-1">Revenu</span>
                            <h3 class="card-title mb-2">{{ $totalRevenues }}</h3>
                            <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +72.80%</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img
                                        src="{{ asset('img/icons/unicons/wallet-info.png') }}"
                                        alt="Credit Card"
                                        class="rounded"
                                    />
                                </div>
                                <div class="dropdown">
                                    <button
                                        class="btn p-0"
                                        type="button"
                                        id="cardOpt6"
                                        data-bs-toggle="dropdown"
                                        aria-haspopup="true"
                                        aria-expanded="false"
                                    >
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                                        <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                    </div>
                                </div>
                            </div>
                            <span>Total Expense</span>
                            <h3 class="card-title text-nowrap mb-1">{{ $totalExpenses }}</h3>
                            <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.42%</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Section -->
    <div class="row">
        <!-- Total Expenses -->
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Total Expenses</h5>
                    <p class="card-text">{{ $totalExpenses }}</p>
                </div>
            </div>
        </div>

        <!-- Total Revenues -->
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Total Revenues</h5>
                    <p class="card-text">{{ $totalRevenues }}</p>
                </div>
            </div>
        </div>

        <!-- Balance -->
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Balance</h5>
                    <p class="card-text">{{ $balance }}</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Latest Expenses -->
    <h2 class="mt-4">Latest Expenses</h2>
    <ul>
        @foreach($latestExpenses as $expense)
            <li>{{ $expense->description }} - {{ $expense->amount }}</li>
        @endforeach
    </ul>
</div>
@endsection
