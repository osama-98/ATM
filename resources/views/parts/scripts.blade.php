<script src="{{ asset('assets/metronic/plugins/global/plugins.bundle.min.js') }}"></script>
<script src="{{ asset('assets/metronic/js/scripts.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/preloader.js') }}"></script>

@livewireScripts
@yield('scripts')
@stack('scripts')

<script>
    toastr.options = {
        closeButton: true,
        debug: false,
        newestOnTop: true,
        progressBar: true,
        positionClass: "toastr-bottom-center",
        preventDuplicates: false,
        onclick: null,
        showDuration: "1000",
        hideDuration: "5000",
        timeOut: "6000",
        extendedTimeOut: "1000",
        showEasing: "swing",
        hideEasing: "linear",
        showMethod: "fadeIn",
        hideMethod: "fadeOut"
    };

    document.addEventListener('success', (message) => {
        if (!!message.detail)
            toastr.success(message.detail)
    })

    document.addEventListener('error', (message) => {
        if (!!message.detail)
            toastr.error(message.detail)
    })
</script>
