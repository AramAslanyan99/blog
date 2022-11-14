{{-- @isset($records)
 $records is defined and is not null...
@endisset
@empty($records)
 $records is "empty"...
@endempty --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    {{-- @php
        $countries = DB::table('countries')->get();
        // echo "<pre>";print_r($countries);
    @endphp --}}
    <form>
        <select action="" method="post">
            <option value="Select your country">Select your country</option>
            @foreach ($countries as $country)
                <option value="Select Country">
                    {{ $country->name }}
                </option>
            @endforeach
        </select>
    </form>
     {{--     @foreach ($values as $value)
        <li>
            {{ $value}}
        </li>
        @endforeach --}}

</body>

</html>
