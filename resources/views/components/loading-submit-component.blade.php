<button class="btn btn-primary"><span wire:loading.remove>{{$name}}</span>
    <div class="spinner-border spinner-border-sm text-secondary" role="status" wire:loading
        wire:target="submit">
        <span class="visually-hidden">Loading...</span>
    </div>
</button>