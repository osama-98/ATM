const preloader = $("#pre_loader");
$(document).ready((function () {
    const initialize = () => {
        $('[data-bs-toggle="tooltip"]').tooltip()
    }

    try {
        Livewire.hook("message.sent", (() => {
            preloader.css("display", "block")
        }));

        Livewire.hook("message.processed", (() => {
            preloader.css("display", "none");
            initialize();
        }));

        Livewire.hook("message.failed", (() => {
            preloader.css("display", "none");
            initialize();
        }));
    } catch {
        preloader.css("display", "none")
    }
}));
