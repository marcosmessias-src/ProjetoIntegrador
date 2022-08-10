<!DOCTYPE html>
<html lang="pt-br">

    <!--begin::Head-->
    <head><base href="../../../">
        <title>Assistência Social | IFAL</title>
        <meta charset="utf-8" />
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta property="og:locale" content="pt_BR" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="Assistência Social | IFAL" />
        <meta property="og:site_name" content="Marcos Messias" />
        <link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
        <!--begin::Fonts-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
        <!--end::Fonts-->
        <!--begin::Global Stylesheets Bundle(used by all pages)-->
        <link href="@yield('plugin')assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
        <link href="@yield('style')assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
        <!--end::Global Stylesheets Bundle-->
    </head>
    <!--end::Head-->

	<!--begin::Body-->
	<body data-kt-name="metronic" id="kt_body" class="app-blank bgi-size-cover bgi-position-center bgi-no-repeat">
        <!--begin::Main-->
        <!--begin::Root-->
        <div class="d-flex flex-column flex-root">
            <!--begin::Page bg image-->
            <style>body { background-image: url('assets/media/auth/bg10.jpeg'); } [data-theme="dark"] body { background-image: url('assets/media/auth/bg10-dark.jpeg'); }</style>
            <!--end::Page bg image-->
            <!--begin::Authentication - Sign-in -->
            <div class="d-flex flex-column flex-lg-row flex-column-fluid">
                <!--begin::Aside-->
                <div class="d-flex flex-lg-row-fluid">
                    <!--begin::Content-->
                    <div class="d-flex flex-column flex-center pb-0 pb-lg-10 p-10 w-100">
                        <!--begin::Image-->
                        <img class="theme-light-show mx-auto mw-100 w-200px w-lg-500px mb-10 mb-lg-20" src="assets/media/logos/logo-white.png" alt="" />
                        <img class="theme-dark-show mx-auto mw-100 w-200px w-lg-500px mb-10 mb-lg-20" src="assets/media/logos/logo-white.png" alt="" />
                        <!--end::Image-->
                        <!--begin::Title-->
                        <h1 class="text-gray-800 fs-2qx fw-bold text-center mb-7">Assistência Social</h1>
                        <!--end::Title-->
                        <!--begin::Text-->
                        <div class="text-gray-600 fs-base text-center fw-semibold">Sistema dedicado à
                        assistência estudantil do IFAL Campus Arapiraca.</div>
                        <!--end::Text-->
                    </div>
                    <!--end::Content-->
                </div>
                <!--begin::Aside-->
                <!--begin::Body-->
                <div class="d-flex flex-column-fluid flex-lg-row-auto justify-content-center justify-content-lg-end p-12">
                    <!--begin::Wrapper-->
                    <div class="bg-body d-flex flex-center rounded-4 w-md-600px p-10">
                        <!--begin::Content-->
                        <div class="w-md-400px">
                            <!-- Session Status -->
                            <x-auth-session-status class="mb-4" :status="session('status')" />


                            <!--begin::Form-->
                            <form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" method="POST" action="{{route('login')}}">
                                @csrf
                                <!--begin::Heading-->
                                <div class="text-center mb-11">
                                    <!--begin::Title-->
                                    <h1 class="text-dark fw-bolder mb-3">Acessar</h1>
                                    <!--end::Title-->
                                </div>
                                <!--begin::Heading-->

                                <!--begin::Input group=-->
                                <div class="fv-row mb-8">
                                    <!--begin::Email-->
                                    <input type="text" placeholder="Email" name="email" autocomplete="off" class="form-control bg-transparent" :value="old('email')" />
                                    <!--end::Email-->
                                </div>
                                <!--end::Input group=-->
                                <div class="fv-row mb-8">
                                    <!--begin::Password-->
                                    <input type="password" placeholder="{{__("Password")}}" name="password" class="form-control bg-transparent" autocomplete="current-password" />
                                    <!--end::Password-->
                                </div>
                                <!--end::Input group=-->
                                <!-- Remember Me -->
                                <div class="fv-row mb-7 form-check form-check-custom form-check-solid">
                                    <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                                    <label class="form-check-label" for="remember_me">
                                        Lembrar de mim
                                    </label>
                                </div>
                                <!-- Validation Errors -->
                                <x-auth-validation-errors class="mb-4 text-danger" :errors="$errors" />
                                <!--begin::Submit button-->
                                <div class="d-grid mb-10">
                                    <button type="submit" id="kt_sign_in_submit" class="btn btn-primary">
                                        <!--begin::Indicator label-->
                                        <span class="indicator-label">Acessar</span>
                                        <!--end::Indicator label-->
                                        <!--begin::Indicator progress-->
                                        <span class="indicator-progress">Aguarde...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                        <!--end::Indicator progress-->
                                    </button>
                                </div>
                                <!--end::Submit button-->
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Authentication - Sign-in-->
        </div>
        <!--end::Root-->
        <!--end::Main-->
        <!--begin::Javascript-->
        <script>var hostUrl = "assets/";</script>
        <!--begin::Global Javascript Bundle(used by all pages)-->
        <script src="assets/plugins/global/plugins.bundle.js"></script>
        <script src="assets/js/scripts.bundle.js"></script>
        <!--end::Global Javascript Bundle-->
        <!--begin::Custom Javascript(used by this page)-->
        <script>"use strict";var KTSigninGeneral=function(){var e,t,i;return{init:function(){e=document.querySelector("#kt_sign_in_form"),t=document.querySelector("#kt_sign_in_submit"),i=FormValidation.formValidation(e,{fields:{email:{validators:{regexp:{regexp:/^[^\s@]+@[^\s@]+\.[^\s@]+$/,message:"{{__("The value is not a valid email address")}}"},notEmpty:{message:"{{__("Email address is required")}}"}}},password:{validators:{notEmpty:{message:"{{__("The password is required")}}"}}}},plugins:{trigger:new FormValidation.plugins.Trigger,bootstrap:new FormValidation.plugins.Bootstrap5({rowSelector:".fv-row",eleInvalidClass:"",eleValidClass:""})}}),t.addEventListener("click",(function(n){n.preventDefault(),i.validate().then((function(i){"Valid"==i?(t.setAttribute("data-kt-indicator","on"),t.disabled=!0,setTimeout(function(){t.removeAttribute("data-kt-indicator"),t.disabled=!1,document.getElementById("kt_sign_in_form").submit()},2e3)):Swal.fire({text:"{{__("Sorry, looks like there are some errors detected, please try again.")}}",icon:"error",buttonsStyling:!1,confirmButtonText:"{{__("Ok, got it!")}}",customClass:{confirmButton:"btn btn-primary"}})}))}))}}}();KTUtil.onDOMContentLoaded((function(){KTSigninGeneral.init()}));</script>
        <!--end::Custom Javascript-->
        <!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>
