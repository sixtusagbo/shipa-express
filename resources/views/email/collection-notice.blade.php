<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="color-scheme" content="light">
    <meta name="supported-color-schemes" content="light">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('myglobals.app_name') }}</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900;1000&family=Roboto:wght@500;700&display=swap');

        .wrapper {
            padding: 1rem 1.5rem;
            font-family: 'Inter', 'Segoe UI', sans-serif;
        }
    </style>
</head>

<body style="background: #fff;">

    <div class="wrapper">
        <div style="color: #000;text-align: left;">
            <p>Dear {{ $name }}:</p>

            <p>
                @php
                    $url = preg_replace('(^https?://)', '', config('app.url'));
                    $companyEmail = config('meta.company.email');
                @endphp

                We trust this mail finds you well. This is to bring to your notice that your shipment from
                <b>[{{ $origin }}]</b>, has been collected on <b>[{{ $collected_on }}]</b>.
            </p>

            <p>
                Any questions? Please feel free to contact us via our active email address: <br>
                Email: <a href="mailto:{{ $companyEmail }}">{{ $companyEmail }}</a> <br>
                Thanks for choosing us. <br>
                Tracking shipment's status, please visit: <a href="{{ config('app.url') }}">{{ $url }}</a>
            </p>
        </div>

        <div style="margin-top: 1rem;text-align: left;">
            <p
                style="text-transform: uppercase;color: {{ config('meta.colors.primary', '#000') }};font-family: 'Roboto';letter-spacing: .2rem;">
                {{ config('app.name') }}
            </p>

            <p style="color: #ADADAD;font-size: .7rem;">
                This email should not be used by anyone who is not the original intended recipient. It may contain
                confidential, proprietary or legally information.
            </p>
        </div>
    </div>

</body>

</html>
