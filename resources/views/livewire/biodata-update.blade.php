<div>
    <h5>Create Data</h5>
    <form wire:submit.prevent="update">
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
        <div class="mb-3">
            <label for="hobi" class="form-label">Hobi</label>
            <input type="text" class="form-control" id="hobi" wire:model="hobi">
            @error('hobi')<p class="text-danger">{{ $message }}</p>@enderror
        </div>
      <button type="submit" class="btn btn-success">Update</button>
      <button wire:click="cancelUpdate" class="btn btn-secondary">Cancel</button>
    </form>
</div>
