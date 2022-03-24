@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-10">

            <h1>Staff {{ $staff->name }}</h1>
        </div>
        <div class="col-2">
            <a href="/staffs" class="btn btn-outline-primary float-end">Staff List</a>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h4>{{ $staff->name }}</h4>
            <p><strong>{{ $staff->email }}</strong></p>
            <p>{{ $staff->phone }}</p>
            <p>{{ $staff->address }}</p>
        </div>
    </div>
</div>

@endsection
