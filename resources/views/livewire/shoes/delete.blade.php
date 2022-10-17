<div>
    <div class="container col-md-6 offset-md-3 mt-3">
        <div class="card">
            <div class="card-header bg-secondary">
                <h3 class="text-dark">Delete Shoe?</h3>
            </div>
            <div class="card-body">
                <table class="table">
                    <tr>
                        <th>Brand</th>
                        <td>{{$this->shoe->brand}}</td>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <td>{{$this->shoe->name}}</td>
                    </tr>
                    <tr>
                        <th>Color</th>
                        <td>{{$this->shoe->color}}</td>
                    </tr>
                    <tr>
                        <th>Size</th>
                        <td>{{$this->shoe->size}}</td>
                    </tr>
                </table>
            </div>
            <div class="card-footer">
                <div class="d-flex justify-content-end">
                    <button class="btn btn-primary mx-1" wire:click="back()">Back</button>
                    <button class="btn btn-danger" wire:click="delete()">Delete</button>
                </div>
            </div>
        </div>
    </div>
</div>
