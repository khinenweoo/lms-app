<!-- Modal -->
<div wire:ignore.self class="modal fade" id="modal-approve" tabindex="-1" role="dialog" aria-labelledby="modal-approve" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Student Information</h5>
                <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true close-btn">×</span>
                </button> -->
            </div>
           <div class="modal-body">
                <form enctype="multipart/form-data">
                @csrf
                    <div class="form-group">
                        <!-- ID input -->
                        <input type="hidden" wire:model="user_id">

                        <input type="hidden" >
                        <!-- Name input -->
                        <label for="name">Name</label>
                        <input wire:model="name" type="text" placeholder="Enter Name" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}">
                        @error('name') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group pt-3">
                        <label for="description">Email</label>
                        <input wire:model="email" type="text" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}">
                        @error('email') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group pt-3">
                        <label for="description">Phone</label>
                        <input wire:model="phone" type="text" class="form-control {{ $errors->has('phone') ? ' is-invalid' : '' }}">
                        @error('phone') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" wire:click.prevent="cancel()" class="btn btn-secondary close-btn" data-dismiss="modal">Close</button>
                <button type="button" wire:click.prevent="approve()" class="btn btn-success close-modal" data-dismiss="modal">Approve Student</button>
            </div>
        </div>
    </div>
</div>
