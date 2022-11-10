<div>
    <h5>Create Data</h5>
    <form wire:submit.prevent="store">
      @if ($foto)
          Preview :
          <img src="{{ $foto->temporaryUrl() }}" class="img-fluid rounded mt-2 mb-2" width="150">
      @endif
      <div class="row g-12 align-items-center">
          <div class="col-auto">
            <label for="nama" class="col-form-label">Nama</label>
          </div>
          <div class="col-auto">
            <input type="text" id="nama" class="form-control" wire:model="nama">
            @error('nama')<p class="text-danger">{{ $message }}</p>@enderror
          </div>
          <div class="col-auto">
            <label for="umur" class="col-form-label">Umur</label>
          </div>
          <div class="col-auto">
            <input type="text" id="umur" class="form-control" wire:model="umur">
            @error('umur')<p class="text-danger">{{ $message }}</p>@enderror
          </div>
        </div>
        <div class="row g-12 align-items-left mt-3 mb-3">
          <div class="col-auto">
            <label for="hobi" class="col-form-label">Hobi</label>
          </div>
          <div class="col-auto">
            <input type="text" id="hobi" class="form-control" wire:model="hobi">
            @error('hobi')<p class="text-danger">{{ $message }}</p>@enderror
          </div>
          <div class="col-auto">
            <label for="foto" class="col-form-label">Foto</label>
          </div>
          <div class="col-auto">
            <input type="file" id="foto" class="form-control" wire:model="foto">
            @error('foto')<p class="text-danger">{{ $message }}</p>@enderror
          </div>
        </div>
      <button type="submit" class="btn btn-primary">Create</button>
      <button wire:click="cancelStore" class="btn btn-secondary">Cancel</button>
    </form>
</div>
