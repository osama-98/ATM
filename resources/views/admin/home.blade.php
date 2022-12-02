@extends('layouts.dashboard')

@section('content')
    <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
        <!--begin::Col-->
        <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 ">
            <div class="card card-flush h-100 bgi-no-repeat bgi-size-contain bgi-position-x-end "
                 style="background-color: #F1416C;background-image:url('/metronic8/demo1/assets/media/patterns/vector-1.png')">
                <!--begin::Header-->
                <div class="card-header pt-5">
                    <!--begin::Title-->
                    <div class="card-title d-flex flex-column">
                        <!--begin::Amount-->
                        <span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2">
                                        {{ \App\Models\User::users()->count() }}
                                    </span>
                        <!--end::Amount-->
                        <!--begin::Subtitle-->
                        <span class="text-white opacity-75 pt-1 fw-semibold fs-6">Users</span>
                        <!--end::Subtitle-->
                    </div>
                    <!--end::Title-->
                </div>
                <!--end::Header-->
                <!--begin::Card body-->
                <div class="card-body d-flex align-items-end pt-0">
                    <!--begin::Progress-->
                    <div class="d-flex align-items-center flex-column mt-3 w-100">
                        <a href="{{ route('users.index') }}" class="d-flex justify-content-between fw-bold fs-6 text-white opacity-75 w-100 mt-auto mb-2">
                            <span>Preview</span>
                        </a>
                    </div>
                    <!--end::Progress-->
                </div>
                <!--end::Card body-->
            </div>
        </div>
        <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3">
            <div class="card card-flush h-100">
                <!--begin::Header-->
                <div class="card-header pt-5">
                    <!--begin::Title-->
                    <div class="card-title d-flex flex-column">
                        <!--begin::Info-->
                        <div class="d-flex align-items-center">
                            <span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">
                                {{ \App\Models\Transaction::count() }}
                            </span>
                        </div>
                        <!--end::Info-->
                        <!--begin::Subtitle-->
                        <span class="text-gray-400 pt-1 fw-semibold fs-6">Transactions</span>
                        <!--end::Subtitle-->
                    </div>
                    <!--end::Title-->
                </div>
                <!--end::Header-->
                <!--begin::Card body-->
                <div class="card-body pt-2 pb-4 d-flex flex-wrap align-items-center">
                    <!--begin::Labels-->
                    <div class="d-flex flex-column content-justify-center flex-row-fluid">
                        <!--begin::Label-->
                        <div class="d-flex fw-semibold align-items-center">
                            <!--begin::Bullet-->
                            <div class="bullet w-8px h-3px rounded-2 bg-success me-3"></div>
                            <!--end::Bullet-->
                            <!--begin::Label-->
                            <div class="text-gray-500 flex-grow-1 me-4">Deposit Transactions</div>
                            <!--end::Label-->
                            <!--begin::Stats-->
                            <div class="fw-bolder text-gray-700 text-xxl-end">
                                {{ \App\Models\Transaction::deposit()->count() }}
                            </div>
                            <!--end::Stats-->
                        </div>
                        <!--end::Label-->
                        <!--begin::Label-->
                        <div class="d-flex fw-semibold align-items-center my-3">
                            <!--begin::Bullet-->
                            <div class="bullet w-8px h-3px rounded-2 bg-primary me-3"></div>
                            <!--end::Bullet-->
                            <!--begin::Label-->
                            <div class="text-gray-500 flex-grow-1 me-4">Withdraw Transactions</div>
                            <!--end::Label-->
                            <!--begin::Stats-->
                            <div class="fw-bolder text-gray-700 text-xxl-end">
                                {{ \App\Models\Transaction::withdraw()->count() }}
                            </div>
                            <!--end::Stats-->
                        </div>
                    </div>
                    <!--end::Labels-->
                </div>
                <!--end::Card body-->
            </div>
        </div>
        <div class="col-xxl-6">
            <div class="card card-flush h-100">
                <!--begin::Body-->
                <div class="card-body d-flex flex-column justify-content-between mt-9 bgi-no-repeat bgi-size-cover bgi-position-x-center pb-0"
                     style="background-position: 100% 50%; background-image:url('/metronic8/demo1/assets/media/stock/900x600/42.png')">
                    <div class="mb-10">
                        <div class="fs-2hx fw-bold text-gray-800 text-center mb-13">
                            <span class="me-2">Try our all new Enviroment with
                                <br />
                                <span class="position-relative d-inline-block text-danger">
                                    <a href="/" class="text-danger opacity-75-hover">Pro Plan</a>
                                    <span class="position-absolute opacity-15 bottom-0 start-0 border-4 border-danger border-bottom w-100"></span>
                                </span>
                            </span>
                            for Free
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
