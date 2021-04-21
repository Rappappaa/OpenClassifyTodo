@extends('/admin.layouts.master')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
    </div>

    <div class="card-deck mb-3 text-center">
        <div class="card mb-4 box-shadow">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">Total # of Users</h4>
            </div>
            <div class="card-body">
                <h1 class="card-title pricing-card-title">{{ Count($users) }}</h1>
                <a href="{{ route('admin_users') }}" type="button" class="btn btn-lg btn-block btn-outline-primary">Go to Users</a>
            </div>
        </div>
        <div class="card mb-4 box-shadow">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">Total # of Lists</h4>
            </div>
            <div class="card-body">
                <h1 class="card-title pricing-card-title">{{ Count($lists) }}</h1>
                <a href="{{ route('admin_lists') }}" type="button" class="btn btn-lg btn-block btn-outline-primary">Go to Lists</a>
            </div>
        </div>
    </div>
    @endsection
