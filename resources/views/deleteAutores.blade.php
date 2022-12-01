<!-- Modal -->
<div class="modal fade" id="deleteAutores{{$consulta->idAutor}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="deleteAutores{{$consulta->idAutor}}" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-dark" id="staticBackdropLabel">SEGURO QUE DESEA ELIMINARLO?</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body text-dark">
            <form method="post" action="{{route('autoresDelete.destroy',$consulta->idAutor)}}">
                @csrf
                @method('delete')
                <label for="">Autor: </label> {{$consulta->nombreAutor}}
                    <br>
                <label for="">Libros Publicados: </label> {{$consulta->numLibros}}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger"><i class="bi bi-box-arrow-in-up"></i>ELIMINAR</button>
            </div>
        </form>
      </div>
    </div>
  </div>