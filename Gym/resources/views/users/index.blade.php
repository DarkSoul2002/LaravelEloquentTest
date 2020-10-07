@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Users') }}</div>

                    <div class="card-body">


                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Verified</th>
                                <th scope="col" class="text-center">
                                    <a href="{{ route('users.create') }}" class="btn-sm btn-primary">Create User</a>
                                </th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($users as $user)
                                <tr>
                                    <td>{{{ $user->name }}}</td>
                                    <td>{{{ $user->email }}}</td>
                                    <td>{{{ $user->email_verified_at }}}</td>
                                    <td>
                                        <div class="input-group">
                                        <a href="{{ route('users.edit', $user) }}" class="btn btn-primary btn-sm mx-auto">
                                            <i class="fas fa-user-edit"></i>
                                        </a>
                                        <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="mx-auto">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-sm btn-danger">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </form>
                                        </div>
                                    </td>
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
