<div class="modal fade" id="editSubcategory" role="dialog" aria-labelledby="editCategoryLabel">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Editar SubCategoría</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>

            {{-- Este formulario debería apuntar a la ruta de actualización de categorías en tu aplicación Laravel --}}
            {{-- El método del formulario debe ser POST, pero Laravel utilizará el campo _method para tratarlo como una solicitud PUT/PATCH --}}
            <form id="editSubCategoryForm" action="{{ route('admin.cashflow.units.subcategories.update', ['cashFlowUnitSubCategory' => '__id__']) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                {{-- uuid hiiden --}}
                <input type="hidden" name="uuid" id="uuid_edit_subcategory" value="">

                <div class="modal-body">
                    {{-- Campo para el nombre de la categoría --}}
                    <div class="form-group">
                        <label for="edit_name">Nombre</label>
                        <input type="text" class="form-control" id="name_edit_subcategory" name="name" required>
                    </div>

                    {{-- Campo para la descripción de la categoría --}}
                    <div class="form-group">
                        <label for="edit_description">Descripción</label>
                        <textarea class="form-control" id="description_edit_subcategory" name="description"></textarea>
                    </div>

                    {{-- Agrega aquí más campos si es necesario --}}
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary pull-right">Guardar Cambios</button>
                    <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cerrar</button>
                </div>
            </form>
        </div>
    </div>
</div>

