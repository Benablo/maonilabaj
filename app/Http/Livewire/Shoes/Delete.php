<?php

namespace App\Http\Livewire\Shoes;

use App\Models\Shoe;
use Livewire\Component;
use App\Events\UserLog;

class Delete extends Component
{
    public $shoeId;

    public function getShoeProperty(){
        return Shoe::select('id', 'brand', 'name', 'color', 'size')->find($this->shoeId);
    }

    public function delete(){
        $this->shoe->delete();

        $log_entry = 'Deleted shoe "' . $this->shoe->brand . '" with the ID#' . $this->shoe->id;
        event(new UserLog($log_entry));

        return redirect('/')->with('message', 'Deleted Successfully');
    }

    public function back(){
        return redirect('/');
    }

    public function render()
    {
        return view('livewire.shoes.delete');
    }
}
