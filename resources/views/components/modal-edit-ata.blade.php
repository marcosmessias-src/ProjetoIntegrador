<form id="form-edit-ata" class="modal fade" tabindex="-1" method="POST">
    @csrf
    @method('PUT')
    <div class="modal-dialog">
        <div class="modal-content position-absolute">
            <div class="modal-header">
                <h3 class="modal-title">Editar registro de ATA</h3>

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
                        <input id="ata-title-edit" type="text" class="form-control form-control-solid" placeholder="Título do registro" name="title" required />
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="fv-row mb-8">
                        <!--begin::Label-->
                        <label class="required fs-6 fw-semibold mb-2">Informação</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <textarea id="ata-info-edit" class="form-control form-control-solid" rows="10" placeholder="Digite a informação do registro..." name="info" required ></textarea>
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->

                </div>
                <!--end::Wrapper-->
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-light-success opacity-75-hover">Atualizar registro</button>
            </div>
        </div>
    </div>
</form>
