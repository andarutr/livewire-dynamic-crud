<div>
    @if($statusUpdate)
    <div class="card mb-3">
      <div class="card-body shadow">
        <livewire:biodata-update />
      </div>
    </div>
    @else
      @if($statusCreate)
      <div class="card mb-3">
        <div class="card-body shadow">
          <livewire:biodata-create />
        </div>
      </div>
      @endif
    @endif
    @if(session()->has('pesan'))
    <div class="alert alert-success">
        {{ session('pesan') }}
    </div>
    @endif
    @if(!$statusCreate)
    <button class="btn btn-outline-primary mb-3" wire:click="changeStatusCreate">Tambah Data</button>
    @endif
    <div class="card">
        <div class="card-body shadow">
            <div class="row">
              <div class="col">
                <select wire:model="paginate" class="form-control sm w-auto mt-2">
                  <option value="5">5</option>
                  <option value="8">8</option>
                  <option value="10">10</option>
                </select>
              </div>
              <div class="col">
                <input wire:model="search" class="form-control form-control-sm" placeholder="Search">
              </div>
            </div>
            <table class="table table-striped mt-3">
              <thead>
                <tr>
                  <th scope="col">Foto</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Umur</th>
                  <th scope="col">Hobi</th>
                  <th scope="col">Created At</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($biodatas as $biodata)
                <tr>
                  <td>
                    <img src="{{ Storage::url('public/'.$biodata->foto) }}" width="50">
                  </td>
                  <td>{{ $biodata->nama }}</td>
                  <td>{{ $biodata->umur }} Tahun</td>
                  <td>{{ $biodata->hobi }}</td>
                  <td>{{ $biodata->created_at }}</td>
                  <td>
                      <button class="btn btn-success" wire:click="getBiodata({{ $biodata->id_biodata }})">Update</button>
                      <button class="btn btn-danger" wire:click="destroy({{ $biodata->id_biodata }})">Delete</button>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            {!! $biodatas->links() !!}
        </div>
    </div>
</div>
