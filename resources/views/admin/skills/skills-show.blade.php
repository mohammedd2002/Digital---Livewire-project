 <x-modal-component id="showModal" title="Show Skill">
 
    <div class="col mb-0">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" placeholder="Name" wire:model="name" disabled />
    
    </div>
    <div class="col mb-0">
        <label class="form-label">Progress</label>
        <input type="number" class="form-control" placeholder="10" min="1" max="100"
            wire:model="progress " disabled  />
       
    </div>
 </x-modal-component>        

