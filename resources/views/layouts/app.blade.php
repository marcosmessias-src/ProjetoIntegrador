<!DOCTYPE html>
<html lang="pt-br" data-theme="dark">
	<!--begin::Head-->
	<head>
		<title>Assistência Social - IFAL</title>
		<meta charset="utf-8" /><meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="pt_BR" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Assistência Social | IFAL" />
		<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Vendor Stylesheets(used by this page)-->
		<link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
        <meta name="csrf-token" content="{{ csrf_token() }}">
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body data-kt-name="metronic" id="kt_body" class="header-fixed header-tablet-and-mobile-fixed aside-fixed aside-secondary-disabled">
		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="page d-flex flex-row flex-column-fluid">
				@include("components.sidebar")
				<!--begin::Wrapper-->
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                    @include('components.header')

                    <div aria-live="polite" aria-atomic="true" class="position-relative">
                        @if(session('success'))
                            <div class="toast-container position-absolute top-0 end-0 p-3">
                                <div class="toast show bg-opacity-50 bg-success" role="alert" aria-live="assertive" aria-atomic="true" data-bs-autohide="true">
                                    <div class="toast-header bg-opacity-50 bg-light-success text-white">
                                        <span class="svg-icon svg-icon-2 svg-icon-white me-3"><i class="bi bi-check-square icon-white"></i></span>
                                        <strong class="me-auto fs-7">Notificação</strong>
                                        <small>agora</small>
                                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                    </div>
                                    <div class="toast-body">
                                        {{session('success')}}
                                    </div>
                                </div>
                            </div>
                        @endif

                        @if(session('error'))
                            <div class="toast-container position-absolute top-0 end-0 p-3">
                                <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true" data-bs-autohide="true">
                                    <div class="toast-header">
                                        <span class="svg-icon svg-icon-2 svg-icon-primary me-3"><i class="bi bi-check-square"></i></span>
                                        <strong class="me-auto">Sistema</strong>
                                        <small>agora</small>
                                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                    </div>
                                    <div class="toast-body">
                                        {{session('error')}}
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>

					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Container-->
						<div class="container-xxl" id="kt_content_container">
                            <!-- Validation Errors -->
                            <x-auth-validation-errors class="mb-4 alert" :errors="$errors" />
                            @yield('content')
						</div>
						<!--end::Container-->
					</div>
					<!--end::Content-->
					<!--begin::Footer-->
					<div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
						<!--begin::Container-->
						<div class="container-xxl d-flex flex-column flex-md-row flex-stack">
							<!--begin::Copyright-->
							<div class="text-dark order-2 order-md-1">
								<span class="text-gray-400 fw-semibold me-1">Created by</span>
								<a href="https://www.linkedin.com/in/marcosmessias-src/" target="_blank" class="text-muted text-hover-primary fw-semibold me-2 fs-6">Marcos Messias</a>
							</div>
							<!--end::Copyright-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Footer-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Root-->

		<!--begin::Scrolltop-->
		<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
			<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
			<span class="svg-icon">
				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
					<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
					<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
				</svg>
			</span>
			<!--end::Svg Icon-->
		</div>
		<!--end::Scrolltop-->
		<!--begin::Modals-->
        @include('components.modal-ata')
        @include('components.modal-edit-ata')
        @include('components.modal-aluno')
        @include('components.modal-edit-aluno')
        @include('components.modal-prontuario')
        @include('components.modal-edit-prontuario')
        @include('components.modal-usuario')
		<!--end::Modals-->

		<!--begin::Javascript-->
		<script>var hostUrl = "assets/";</script>
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="assets/plugins/global/plugins.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Vendors Javascript(used by this page)-->
		<script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
		<!--end::Vendors Javascript-->
		<!--begin::Custom Javascript(used by this page)-->
		<script src="assets/js/widgets.bundle.js"></script>
		<script src="assets/js/custom/widgets.js"></script>
		<script src="assets/js/custom/intro.js"></script>

        @yield('scripts')

        <script>
            const alunosSelect = document.getElementById("student_select");

            fetch('{{route('alunos.all')}}')
                .then((student) => student.json())
                .then((data) => {
                    var count = Object.keys(data).length;
                    var option = '';

                    for(i=0;i<count;i++){
                        option += '<option class="text-success text-hover-success" value="'+data[i].id+'">'+data[i].name+' | '+data[i].cpf+'</option>';
                    }

                    alunosSelect.innerHTML += option;
                });

                function findAluno(){
                    var id = document.getElementById('student_select').value
                    fetch('{{route('alunos.find', 0)}}'+id)
                        .then((student) => student.json())
                        .then((data) => {
                            document.getElementById('student_name').value = data;
                        });
                }

        </script>
		<!--end::Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>
