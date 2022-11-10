<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class BiodataCreate extends Component
{
    use WithFileUploads;

    public $nama;
    public $umur;
    public $hobi;
    public $foto;

    public function store()
    {
        $this->validate([
            'nama' => 'required',
            'umur' => 'required',
            'hobi' => 'required',
            'foto' => 'image|max:1024'
        ]);
        
        $biodata = \DB::table('biodata')->insert([
            'nama' => $this->nama,
            'umur' => $this->umur,
            'hobi' => $this->hobi,
            'foto' => $this->foto->getClientOriginalName()
        ]);
        
        $this->foto->storeAs('public', $this->foto->getClientOriginalName());

        $this->resetForm();
        $this->emit('storeEmit', $biodata);
    }

    private function resetForm()
    {
        $this->nama = null;
        $this->umur = null;
        $this->hobi = null;
    }
    
    public function cancelStore()
    {
        $this->emit('cancelStore');
    }

    public function render()
    {
        return view('livewire.biodata-create');
    }
}
