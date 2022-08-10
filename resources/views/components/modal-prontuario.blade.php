<form class="modal fade" tabindex="-1" id="modal-prontuario" method="POST" action="{{route('prontuario.store')}}">
    @csrf
    <input type="hidden" name="assistant_id" value="{{Auth::user()->id}}">
    <input type="hidden" name="assistant_name" value="{{Auth::user()->name}}">
    <div class="modal-dialog">
        <div class="modal-content position-absolute">
            <div class="modal-header">
                <h3 class="modal-title">Registro de Prontuário</h3>

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <span class="svg-icon svg-icon-1"></span>
                </div>
                <!--end::Close-->
            </div>

            <div class="modal-body">
                <!--begin::Wrapper-->
                <div class="w-100">
                    <!--begin::Input group-->
                    <div class="fv-row mb-8">
                        <!--begin::Label-->
                        <label class="required fs-6 fw-semibold mb-2">Título</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input type="text" class="form-control form-control-solid" placeholder="Título do registro" name="title" required />
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="fv-row mb-8">
                        <!--begin::Label-->
                        <label class="required fs-6 fw-semibold mb-2">Informação</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <textarea class="form-control form-control-solid" rows="10" placeholder="Digite a informação do registro..." name="info" required ></textarea>
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-5 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                            <span class="required">Aluno</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Selecione o aluno desse atendimento!"></i>
                        </label>
                        <!--end::Label-->
                        <!--begin::Select-->
                        <select id="student_select" onchange="findAluno();" name="student_id" data-control="select2" data-dropdown-parent="#modal-prontuario" data-placeholder="Selecione o aluno..." class="form-select form-select-solid text-success text-hover-success">
                            <option value="">Selecione o aluno...</option>
                        </select>
                        <!--end::Select-->
                        <input id="student_name" type="hidden" name="student_name" value="">
                    </div>
                    <!--end::Input group-->

                </div>
                <!--end::Wrapper-->
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-light-success opacity-75-hover">Cadastrar prontuário</button>
            </div>
        </div>
    </div>
</form>
