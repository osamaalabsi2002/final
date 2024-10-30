@extends('layouts.APPa')

@section('content')

<style>
    .work-image {
        width: 100%;
        height: 200px;
        object-fit: cover;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
</style>

<div class="ec-minheader">
    <div class="ec-minheader-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="ec-page-title">
                        <h1>Styler List Without Sidebar</h1>
                        <img src="{{ asset('images/title-strip.png') }}" alt="">
                        <p>But you can get great hand and start reflecting on the type of lifetime results at home.</p>
                    </div>
                    <ul class="ec-breadcrumb">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="#">Team</a></li>
                        <li class="active"><a href="#">Styler List</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Main Content -->
<div class="ec-main-content">

    <!-- Search Form -->
    <div class="container mt-4">
    <form action="{{ route('team3.index') }}" method="GET">

            <div class="form-group">
                <input type="text" name="search" class="form-control" placeholder="Search Styler by name" value="{{ request('search') }}">
            </div>
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div>

    <!-- Employee List Section -->
    <div class="ec-main-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="ec-team ec-teamlist-view">
                        <ul class="row">
                            @foreach ($employees as $employee)
                                <li class="col-md-12">
                                    <div class="ec-team-wrap">
                                        <figure>
                                            <!-- Link to the employee's detail page -->
                                            <a href="{{ url('team/' . $employee->id) }}">
                                                <!-- Employee Image -->
                                                <img href="{{ url('team/' . $employee->id) }}" src="{{ asset('img/' . $employee->image) }}" alt="{{ $employee->first_name }} {{ $employee->last_name }}" class="work-image">
                                            </a>
                                        </figure>
                                        <div class="ec-team-information">
                                            <h2><a href="{{ url('team/' . $employee->id) }}">{{ $employee->first_name }} {{ $employee->last_name }}</a></h2>
                                            <span>{{ $employee->position }}</span>
                                            <p>{{ $employee->description }}</p>

                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>

                        <!-- Pagination Links -->
              
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
