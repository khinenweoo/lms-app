
<!-- Modal --><div wire:ignore.self class="modal fade" id="modal-update" tabindex="-1" role="dialog" aria-labelledby="modal-update" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Course Category</h5>
                <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true close-btn">×</span>
                </button> -->
            </div>
           <div class="modal-body">
                <form enctype="multipart/form-data"> 
                @csrf
                    <div class="form-group">
                        <!-- ID input -->
                        <input type="hidden" wire:model="category_id">

                        <input type="hidden" >
                        <!-- Name input -->
                        <label for="name">Name</label>
                        <input wire:model="name" type="text" placeholder="Enter Name" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}">
                        @error('name') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
       
                    <div class="form-group mb-3">
                        <label for="icon">Icon</label>
                        @if($updatedImage)
                            <img src="{{ $updatedImage->temporaryUrl() }}" alt="" style="max-width:100%;width:60px;" >
                        @else
                            <img src="{{ asset('storage/categories/'.$icon) }}" alt="" style="max-width:100%;width:60px;">
                        @endif

                        <input wire:model="updatedImage" type="file" class="form-control {{ $errors->has('icon') ? ' is-invalid' : '' }}" value="">
                        @error('updatedImage') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group pt-3">
                        <label for="description">Description</label>
                        <input wire:model="description" type="text" class="form-control {{ $errors->has('description') ? ' is-invalid' : '' }}" placeholder="Enter Description">
                        @error('description') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                    <!-- Status -->
                    <div class="form-group mb-3 {{ $errors->has('status') ? ' has-danger' : '' }}">
                            <label for="status">Status</label>
                            <select wire:model="status" name="enabled" class="form-control {{ $errors->has('status') ? ' is-invalid' : '' }}">
                                <option value="1" selected="selected">Enabled</option>
                                <option value="0">Disabled</option>
                            </select>
                            @error('status') <span class="text-danger error">{{ $message }}</span> @enderror
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" wire:click.prevent="cancel()" class="btn btn-secondary close-btn" data-dismiss="modal">Cancel</button>
                <button type="button" wire:click.prevent="update()" class="btn btn-success close-modal" data-dismiss="modal">Save changes</button>
            </div>
        </div>
    </div>
</div>