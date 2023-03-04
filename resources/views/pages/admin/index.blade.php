@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="card bg-info text-white">
                <div class="card-body">
                    <div class="dashboard-info row">
                        <div class="info-text col-md-6">
                            <h5 class="card-title">Welcome back Anna!</h5>
                            <p>Get familiar with dashboard, here are some ways to get started.</p>
                            <ul>
                                <li>Check some stats for your website bellow</li>
                                <li>Sync content to other devices</li>
                                <li>You now have access to File Manager app.</li>
                            </ul>
                            <a href="{{ route('home') }}" class="btn btn-warning m-t-xs">Go to Home</a>
                        </div>
                        <div class="info-image col-md-6"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <div class="">
                        <div class="">
                            <h5 class="card-title">Daily Visitors</h5>
                            <canvas id="visitorsChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="card stat-card">
                <div class="card-body">
                    <h5 class="card-title">New Customers</h5>
                    <h2 class="float-right">45.6K</h2>
                    <p>From last week</p>
                    <div class="progress" style="height: 10px;">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 45%" aria-valuenow="45"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card stat-card">
                <div class="card-body">
                    <h5 class="card-title">Orders</h5>
                    <h2 class="float-right">14.3K</h2>
                    <p>Orders in waitlist</p>
                    <div class="progress" style="height: 10px;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 60%" aria-valuenow="60"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card stat-card">
                <div class="card-body">
                    <h5 class="card-title">Monthly Profit</h5>
                    <h2 class="float-right">45.6$</h2>
                    <p>For last 30 days</p>
                    <div class="progress" style="height: 10px;">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 45%" aria-valuenow="45"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
