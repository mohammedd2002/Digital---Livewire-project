<x-modal-component id="showModal" title="Show Service">
 
    <div class="col-6 mb-0">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" placeholder="Name" wire:model="name" disabled />
    </div>

    <div class="col-6 mb-0">
        <label class="form-label">Icon</label>
        <input type="text" class="form-control" placeholder="Icon" wire:model="icon" disabled />
    </div>

    <div class="col mb-0">
        <label class="form-label">Description</label>
        <textarea type="text" class="form-control" placeholder="Description" wire:model="description" disabled ></textarea>
    </div>
   
 </x-modal-component>        

