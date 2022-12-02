<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <link href="{{ asset('css/landing.css') }}" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>

<body>
    <div class="nav-bar">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('landing') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Register</a>
                        </li>

                        {{-- <li class="nav-item">
                    <a class="nav-link" href="#featured">Featured</a>
                  </li> --}}
                    </ul>

                </div>
            </div>
        </nav>
    </div>

    <div class="hero-container " id="hero-sec">
        <div class="container-fluid ">
            <div class="row d-flex">
                <div class="col align-middle">
                    <div class="px-2 py-2">
                        <img src="https://img.freepik.com/free-vector/bank-worker-helping-customers-use-atm-girl-with-credit-card-having-question-flat-vector-illustration-finance-service-consultation_74855-13016.jpg?w=740&t=st=1669995177~exp=1669995777~hmac=1edd6c2c7dff8ddda7465ab2deb0c8f9278e5d3ca4e92eddbc0e4faa4d03f405"
                            class="img-fluid" alt="...">
                    </div>
                </div>
                <div class="col">
                    <div class="px-5 py-5 mt-5">
                        <div class="px-2 py-2 align-middle">
                            <h4>Welcome Osama</h4>

                            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem nihil expedita
                                repellendus consequatur. Omnis, nobis officiis, dicta consequuntur, molestiae numquam
                                expedita minus consectetur rem fuga nam harum sapiente commodi suscipit?</p>
                        </div>
                        <div class="px-2 py-2">
                            <button type="button" class="btn btn-outline-primary btn-open" id="check-btn">Check
                                Balance</button>
                            <button type="button" class="btn btn-outline-primary " id="deposit-btn">Deposit</button>
                            <button type="button" class="btn btn-outline-primary Withdraw-open"
                                id="withdraw-btn">Withdraw</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Check Balanc Modal --}}
        <section class="modal hidden" id="modalOne">
            <div class="flex">
                <button class="btn-close" id="check-close">⨉</button>
            </div>
            <div>
                <h3>Your Balance</h3>
                <p class="text-center">
                    3.333JD
                </p>
            </div>
        </section>

        <div class="overlay hidden" id="overlay-one"></div>

        {{-- Check Balanc Modal --}}

        {{-- Deposit Modal --}}
        <section class="modal hidden" id="modalTwo">
            <div class="flex">
                <button class="btn-close" id="deposit-close">⨉</button>
            </div>
            <div>
                <h3>Deposit</h3>

            </div>

            <input type="text" placeholder="Enter the amount" />
            <button class="btn btn-outline-primary ">Deposit</button>
        </section>

        <div class="overlay hidden" id="overlay-two"></div>
        {{-- <button class="btn btn-open">Open Modal</button> --}}

        {{-- Deposit Modal --}}

        {{-- Withdraw Modal --}}
        <section class="modal hidden" id="modalThree">
            <div class="flex">
                <button class="btn-close" id="withdraw-close">⨉</button>
            </div>
            <div>
                <h3>Withdraw</h3>

            </div>

            <input type="text" placeholder="Enter the amount" />
            <button class="btn btn-outline-primary ">Withdraw</button>
        </section>

        <div class="overlay hidden" id="overlay-three"></div>
        {{-- <button class="btn btn-open">Open Modal</button> --}}

        {{-- Withdraw Modal --}}
        <div class="modal fade" id="delete_user" tabindex="-1" >
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content rounded">
                    <div class="modal-header pb-0 border-0 justify-content-end">
                        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                            <label for="" class="svg-icon svg-icon-2 cursor-pointer">
                                <svg width="24px" height="24px" viewBox="0 0 24 24" fill="#fff">
                                    <g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)" fill="currentColor">
                                        <rect fill="currentColor" x="0" y="7" width="16" height="2" rx="1"></rect>
                                        <rect fill="currentColor" x="0" y="7" width="16" height="2" rx="1" transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)"></rect>
                                    </g>
                                </svg>
                            </label>
                        </div>
                    </div>

                    <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                        <div class="mb-13 text-center">
                            <!--begin::Title-->
                            <h1 class="mb-3">
                                Delete User
                                <br>
                                <small class="text-muted fs-6">Are you sure you want to delete the user <span class="text-info"></span> ?</small>
                            </h1>
                        </div>
                        <div class="w-100 text-center">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-sm-8">
                                        <button class="btn btn-danger w-100" data-bs-dismiss="modal" wire:click="delete">
                                            Delete
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <script>
            // Check Balanc Modal
            const modal = document.querySelector("#modalOne");
            const overlay = document.querySelector("#overlay-one");
            const openModalBtn = document.querySelector("#check-btn");
            const closeModalBtn = document.querySelector("#check-close");

            // close modal function
            const closeModal = function() {
                modal.classList.add("hidden");
                overlay.classList.add("hidden");
            };

            // close the modal when the close button and overlay is clicked
            closeModalBtn.addEventListener("click", closeModal);
            overlay.addEventListener("click", closeModal);

            // close modal when the Esc key is pressed
            document.addEventListener("keydown", function(e) {
                if (e.key === "Escape" && !modal.classList.contains("hidden")) {
                    closeModal();
                }
            });

            // open modal function
            const openModal = function() {
                modal.classList.remove("hidden");
                overlay.classList.remove("hidden");
            };
            // open modal event
            openModalBtn.addEventListener("click", openModal);
            // Check Balanc Modal

            // Deposit Modal
            const modal_two = document.querySelector("#modalTwo");
            const overlay_two = document.querySelector("#overlay-two");
            const openModalBtn_two = document.querySelector("#deposit-btn");
            const closeModalBtn_two = document.querySelector("#deposit-close");

            // close modal function
            const closeModalTwo = function() {
                modal_two.classList.add("hidden");
                overlay_two.classList.add("hidden");
            };

            // close the modal when the close button and overlay is clicked
            closeModalBtn_two.addEventListener("click", closeModalTwo);
            overlay_two.addEventListener("click", closeModalTwo);

            // close modal when the Esc key is pressed
            document.addEventListener("keydown", function(e) {
                if (e.key === "Escape" && !modal_two.classList.contains("hidden")) {
                    closeModalTwo();
                }
            });

            // open modal function
            const openModalTwo = function() {
                modal_two.classList.remove("hidden");
                overlay_two.classList.remove("hidden");
            };
            // open modal event
            openModalBtn_two.addEventListener("click", openModalTwo);



             // Withdraw Modal
             const modal_three = document.querySelector("#modalThree");
            const overlay_three = document.querySelector("#overlay-three");
            const openModalBtn_three = document.querySelector("#withdraw-btn");
            const closeModalBtn_three = document.querySelector("#withdraw-close");

            // close modal function
            const closeModalThree = function() {
                modal_three.classList.add("hidden");
                overlay_three.classList.add("hidden");
            };

            // close the modal when the close button and overlay is clicked
            closeModalBtn_three.addEventListener("click", closeModalThree);
            overlay_three.addEventListener("click", closeModalThree);

            // close modal when the Esc key is pressed
            document.addEventListener("keydown", function(e) {
                if (e.key === "Escape" && !modal_three.classList.contains("hidden")) {
                    closeModalThree();
                }
            });

            // open modal function
            const openModalThree = function() {
                modal_three.classList.remove("hidden");
                overlay_three.classList.remove("hidden");
            };
            // open modal event
            openModalBtn_three.addEventListener("click", openModalThree);
        </script>
















    </div>
    </div>

</body>

</html>
