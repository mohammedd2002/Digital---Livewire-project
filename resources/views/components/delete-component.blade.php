 <!-- Modal -->

 <div class="modal fade" id="deleteModal" tabindex="-1" aria-hidden="true" wire:ignore.self>
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">Delete {{$title}}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form wire:submit.prevent="submit">

                <div class="modal-body">
                    <div class="row">
                        <div class="col mb-0">
                            Are you sure you want to delete this {{$title}}?
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button class="btn btn-danger"><span wire:loading.remove>Confirm</span>
                        <div class="spinner-border spinner-border-sm text-secondary" role="status" wire:loading
                            wire:target="submit">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </button>

                </div>
            </form>

        </div>
    </div>
</div>
