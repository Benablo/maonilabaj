<?php

namespace App\Http\Livewire\Shoes;

use Livewire\Component;
use App\Models\Shoe;
use App\Events\UserLog;

class Create extends Component
{
    public $brand, $name, $prize, $color, $size;

    public function addShoe(){
        $this->validate([
            'brand'     =>      ['required', 'string', 'max:255'],
            'name'      =>      ['required', 'string', 'max:255'],
            'prize'     =>      ['required', 'numeric', 'min:1000', 'max:7000'],
            'color'     =>      ['required', 'string', 'max:255'],
            'size'      =>      ['required', 'numeric', 'min:36', 'max:42']
        ]);

        $shoe = Shoe::create([
            'brand'         =>      $this->brand,
            'name'          =>      $this->name,
            'prize'         =>      $this->prize,
            'color'         =>      $this->color,
            'size'          =>      $this->size,
        ]);

        $log_entry = 'Added a new shoe "' . $shoe->brand . '" with the #ID of ' . $shoe->id;
        event(new UserLog($log_entry));

        return redirect('/')->with('message', 'Added Successfully');
    }
    
    public function render()
    {
        return view('livewire.shoes.create');
    }
}
