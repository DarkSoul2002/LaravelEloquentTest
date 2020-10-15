@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">{{ __('Posts') }}</div>

                    <table class="table table-bordered table-responsive-lg">
                        <tr>
                            <th>User</th>
                            <th>Tags</th>
                            <th>Title</th>
                            <th>Body</th>
                            <th>Date Created</th>
                            <th scope="col" class="text-center">
                                <a href="{{ route('posts.create') }}" class="btn-sm btn-primary">Create Post</a>
                            </th>
                        </tr>
                        @foreach ($posts as $post)
                            <tr>
                                <td>{{ $post->users->name }}</td>
                                <td>
                                    @foreach($post->tags as $tag)
                                        {{ $tag->name }}<br>
                                    @endforeach
                                </td>
                                <td>{{ $post->title }}</td>
                                <td>{{ Str::limit($post->body, 20) }}</td>
                                <td>{{ $post->created_at }}</td>
                                <td>
                                    <div class="input-group">
                                        <a href="{{ route('posts.edit', $post) }}"
                                           class="btn btn-primary btn-sm mx-auto">
                                            <i class="fas fa-user-edit"></i>
                                        </a>
                                        <form action="{{ route('posts.destroy', $post->id) }}" method="POST"
                                              class="mx-auto">
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
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
