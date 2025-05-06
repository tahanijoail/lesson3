<!DOCTYPE html>
<html>
<head>
    <title>Create User</title>
    <link rel="stylesheet"  href="{{ asset('css/bootstrap.min.css') }}">
    <style>
        form{
            background:#4f8b9c
        }
    </style>
</head>
<body class="">
    <h1 class="text-center pt-3">Create User</h1>

    @if(session('success'))
        <p style="color:green;">{{ session('success') }}</p>
    @endif

    @if($errors->any())
        <ul style="color:red;">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <div class="d-flex justify-content-center m-3">
    <form method="POST" action="{{ route('user.store') }}" class="p-5">
        @csrf
        <label>Username:</label><br>
        <input type="text" name="name" value="{{ old('name') }}"><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" value="{{ old('email') }}"><br><br>
        <button type="submit">Save</button>
    </form>
</div>
</body>
</html>
