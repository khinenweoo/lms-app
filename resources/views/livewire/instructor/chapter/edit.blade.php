<!-- Chapter Create Modal -->
<div wire:ignore.self class="modal fade" id="chapter-update" tabindex="-1" role="dialog" aria-labelledby="chapter-update" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Course Chapter</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true close-btn">×</span>
                </button>
            </div>
           <div class="modal-body">
                <form enctype="multipart/form-data"> 
                @csrf
                    <div class="form-group">
                        <input wire:model="chapter_id" type="hidden">
                        <input wire:model="course_id" type="hidden">
                        <label for="name">Chapter Name</label>
                        <input wire:model="chaptername" type="text" placeholder="Enter Your Chapter Name" class="form-control {{ $errors->has('chaptername') ? ' is-invalid' : '' }}">
                        @error('chaptername') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="name">Position</label>
                        <input wire:model="chapterposition" type="number"  class="form-control {{ $errors->has('chapterposition') ? ' is-invalid' : '' }}">
                        @error('chapterposition') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>

                    <!-- Status -->
                    <div class="form-group">
                        <label class="control-label mr-4">Status</label>
                        <label class="custom-toggle mb-0">
                            <input wire:model="chapterstatus" type="checkbox" value="enabled">
                            @error('chapterstatus') <span class="text-danger error">{{ $message }}</span>@enderror 
                            <span class="custom-toggle-slider rounded-circle pt-2"></span>
                        </label>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" wire:click.prevent="cancel()" class="btn btn-secondary close-btn" data-dismiss="modal">Cancel</button>
                <button type="button" wire:click.prevent="updateChapter()" class="btn btn-primary close-modal">Save Changes</button>
            </div>
        </div>
    </div>
</div>