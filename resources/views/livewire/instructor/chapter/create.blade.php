<!-- Chapter Create Modal -->
<div wire:ignore.self class="modal fade" id="chapter-create" tabindex="-1" role="dialog" aria-labelledby="modal-create" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Course Chapter</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true close-btn">×</span>
                </button>
            </div>
           <div class="modal-body">
                <form method="POST" enctype="multipart/form-data"> 
                @csrf
                    <div class="form-group">
                        <input wire:model="course_id" type="hidden">
                        <label for="name">Chapter Name</label>
                        <input wire:model="chaptername" type="text" placeholder="Enter Your Chapter Name" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}">
                        @error('chaptername') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>

                    <!-- Status -->
                    <div class="form-group">
                        <label class="control-label mr-4">Status</label>
                        <label class="custom-toggle mb-0">
                            <input wire:model="chapterstatus" type="checkbox" name="status" value="enabled">
                            @error('chapterstatus') <span class="text-danger error">{{ $message }}</span>@enderror 
                            <span class="custom-toggle-slider rounded-circle pt-2"></span>
                        </label>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" wire:click.prevent="cancel()" class="btn btn-secondary close-btn" data-dismiss="modal">Cancel</button>
                <button type="button" wire:click.prevent="storeChapter()" class="btn btn-primary close-modal">Create</button>
            </div>
        </div>
    </div>
</div>