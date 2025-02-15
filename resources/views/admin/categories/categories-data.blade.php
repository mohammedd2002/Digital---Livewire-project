<div>
    <div>
        <input type="text" class="form-control w-25" placeholder="Search" wire:model.live="search">
    </div>
    <div class="table-responsive text-nowrap">
        @if ($categories->count() > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th width=90%>Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($categories as $category)
                        <tr>
                            <td>
                                <strong>{{ $category->name }}</strong>
                            </td>
                           
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#"
                                            wire:click.prevent="$dispatch('categoryUpdate' , {id:{{ $category->id }}})"><i
                                                class="bx bx-edit-alt me-1"></i>
                                            Edit</a>
                                        <a class="dropdown-item" href="#"
                                            wire:click.prevent="$dispatch('categoryDelete' , {id:{{ $category->id }}})"><i
                                                class="bx bx-trash me-1"></i>
                                            Delete</a>

        
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
            {{ $categories->links() }}
        @else
            <span class="text-danger">
                No categories Found
            </span>
        @endif


    </div>
</div>
