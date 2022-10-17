<?php

namespace App\Http\Livewire\Shoes;

use App\Models\Shoe;
use Livewire\Component;
use App\Events\UserLog;

class Edit extends Component
{

    public $shoeId;
    public $brand, $name, $prize, $color, $size;

    public function mount(){
        $this->brand = $this->shoe->brand;
        $this->name = $this->shoe->name;
        $this->prize = $this->shoe->prize;
        $this->color = $this->shoe->color;
        $this->size = $this->shoe->size;
    }

    public function editShoe(){
        $this->validate([
            'brand'     =>      ['required', 'string', 'max:255'],
            'name'      =>      ['required', 'string', 'max:255'],
            'prize'     =>      ['required', 'numeric', 'min:1000', 'max:7000'],
            'color'     =>      ['required', 'string', 'max:255'],
            'size'      =>      ['required', 'numeric', 'min:36', 'max:42']
        ]);

        $this->shoe->update([
            'brand'     =>      $this->brand,
            'name'      =>      $this->name,
            'prize'     =>      $this->prize,
            'color'     =>      $this->color,
            'size'      =>      $this->size,
        ]);

        $log_entry = 'Updated shoe "' . $this->brand . '" with the ID#' . $this->shoe->id;
        event(new UserLog($log_entry));

        return redirect('/')->with('message', 'Updated Successfully');
    }

    public function getShoeProperty(){
        return Shoe::find($this->shoeId);
    }

    public function back(){
        return redirect('/');
    }

    public function render()
    {
        return view('livewire.shoes.edit');
    }
}
