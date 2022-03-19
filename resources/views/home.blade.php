<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Menu hover effect</title>
</head>

<body>
    <div class="wrapper">
        <ul>
            <li style="--clr:#00ade1">
                <a href="{{ url('/') }}" data-text="&nbsp;Home">&nbsp;Home&nbsp;</a>
            </li>
            <li style="--clr:#ff6493">
                <a href="{{ asset('about') }}" data-text="&nbsp;About">&nbsp;About&nbsp;</a>
            </li>
            <li style="--clr:#ffdd1c">
                <a href="{{ asset('services') }}" data-text="&nbsp;Services">&nbsp;Services&nbsp;</a>
            </li>
            <li style="--clr:#00dc82">
                <a href="{{ asset('team') }}" data-text="&nbsp;Team">&nbsp;Team&nbsp;</a>
            </li>
            <li style="--clr:#dc00d4">
                <a href="{{ asset('contact') }}" data-text="&nbsp;Contact">&nbsp;Contact&nbsp;</a>
            </li>
        </ul>
    </div>

</body>

</html>