<html>
<head>
    <title>Title</title>
</head>
<body>
    <h1>All Users</h1>

    @foreach($users as $user)
        <li>{{ $user->name }}</li>
    @endforeach

    <h2>Create a user</h2>
    <form method="POST" action="/users">

        {{ csrf_field() }}
        <label>
            <input type="text" name="name" placeholder="Name" required>
        </label><br>
        <label>
            <input type="text" name="email" placeholder="Email" required>
        </label><br>
        <label>
            <input type="password" name="password" placeholder="Password" required>
        </label><br>

        <button type="submit">Create user</button>
    </form>
</body>
</html>
