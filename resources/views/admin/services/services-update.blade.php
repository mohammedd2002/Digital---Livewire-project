<x-modal-component id="editModal" title="Edit Service">


    <div class="col-6 mb-0">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" placeholder="Name" wire:model="name" />
        <x-validation-error-component field="name" />
    </div>
    <div class="col-6 mb-0">
        <label class="form-label">Icon</label>
        <input type="text" class="form-control" placeholder="Icon" wire:model="icon" />
        <x-validation-error-component field="icon" />
    </div>
    <div class="col mb-0">
        <label class="form-label">Description</label>
        <textarea type="text" class="form-control" placeholder="Description" wire:model="description" ></textarea>
        <x-validation-error-component field="description" />
    </div>
</x-modal-component>    
