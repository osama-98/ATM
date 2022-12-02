@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="nav-bar">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">ATM</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                        </li>
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">Register</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <form action="{{ route('logout') }}" method="POST" id="logout">
                                    @csrf
                                </form>
                                <button class="btn nav-link" form="logout">Logout</button>
                            </li>
                        @endguest
                    </ul>

                </div>
            </div>
        </nav>
    </div>

    <div class="hero-container" id="hero-sec">
        <div class="container-fluid">
            <div class="row d-flex">
                <div class="col align-middle">
                    <div class="px-2 py-2">
                        <img
                            src="https://img.freepik.com/free-vector/bank-worker-helping-customers-use-atm-girl-with-credit-card-having-question-flat-vector-illustration-finance-service-consultation_74855-13016.jpg?w=740&t=st=1669995177~exp=1669995777~hmac=1edd6c2c7dff8ddda7465ab2deb0c8f9278e5d3ca4e92eddbc0e4faa4d03f405"
                            class="img-fluid" alt="...">
                    </div>
                </div>
                <div class="col">
                    <div class="px-5 py-5 mt-5">
                        <div class="px-2 py-2 align-middle">
                            <h4>Welcome Osama</h4>

                            <p> ATMs are convenient, allowing consumers to perform quick self-service transactions such
                                as deposits, cash withdrawals, bill payments, and transfers between accounts.</p>
                        </div>
                        <div class="px-2 py-2">
                            <button type="button" class="btn btn-outline-primary btn-open" id="check-btn">Check
                                Balance
                            </button>
                            <button type="button" class="btn btn-outline-primary " id="deposit-btn">Deposit</button>
                            <button type="button" class="btn btn-outline-primary Withdraw-open"
                                    id="withdraw-btn">Withdraw
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row d-flex">
                <div class="col-12">
                    @if(session()->has('success'))
                        <div class="alert alert-primary w-100" role="alert">
                            {{ session('success') }}
                        </div>
                    @elseif(session()->has('error'))
                        <div class="alert alert-danger w-100" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>

        {{-- Check Balanc Modal --}}
        <section class="modal hidden" id="modalOne">
            <div>
                <button class="btn bg-success bg-gradient btn-sm rounded-circle" id="check-close">
                    <i class="fa-solid fa-times m-2"></i>
                </button>
            </div>
            <div>
                <h3>Your Balance</h3>
                <p class="text-center">
                    {{ number_format(auth()->user()->balance) }} JD
                </p>
            </div>
        </section>

        <div class="overlay hidden" id="overlay-one"></div>

        {{-- Check Balanc Modal --}}

        {{-- Deposit Modal --}}
        <section class="modal hidden" id="modalTwo">
            <div>
                <button class="btn bg-success bg-gradient btn-sm rounded-circle" id="deposit-close">
                    <i class="fa-solid fa-times m-2"></i>
                </button>
            </div>

            <div>
                <h3>Deposit</h3>
            </div>

            <form action="{{ route('deposit') }}" method="POST">
                @csrf

                <input class="form-control" name="value" type="number" placeholder="Enter the amount" required min="1" />
                <div class="w-100 d-flex justify-content-center">
                    <button type="submit" class="btn btn-outline-primary mt-3">Deposit</button>
                </div>
            </form>
        </section>

        <div class="overlay hidden" id="overlay-two"></div>

        {{-- Deposit Modal --}}

        {{-- Withdraw Modal --}}
        <section class="modal hidden" id="modalThree">
            <div>
                <button class="btn bg-success bg-gradient btn-sm rounded-circle" id="withdraw-close">
                    <i class="fa-solid fa-times m-2"></i>
                </button>
            </div>

            <div>
                <h3>Withdraw</h3>
            </div>

            <form action="{{ route('withdraw') }}" method="POST">
                @csrf

                <input class="form-control" name="value" type="number" placeholder="Enter the amount" required min="1" />
                <div class="w-100 d-flex justify-content-center">
                    <button type="submit" class="btn btn-outline-primary mt-3">Withdraw</button>
                </div>
            </form>
        </section>

        <div class="overlay hidden" id="overlay-three"></div>
        {{-- <button class="btn btn-open">Open Modal</button> --}}

        {{-- Withdraw Modal --}}

        <script>
            // Check Balanc Modal
            const modal = document.querySelector("#modalOne");
            const overlay = document.querySelector("#overlay-one");
            const openModalBtn = document.querySelector("#check-btn");
            const closeModalBtn = document.querySelector("#check-close");

            // close modal function
            const closeModal = function () {
                modal.classList.add("hidden");
                overlay.classList.add("hidden");
            };

            // close the modal when the close button and overlay is clicked
            closeModalBtn.addEventListener("click", closeModal);
            overlay.addEventListener("click", closeModal);

            // close modal when the Esc key is pressed
            document.addEventListener("keydown", function (e) {
                if (e.key === "Escape" && !modal.classList.contains("hidden")) {
                    closeModal();
                }
            });

            // open modal function
            const openModal = function () {
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
            const closeModalTwo = function () {
                modal_two.classList.add("hidden");
                overlay_two.classList.add("hidden");
            };

            // close the modal when the close button and overlay is clicked
            closeModalBtn_two.addEventListener("click", closeModalTwo);
            overlay_two.addEventListener("click", closeModalTwo);

            // close modal when the Esc key is pressed
            document.addEventListener("keydown", function (e) {
                if (e.key === "Escape" && !modal_two.classList.contains("hidden")) {
                    closeModalTwo();
                }
            });

            // open modal function
            const openModalTwo = function () {
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
            const closeModalThree = function () {
                modal_three.classList.add("hidden");
                overlay_three.classList.add("hidden");
            };

            // close the modal when the close button and overlay is clicked
            closeModalBtn_three.addEventListener("click", closeModalThree);
            overlay_three.addEventListener("click", closeModalThree);

            // close modal when the Esc key is pressed
            document.addEventListener("keydown", function (e) {
                if (e.key === "Escape" && !modal_three.classList.contains("hidden")) {
                    closeModalThree();
                }
            });

            // open modal function
            const openModalThree = function () {
                modal_three.classList.remove("hidden");
                overlay_three.classList.remove("hidden");
            };
            // open modal event
            openModalBtn_three.addEventListener("click", openModalThree);
        </script>
@endsection
