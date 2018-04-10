<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel todo</title>
</head>
<body>
    <h1>All Users</h1>

        @foreach ($users as $user)
            <li>{{$user->name}}</li>
        @endforeach

    <h2>Add a User</h2>

        <form method="POST" action="/users">
            {{csrf_field()}}
            <input type="text" name="name" placeholder="Name" required>
            <button type="submit">Add</button>
        </form>

</body>
</html>