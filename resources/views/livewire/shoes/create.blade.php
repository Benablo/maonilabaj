<div>
    <div class="card">
        <div class="card-header bg-secondary">
            <h3>Add Shoe</h3>
        </div>
        <div class="card-body">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" wire:model.defer="brand">
                <label for="brand">Brand</label>
                @error('brand')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" wire:model.defer="name">
                <label for="name">Name</label>
                @error('name')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="number" class="form-control" wire:model.defer="prize">
                <label for="prize">Prize</label>
                @error('prize')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <select name="color" class="form-select" wire:model.defer="color">
                    <option hidden="true">Select Color</option>
                    <option selected disabled>Select Color</option>
                    <option value="Black">Black</option>
                    <option value="Red">Red</option>
                    <option value="Yellow">Yellow</option>
                    <option value="Green">Green</option>
                    <option value="Gray">Gray</option>
                    <option value="Navy Blue">Navy Blue</option>
                </select>
                <label for="color">Color</label>
                @error('color')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <select name="size" class="form-select" wire:model.defer="size">
                    <option hidden="true">Select Size</option>
                    <option selected disabled>Select Size</option>
                    <option value="36">36</option>
                    <option value="37">37</option>
                    <option value="38">38</option>
                    <option value="39">39</option>
                    <option value="40">40</option>
                    <option value="41">41</option>
                    <option value="42">42</option>
                </select>
                <label for="size">Size</label>
                @error('size')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group mb-3 d-grid gap-2 d-md-flex justify-content-end">
                <button class="btn btn-primary" type="submit" wire:click="addShoe()">
                    Add Shoe
                </button>
            </div>
        </div>
    </div>
</div>
