<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>{{ config('app.name') }} | {{ config('meta.company.description') }}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="{{ config('app.name') }} | {{ config('meta.company.description') }}" name="description">

    <link href="/favicon.ico" rel="icon">

    {{-- Fonts & Icons --}}
    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">
    {{-- Font Awesome Icons --}}
    <link href="{{ asset('faweb/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('faweb/css/sharp-thin.css') }}" rel="stylesheet">
    <link href="{{ asset('faweb/css/sharp-solid.css') }}" rel="stylesheet">
    <link href="{{ asset('faweb/css/sharp-regular.css') }}" rel="stylesheet">
    <link href="{{ asset('faweb/css/sharp-light.css') }}" rel="stylesheet">
    {{-- Bootstrap Icons --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link href="{{ asset('third-party/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('third-party/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/dataTables.bootstrap5.min.css">
    @vite('resources/sass/bootstrap.scss')
    @vite('resources/css/design.css')

    <script src="//unpkg.com/alpinejs" defer></script>
    @vite('resources/js/app.js')
</head>

<body>
    {{-- Spinner --}}
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>

    {{-- Navbar --}}
    <x-navbar />

    {{-- Content --}}
    {{ $slot }}

    {{-- Footer --}}
    <x-footer />

    {{-- Back to Top --}}
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i
            class="bi bi-arrow-up"></i></a>

    {{-- Google Translate --}}
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en',
                layout: google.translate.TranslateElement.InlineLayout.SIMPLE
            }, 'google_translate_element');
        }
    </script>
    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>

    {{-- Scripts --}}
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="{{ asset('third-party/wow/wow.min.js') }}"></script>
    <script src="{{ asset('third-party/easing/easing.min.js') }}"></script>
    <script src="{{ asset('third-party/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('third-party/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('third-party/owlcarousel/owl.carousel.min.js') }}"></script>
    <script
        src="https://translate.yandex.net/website-widget/v1/widget.js?widgetId=ytWidget&pageLang=en&widgetTheme=light&autoMode=false"
        type="text/javascript"></script>
    <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $.fn.dataTable.ext.errMode = 'none';
            if ($('.table').length) {
                $('.table').on('error.dt', function(e, settings, techNote, message) {
                    console.log('[Error] DataTables: ', message);
                }).DataTable({
                    'language': {
                        'emptyTable': 'No shipments available',
                        'infoEmpty': 'No entry to show',
                    },
                    'columnDefs': [{
                        'orderable': false,
                        'targets': [-1]
                    }]
                });
            }
        });
    </script>

    <x-flash-message />
</body>

</html>
