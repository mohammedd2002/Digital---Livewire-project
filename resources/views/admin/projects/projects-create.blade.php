<x-modal-component id="createModal" title="Add New Project">

    <div class="col-6 mb-0">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" placeholder="Name" wire:model="name" />
        <x-validation-error-component field="name" />
    </div>

    <div class="col mb-0">
        <label class="form-label">Link</label>
        <input type="url" class="form-control" placeholder="Link" wire:model="link" />
        <x-validation-error-component field="link" />
    </div>

    

    <div class="col-6 mb-0 mt-2">
        <label class="form-label">Image</label>
        <input type="file" class="form-control" placeholder="Image" wire:model="image" />
        <div class="text-primary" wire:loading wire:target="image">Uploading...</div>
        <x-validation-error-component field="image" />
    </div>

    <div class="col-6 mb-0 mt-2">
        <label class="form-label">Category</label>
        <select class="form-control" wire:model="category_id">
            <option value="">Select Category</option>
            @if (count($categories) > 0)
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" wire:key="category-{{ $category->id }}">{{ $category->name }}
                    </option>
                @endforeach
            @endif
        </select>
        <x-validation-error-component field="category_id" />
    </div>

    @if ($image)
    <div class="my-4">
        <img src="{{ $image->temporaryUrl() }}" width="170" height="170" />
    </div>
    @endif

    <div class="col mb-0 mt-2">
        <label class="form-label">Description</label>
        <textarea type="text" class="form-control" placeholder="Description" wire:model="description"></textarea>
        <x-validation-error-component field="description" />
    </div>


</x-modal-component>
