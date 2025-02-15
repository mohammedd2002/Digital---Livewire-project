<x-modal-component id="showModal" title="Show Message">
 
    <div class="col-6 mb-0">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" placeholder="Name" wire:model="name" disabled />
    
    </div>
    <div class="col-6 mb-0">
        <label class="form-label">Email</label>
        <input type="text" class="form-control" placeholder="Email" wire:model="email" disabled />
    </div>

    <div class="col-12 mb-0">
        <label class="form-label">Message</label>
        <textarea type="text" class="form-control" placeholder="Message" wire:model="message" disabled ></textarea>
    
    </div>
 
 </x-modal-component>        

