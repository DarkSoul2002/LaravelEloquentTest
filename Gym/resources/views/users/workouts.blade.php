@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Workouts') }}</div>

                    <div class="card-body">


                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Verified</th>
{{--                                <th scope="col" class="text-center">--}}
{{--                                    <a href="{{ route('workout.create') }}" class="btn-sm btn-primary">Create User</a>--}}
{{--                                </th>--}}
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($workouts as $workout)
                                <tr>
                                    <td>{{{ $workout->name }}}</td>
                                    <td>{{{ $workout->email }}}</td>
                                    <td>{{{ $workout->email_verified_at }}}</td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
