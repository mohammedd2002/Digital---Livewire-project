<form class="row" wire:submit.prevent='submit'>
  
<x-success-session/>

    <div class="col-md-6">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" placeholder="Name" wire:model='settings.name' />
        <x-validation-error-component field="settings.name" />
        
    </div>
    <div class="col-md-6">
        <label class="form-label">Email</label>
        <input type="text" class="form-control" placeholder="Email" wire:model='settings.email' />
        <x-validation-error-component field="settings.email" />
    </div>
    <div class="col-md-6 mt-2">
        <label class="form-label">Address</label>
        <input type="text" class="form-control" placeholder="Address" wire:model='settings.address' />
        <x-validation-error-component field="settings.address" />
    </div>
    <div class="col-md-6 mt-2">
        <label class="form-label">Phone</label>
        <input type="text" class="form-control" placeholder="Phone" wire:model='settings.phone' />
        <x-validation-error-component field="settings.phone" />

    
    </div>
    <div class="col-md-6 mt-2">
        <label class="form-label">Facebook</label>
        <input type="text" class="form-control" placeholder="Facebook" wire:model='settings.facebook' />
        <x-validation-error-component field="settings.facebook" />

    </div>
    <div class="col-md-6 mt-2">
        <label class="form-label">Twitter</label>
        <input type="text" class="form-control" placeholder="Twitter" wire:model='settings.twitter' />
        <x-validation-error-component field="settings.twitter" />
    </div>
    <div class="col-md-6 mt-2">
        <label class="form-label">Linkedin</label>
        <input type="text" class="form-control" placeholder="Linkedin" wire:model='settings.linkedin' />
        <x-validation-error-component field="settings.linkedin" />

    </div>
    <div class="col-md-6 mt-2">
        <label class="form-label">Instagram</label>
        <input type="text" class="form-control" placeholder="Instagram" wire:model='settings.instagram' />
        <x-validation-error-component field="settings.instagram" />
    </div>
    <div class="col-md-12 mt-4">
        <x-loading-submit-component name="Submit" />
    </div>
</form>
