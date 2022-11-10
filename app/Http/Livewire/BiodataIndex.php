<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

class BiodataIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    
    public $statusCreate = false;
    public $statusUpdate = false;
    public $paginate = 5;
    public $search;

    protected $listeners = [
        'storeEmit' => 'storeHandlers',
        'cancelStore' => 'cancelHandlers',
        'updateEmit' => 'updateHandlers',
        'cancelUpdate' => 'cancelHandlers'
    ];
    public function changeStatusCreate()
    {
        $this->statusCreate = true;
    }

    public function getBiodata($id)
    {
        $this->statusUpdate = true;
        $biodata = \DB::table('biodata')->where('id_biodata',$id)->first();
        $this->emit('getBiodata', $biodata);
    }

    public function destroy($id)
    {
        if($id)
        {
            $delete = \DB::table('biodata')->where('id_biodata',$id)->delete();
            session()->flash('pesan','berhasil hapus data!');
        }
    }

    public function render()
    {
        $biodatas = \DB::table('biodata')->orderByDesc('id_biodata')->paginate($this->paginate);
        $search = \DB::table('biodata')
                        ->where('nama','like','%'.$this->search.'%')
                        ->orwhere('hobi','like','%'.$this->search.'%')
                        ->paginate($this->paginate);

        return view('livewire.biodata-index', [
            'biodatas' => $this->search === null ? $biodatas : $search
        ]);
    }

    public function storeHandlers($biodata)
    {
        $this->statusCreate = false;
        session()->flash('pesan', 'Data was stored!');
    }

    public function updateHandlers($biodata)
    {
        $this->statusCreate = false;
        session()->flash('pesan', 'Data was updated!');
    }

    public function cancelHandlers()
    {
        $this->statusCreate = false;
        $this->statusUpdate = false;
    }
}
