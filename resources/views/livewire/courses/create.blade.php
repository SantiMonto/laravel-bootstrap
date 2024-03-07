<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form class="m-2" wire:submit="store">
                <div class="form-group">
                  <label for="exampleFormControlInput1">Nombre del curso</label>
                  <input type="text" class="form-control" id="name" placeholder="Javascript..." wire:model="name">
                  <div>
                    @error('name') <span class="text-danger">{{ $message }}</span> @enderror 
                </div>        
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Categoría</label>
                    <input type="text" class="form-control" id="category" placeholder="Desarrollo web..." wire:model="category">
                    <div>
                      @error('category') <span class="text-danger">{{ $message }}</span> @enderror 
                  </div>   
                  </div>
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Descripción</label>
                  <textarea class="form-control" id="description" rows="3" wire:model="description"></textarea>
                  <div>
                    @error('description')<span class="text-danger">{{ $message }}</span> @enderror
                </div>
                </div>
                <div class="form-group text-end">
                  <button type="submit" class="btn btn-primary mt-2">Crear</button>
                  <button type="submit" class="btn btn-light mt-2">Cancelar</button>
                </div>
              </form>
        </div>
    </div>
</div>
