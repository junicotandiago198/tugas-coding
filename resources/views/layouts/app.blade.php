
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="icon" href="{{ asset('frontend/img/Lambang_Kabupaten_Muara_Enim.gif') }}">
    <title>@yield('title') &mdash; DATABASE DISIKBUD</title>

    @stack('before-style')
        @include('includes.backsite.style')
    @stack('after-style')
</head>

<body>

    @include('components.backsite.header')

    @include('components.backsite.menu')
    @yield('content')

    @include('components.backsite.footer')

    @stack('before-script')
        @include('includes.backsite.script')
    @stack('after-script')
</body>