<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{ url('test-form') }}">
        @csrf

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <label for="Name">Name</label>
        <input type="text" id="name" name="name">

        <label for="Email">Email</label>
        <input type="Email" id="Email" name="Email">

        <label for="address">Address</label>
        <input type="text" id="address" name="address">

        <label for="password">Password</label>
        <input type="password" id="password" name="password">

        <button type="submit">Submit</button>
    </form>

</body>

</html>
