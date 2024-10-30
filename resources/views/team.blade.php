@extends('layouts.APPa')

@section('content')

<style>
    /* General Styles */
    .ec-main-section {
        padding-top: 20px;
    }

    /* Employee Detail Section */
    .employee-detail-container {
        display: flex;
        align-items: flex-start;
        gap: 20px;
        margin-bottom: 30px;
    }

    .employee-image {
        width: 300px;
        height: auto;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .employee-info {
        font-family: Arial, sans-serif;
        max-width: 600px;
    }

    .employee-info h2 {
        font-size: 26px;
        margin-bottom: 10px;
    }

    .employee-info p {
        font-size: 16px;
        line-height: 1.6;
        color: #555;
        margin-bottom: 15px;
    }

    .employee-info ul {
        list-style-type: none;
        padding: 0;
    }

    .employee-info ul li {
        font-size: 16px;
        margin-bottom: 10px;
    }

    .employee-info ul li strong {
        color: #333;
    }

    /* Work Image Styles */
    .work-image {
        width: 100%;
        height: 200px;
        object-fit: cover;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    /* Button Styles */
    .ec-submit input[type="submit"] {
        background-color: #e5a427;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
        width: 100%;
        max-width: 200px;
        margin: 20px 0;
    }

    /* Experience Section */
    .ec-process-list {
        margin-top: 30px;
    }

    .ec-process-list li {
        display: flex;
        align-items: center;
        margin-bottom: 15px;
    }

    .ec-process-list .num {
        background-color: #e5a427;
        color: #fff;
        font-size: 18px;
        font-weight: bold;
        padding: 10px 15px;
        border-radius: 50%;
        margin-right: 15px;
    }

    /* Quick Contact Form */
    .ec-form input[type="text"],
    .ec-form input[type="email"],
    .ec-form input[type="submit"],
    .ec-form textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 14px;
    }
</style>

<div class="ec-main-content">
    <div class="ec-main-section">
        <div class="container">
            <!-- Employee Detail Section -->
            <div class="row">
                <div class="col-md-12 employee-detail-container">
                    <!-- Employee Image -->
                    <figure>
                        <img src="{{ asset('img/' . $employee->image) }}" alt="{{ $employee->first_name }} {{ $employee->last_name }}" class="employee-image">
                    </figure>
                    <!-- Employee Info -->
                    <div class="employee-info">
                        <h2>About {{ $employee->first_name }} {{ $employee->last_name }}</h2>
                        <p>{{ $employee->description }}</p>
                        <ul>
                            <li><strong>Phone Number:</strong> {{ $employee->phone_number }}</li>
                            <li><strong>Email:</strong> <a href="mailto:{{ $employee->email }}">{{ $employee->email }}</a></li>
                            <li><strong>Joined:</strong> {{ $employee->created_at->format('Y/m/d') }}</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Work Gallery Section -->
            <h3>Some work from {{ $employee->first_name }}</h3>
            <div class="col-md-12">
                <div class="ec-team ec-modren-team">
                    <ul class="row">
                        @foreach ($works as $work)
                        <li class="col-md-3">
                            <div class="ec-team-wrapper">
                                <figure>
                                    <img src="{{ asset('img/works/' . $work->image) }}" alt="Work Image" class="work-image">
                                </figure>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <!-- Book Now Button -->
            <div class="ec-form">
                <form action="{{ route('booknow', ['employeeId' => $employee->id]) }}" method="GET">
                    <p class="ec-submit"><input type="submit" value="Book Now"></p>
                </form>
            </div>

            <!-- Experience Section -->
            <div class="clearfix"></div>
            <div class="ec-content-title">
                <h2>Experience</h2>
            </div>
            <ul class="ec-process-list">
                <li>
                    <span class="num">1</span>
                    <div class="ec-text">
                        <h6>25% Off All Services on Your First Visit</h6>
                        <p>This forward much far about reciprocating so one yikes informal conjoint ...</p>
                    </div>
                </li>
                <li>
                    <span class="num">2</span>
                    <div class="ec-text">
                        <h6>50% Off All Services on Your First Visit</h6>
                        <p>Far darn much hello after much hummed that much this...</p>
                    </div>
                </li>
            </ul>

            <!-- Quick Contact Form -->
          




   <!-- Comments Section -->
   <div id="eccomments">
                            <div class="ec-content-title">
                                <h2>{{ $employee->comments->count() }} Comments</h2>
                            </div>
                            <ul>
                                @foreach($employee->comments as $comment)
                                <li>
                                    <div class="thumblist">
                                        <ul>
                                            <li>
                                
                                                <div class="text">
                                                    <a href="#">{{ $comment->user->name }}</a> 
                                                    <time datetime="{{ $comment->created_at }}"><i class="fa fa-clock-o"></i> {{ $comment->created_at->format('d M Y h:i A') }}</time>
                                                    <p>{{ $comment->content }}</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>

                        <!-- Comment Submission Form -->
                        @if(auth()->check())
                            <div class="ec-form">
                                <div class="ec-content-title">
                                    <h2>Leave a Review</h2>
                                </div>
                                <form action="{{ route('comments.store') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="employee_id" value="{{ $employee->id }}">
                                    <p class="ec-comment"><textarea name="content" placeholder="Your review" required></textarea></p>
                                    <p class="ec-submit"><input type="submit" value="Post Comment"></p>
                                </form>
                            </div>
                        @else
                            <p class="text-center">Please <a href="{{ route('login') }}">login</a> to leave a comment.</p>
                        @endif

                    </div>
                </div>





        </div>
    </div>
</div>

@endsection
