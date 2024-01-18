@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                </div>

                <div class="container">
                    <h2>Create Video</h2>
                    <form method="POST" action="{{ route('videos.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="videoName">Video Name:</label>
                            <input type="text" class="form-control" id="videoName" name="videoName" required>
                        </div>
                        <div class="form-group">
                            <label for="videoDesc">Video Description:</label>
                            <textarea class="form-control" id="videoDesc" name="videoDesc" rows="3" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="videoLink">Video Link:</label>
                            <input type="text" class="form-control" id="videoLink" name="videoLink" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>


            </div>
        </div>
    </div>
@endsection
