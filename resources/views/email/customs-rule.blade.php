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
            <p>Dear {{ $recipient_name }}:</p>

            <p>
                We want to inform you that your package with tracking number: {{ $tracking_number }} has been placed on
                hold as
                we got on transit point in {{ $country1 }} by the {{ $country2 }} Customs Authorities for
                reasons which violates a
                decree of a newly signed shipment regulatory policy concluded on the {{ $date1 }}. Which agrees
                that any package above {{ $above_weight }} going into {{ $country1 }} from North Asia through
                South-eastern
                Asian route must
                pay a Custom Clearance Duty fee, after which a certificate will be issued/given so as to be allowed to
                enter or prevent further obstructions.
                We are not aware of this because it's so sudden to us as it is an agreement act concluded recently.
                Below is the comprehensive required figure to enable the clearance of your package;
            </p>

            <p>
                Custom Duty Fee:- {{ $custom_duty_fee }} <br>
                Stamp Duty:- {{ $stamp_duty_fee }} <br>
                TOTAL:- {{ $total }} <br>
            </p>

            <p>
                In your acknowledgement to this email, we shall provide you with the suitable payment details to
                facilitate the release of your package. As soon as I receive confirmation an evidence of payment of the
                charges, I will dispatch your parcel
                post-haste. The date and time of departure and the Estimated Time of Arrival will be communicated to
                you.
            </p>

            <p>
                Meanwhile, I urge you to treat the above requirement with utmost urgency so as to enable me dispense my
                duties and obligation accordingly thereby allowing me to serve you timely. Your prompt response is
                highly appreciated.
            </p>

            <p>
                Regards, <br>
                Agent {{ $agent_name }} <br>
                {{ $date2 }}
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
