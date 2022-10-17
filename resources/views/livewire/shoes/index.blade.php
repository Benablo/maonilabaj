<div>
    <div class="container">
        <div class="row">
            <div class="col">
                <select class="form-select" wire:model.lazy="color">
                    <option value="all">All</option>
                    <option value="Black">Black</option>
                    <option value="Red">Red</option>
                    <option value="Yellow">Yellow</option>
                    <option value="Green">Green</option>
                    <option value="Gray">Gray</option>
                    <option value="Navy Blue">Navy Blue</option>
                </select>
            </div>
            <div class="col">
                <select class="form-select" wire:model.lazy="size">
                    <option value="all">All</option>
                    <option value="36">36</option>
                    <option value="37">37</option>
                    <option value="38">38</option>
                    <option value="39">39</option>
                    <option value="40">40</option>
                    <option value="41">41</option>
                    <option value="42">42</option>
                </select>
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Search" wire:model="search">
            </div>
        </div>
    </div>
   <table class="table table-striped">
    <thead>
        <tr>
            <th>ID No.</th>
            <th>Brand</th>
            <th>Name</th>
            <th>Prize</th>
            <th>Color</th>
            <th>Size</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($shoes as $shoe)
            <tr>
                <td>{{$shoe->id}}</td>
                <td>{{$shoe->brand}}</td>
                <td>{{$shoe->name}}</td>
                <td>{{$shoe->prize}}</td>
                <td>{{$shoe->color}}</td>
                <td>{{$shoe->size}}</td>
                <td>
                    <a href="{{url('edit', ['shoe' => $shoe->id])}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                    <a href="{{url('delete', ['shoe' => $shoe->id])}}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                </td>
            </tr>
        @endforeach
    </tbody>
   </table>
   {{$shoes->links() }}
</div>
