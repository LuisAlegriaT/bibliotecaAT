<!-- Modal -->
<div class="modal fade" id="updateAutor{{$consulta->idAutor}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="updateAutor{{$consulta->idAutor}}" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header text-center">
          <h5 class="modal-title text-dark " id="staticBackdropLabel">ACTUALIZAR AUTORES</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          
            <form class="mt-4" method="POST" action="{{route('autoresUpdate.update',$consulta->idAutor)}}">
                @csrf
    
                {!!method_field('PUT')!!}
    
                <div class="mb-3">
                    <label class="text-dark"> Autor </label> 
                    <input type="text" placeholder="NombreAutor" class="form-control" name="txtNombreAutor" value="{{$consulta->nombreAutor}}">
                    <p class="text-danger fst.italic">
                        {{$errors->first('txtNombreAutor')}}
                    </p>
                </div>

                <div class="mb-3">
                    <label class="text-dark mt-2"> Fecha de Nacimiento </label>
                    <input type="datetime-local" name="txtNacimientoAutor" placeholder="Libros Publicados" class="form-control" value="{{$consulta->numLibros}}">
                    <p class="text-danger fst.italic">
                        {{$errors->first('txtNacimientoAutor')}}
                    </p>
                </div>
    
                <div class="mb-3">
                    <label class="text-dark mt-2"> Libros Publicados </label>
                    <input type="text" placeholder="Libros Publicados" class="form-control" name="NLibrosPublicados" value="{{$consulta->numLibros}}">
                    <p class="text-danger fst.italic">
                        {{$errors->first('NLibrosPublicados')}}
                    </p>
                </div>



        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success"><i class="bi bi-box-arrow-in-up"></i>ACTUALIZAR</button>
        </div>
      </div>
    </div>
  </div>
</form>