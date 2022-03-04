
<!-- Modal -->
<div wire:ignore.self class="modal fade" id="modal-create" tabindex="-1" role="dialog" aria-labelledby="modal-create" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Course Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true close-btn">×</span>
                </button>
            </div>
           <div class="modal-body">
                <form enctype="multipart/form-data"> 
                @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input wire:model="name" type="text" placeholder="Enter Name" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}">
                        @error('name') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
       
                    <div class="form-group mb-3">
                        <label for="icon">Icon</label>
                        <input wire:model="icon" type="file" class="form-control {{ $errors->has('icon') ? ' is-invalid' : '' }}" id="icon" value="{{ $icon ? '$icon': '' }}">
                        @error('icon') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group pt-3">
                        <label for="description">Description</label>
                        <input wire:model="description" type="text" class="form-control {{ $errors->has('description') ? ' is-invalid' : '' }}" placeholder="Enter Description">
                        @error('description') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                    <!-- Status -->
                    <div class="form-group mb-3 {{ $errors->has('status') ? ' has-danger' : '' }}">
                            <label for="status">Status</label>
                            <select wire:model="status" class="form-control {{ $errors->has('status') ? ' is-invalid' : '' }}">
                                <span></span>
                                <option value="1" selected>Enabled</option>
                                <option value="0">Disabled</option>
                            </select>
                            @error('status') <span class="text-danger error">{{ $message }}</span> @enderror
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Close</button>
                <button type="button" wire:click.prevent="store()" class="btn btn-success close-modal">Save changes</button>
            </div>
        </div>
    </div>
</div>