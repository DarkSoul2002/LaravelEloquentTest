@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Users') }}</div>

                    <form method="post" action="{{ route('users.update', $user) }}" novalidate>
                        @csrf
                        @method('patch')

                        <div class="card-body">

                            <div class="form-group row">
                                <input id="email" type="hidden" value="{{ old('email', $user->email) }}"
                                       class="form-control @error('email') is-invalid @enderror" name="email" required
                                       autocomplete="name" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" value="{{ old('name', $user->name) }}"
                                           class="form-control @error('name') is-invalid @enderror" name="name" required
                                           autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>


                                <label for="password"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                                <div class="col-md-6">
                                    <input id="password" type="password"
                                           class="form-control @error('password') is-invalid @enderror" name="password"
                                           required autocomplete="password" autofocus>

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>


                                <label for="password-confirm"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                                <div class="col-md-6">
                                    <input id="password_confirmation" type="password" class="form-control"
                                           name="password_confirmation" required autocomplete="new-password">

                                    @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                        </div>


                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Save') }}
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
