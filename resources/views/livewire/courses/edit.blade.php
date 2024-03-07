<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form class="m-3" wire:submit="store">
                <div class="form-group">
                  <label for="name">Nombre del curso</label>
                  <input type="text" class="form-control" id="name" placeholder="Javascript..." wire:model="name" value="{{$name}}">
                </div>
                <div class="form-group">
                    <label for="category">Categoría</label>
                    <input type="text" class="form-control" id="category" placeholder="Desarrollo Web" wire:model="category"  value="{{$category}}">
                  </div>
                <div class="form-group">
                  <label for="description">Descripción</label>
                  <textarea class="form-control" id="description" rows="3" wire:model="description">{{$description}}"</textarea>
                </div>
                <div class="form-group text-end">
                <button type="submit" class="btn btn-primary mt-2">Editar</button>
                <button type="button" class="btn btn-light mt-2">Cancelar</button>
                </div>
              </form>
        </div>
    </div>
</div>
