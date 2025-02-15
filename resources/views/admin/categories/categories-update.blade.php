<x-modal-component id="editModal" title="Edit Category">


    <div class="col mb-0">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" placeholder="Name" wire:model="name" />
        <x-validation-error-component field="name" />
    </div>
</x-modal-component>    
