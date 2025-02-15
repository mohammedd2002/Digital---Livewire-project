<x-modal-component id="createModal" title="Add New Skill">

    <div class="col mb-0">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" placeholder="Name" wire:model="name" />
        <x-validation-error-component field="name" />
    </div>
    <div class="col mb-0">
        <label class="form-label">Progress</label>
        <input type="number" class="form-control" placeholder="10" min="1" max="100"
            wire:model="progress" />
            <x-validation-error-component field="progress" />
    </div>

</x-modal-component>    
