 <!-- LARGE MODAL -->
<div  class="modal fade" id="edit-roles">
	<div class="modal-dialog  modal-xl" role="document" swt>
		<div class="modal-content ">
			<div class="modal-header ">
				<h6 class="modal-title">Editar Rol</h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
      {!!Form::open(['route'=>['user.roles.update'],'method'=>'PUT','files'=>True])!!}
			<div class="modal-body pd-20">
				
        
<br>


{{-- almacenamos el id del usuario --}}
<input type="text" name="uuid_user" id="uuid_user" hidden="">

@include('admin.user.roles.forms.edit-roles')

      </div><!-- modal-body -->
			<div class="modal-footer">
				<button type="submit" class="btn btn-primary">Guardar</button>
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
			</div>
      {!!Form::close()!!}
		</div>
	</div><!-- MODAL DIALOG -->
</div>
<!-- LARGE MODAL CLOSED -->