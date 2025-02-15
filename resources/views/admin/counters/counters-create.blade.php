<x-modal-component id="createModal" title="Add New Counter">

    <div class="col mb-0">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" placeholder="Name" wire:model="name" />
        <x-validation-error-component field="name" />
    </div>
    <div class="col mb-0">
        <label class="form-label">count</label>
        <input type="number" class="form-control" placeholder="10" 
            wire:model="count" />
            <x-validation-error-component field="count" />
    </div>

    <div class="col mb-0">
        <label class="form-label">Icon</label>
        <input type="text" class="form-control" placeholder="Icon" wire:model="icon" />
        <x-validation-error-component field="icon" />
    </div>

</x-modal-component>    
