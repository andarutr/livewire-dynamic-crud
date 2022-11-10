<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BiodataUpdate extends Component
{
    public $nama;
    public $umur;
    public $hobi;
    public $biodataId;

    protected $listeners = [
        'getBiodata' => 'showBiodata'
    ];

    public function update()
    {
        $this->validate([
            'nama' => 'required',
            'umur' => 'required',
            'hobi' => 'required'
        ]);

        if($this->biodataId) {
            $biodata = \DB::table('biodata')->where('id_biodata',$this->biodataId)->update([
                    'nama' => $this->nama,
                    'umur' => $this->umur,
                    'hobi' => $this->hobi
                ]);
        }
        $this->resetForm();
        $this->emit('updateEmit', $biodata);
    }

    public function resetForm()
    {
        $this->reset();
    }
    
    public function cancelUpdate()
    {
        $this->emit('cancelUpdate');
    }

    public function render()
    {
        return view('livewire.biodata-update');
    }

    public function showBiodata($biodata)
    {
        $this->nama = $biodata['nama'];
        $this->umur = $biodata['umur'];
        $this->hobi = $biodata['hobi'];
        $this->biodataId = $biodata['id_biodata'];
    }
}
