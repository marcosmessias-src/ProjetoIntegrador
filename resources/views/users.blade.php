@extends('layouts.app')

@section('page-name', 'Usuários')

@section('content')
<div class="card">
    <!--begin::Card header-->
    <div class="card-header border-0 pt-6">
        <!--begin::Card title-->
        <div class="card-title">
            <!--begin::Search-->
            <div class="d-flex align-items-center position-relative my-1">
                <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                <span class="svg-icon svg-icon-1 position-absolute ms-6">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                        <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
                    </svg>
                </span>
                <!--end::Svg Icon-->
                <input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Pesquisar aluno" />
            </div>
            <!--end::Search-->
        </div>
        <!--begin::Card title-->
        <!--begin::Card toolbar-->
        <div class="card-toolbar">
            <!--begin::Toolbar-->
            <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                <!--begin::Add user-->
                <button type="button" class="btn btn-light-info" data-bs-toggle="modal" data-bs-target="#modal-usuario">
                <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                <span class="svg-icon svg-icon-2">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor" />
                        <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor" />
                    </svg>
                </span>
                <!--end::Svg Icon-->Cadastrar Usuário</button>
                <!--end::Add user-->
            </div>
            <!--end::Toolbar-->
            <!--begin::Group actions-->
            <div class="d-flex justify-content-end align-items-center d-none" data-kt-user-table-toolbar="selected">
                <div class="fw-bold me-5">
                <span class="me-2" data-kt-user-table-select="selected_count"></span>Selecionado</div>
                <button type="button" class="btn btn-danger" data-kt-user-table-select="delete_selected">Deletar selecionados</button>
            </div>
            <!--end::Group actions-->

        </div>
        <!--end::Card toolbar-->
    </div>
    <!--end::Card header-->
    <!--begin::Card body-->
    <div class="card-body py-4">
        <!--begin::Table-->
        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_users">
            <!--begin::Table head-->
            <thead>
                <!--begin::Table row-->
                <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                    <th class="w-10px pe-2">
                        <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                            <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_table_users .form-check-input" value="1" />
                        </div>
                    </th>
                    <th class="min-w-125px">Usuário</th>
                    <th class="min-w-125px">Email</th>
                    <th class="min-w-125px">Administrador</th>
                    <th class="text-end min-w-100px">Ações</th>
                </tr>
                <!--end::Table row-->
            </thead>
            <!--end::Table head-->
            <!--begin::Table body-->
            <tbody class="text-gray-600 fw-semibold">
                @foreach ($usuarios as $usuario)
                    <!--begin::Table row-->
                    <tr>
                        <!--begin::Checkbox-->
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <!--end::Checkbox-->
                        <!--begin::User=-->
                        <td class="d-flex align-items-center">
                            <!--begin:: Avatar -->
                            <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                <a href="#">
                                    <div class="symbol-label">
                                        <div class="symbol-label fs-3 bg-light-success text-success">{{$usuario->name[0]}}</div>
                                    </div>
                                </a>
                            </div>
                            <!--end::Avatar-->
                            <!--begin::User details-->
                            <div class="d-flex flex-column">
                                <a href="#" class="text-gray-800 text-hover-success mb-1">{{$usuario->name}}</a>
                                <span>{{$usuario->email}}</span>
                            </div>
                            <!--begin::User details-->
                        </td>
                        <!--end::User=-->
                        <!--begin::Role=-->
                        <td>{{$usuario->email}}</td>
                        <!--end::Role=-->
                        <!--begin::Last login=-->
                        <td>
                            @if ($usuario->is_admin)
                                <div class="badge badge-success fw-bold">Sim</div>
                            @else
                                <div class="badge badge-danger fw-bold">Não</div>
                            @endif

                        </td>
                        <!--end::Last login=-->
                        <!--begin::Two step=-->
                        <!--end::Two step=-->
                        <!--begin::Action=-->
                        <td class="text-end">
                            <a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Ações
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                            <span class="svg-icon svg-icon-5 m-0">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon--></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-90px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <button class="menu-link px-3 btn btn-custom w-65px" data-bs-toggle="modal" data-bs-target="#modal-edit-aluno" onclick="editAluno('{{route('alunos.update', $usuario)}}', '{{$usuario->name}}', '{{$usuario->email}}', '{{$usuario->cpf}}', '{{$usuario->registration}}');">Editar</button>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <form class="p-0" action="{{route('usuarios.destroy', $usuario)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="menu-link px-3 btn btn-custom w-65px" data-kt-users-table-filter="delete_row">Excluir</button>
                                    </form>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                        <!--end::Action=-->
                    </tr>
                    <!--end::Table row-->
                @endforeach
            </tbody>
            <!--end::Table body-->
        </table>
        <!--end::Table-->
    </div>
    <!--end::Card body-->
</div>
<!--end::Card-->
@endsection

<script>

    function editAluno(url, nome, email, cpf, matricula){
        document.getElementById("form-aluno-edit").setAttribute('action', url);
        document.getElementById("aluno-nome-edit").setAttribute('value', nome);
        document.getElementById("aluno-email-edit").setAttribute('value', email);
        document.getElementById("aluno-cpf-edit").setAttribute('value', cpf);
        document.getElementById("aluno-matricula-edit").setAttribute('value', matricula);
    }

</script>

