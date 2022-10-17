<?php

namespace App\Http\Livewire\Shoes;

use Livewire\Component;
use App\Models\Shoe;
use Livewire\WithPagination;

class Index extends Component
{
    public $search, $color = 'all', $size = 'all';
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function loadShoes()
    {
        $query = Shoe::orderBy('name')
              ->search($this->search);

        if($this->color !='all'){
            $query->where('color', $this->color);
        }

        if($this->size !='all'){
            $query->where('size', $this->size);
        }

        $shoes = $query->paginate(3);

        return compact('shoes');
    }

    public function render()
    {
        return view('livewire.shoes.index', $this->loadShoes());
    }
}
