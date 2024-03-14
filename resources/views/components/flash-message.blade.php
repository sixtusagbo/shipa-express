@if (session()->has('message'))
    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 3000)" x-show="show"
        class="alert alert-info position-fixed top-0 start-50 translate-middle-x" role="alert" style="z-index: 100000">
        {{ session('message') }}
    </div>
@endif
