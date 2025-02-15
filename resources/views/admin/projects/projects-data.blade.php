<div>
    <div>
        <input type="text" class="form-control w-25" placeholder="Search" wire:model.live="search">
    </div>
    <div class="table-responsive text-nowrap">
        @if ($projects->count() > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th width=30%>Name</th>
                        <th width=30%>Category</th>
                        <th width=30%>Image</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($projects as $project)
                        <tr>
                            <td>
                                <strong>{{ $project->name }}</strong>
                            </td>
                            <td>{{ $project->category?->name }}</td>
                            <td><img src="{{ asset('storage/images/' . $project->image) }}" width="50px" height="50px"></td>

                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#"
                                            wire:click.prevent="$dispatch('projectUpdate' , {id:{{ $project->id }}})"><i
                                                class="bx bx-edit-alt me-1"></i>
                                            Edit</a>
                                        <a class="dropdown-item" href="#"
                                            wire:click.prevent="$dispatch('projectDelete' , {id:{{ $project->id }}})"><i
                                                class="bx bx-trash me-1"></i>
                                            Delete</a>

                                        <a class="dropdown-item" href="#"
                                            wire:click.prevent="$dispatch('projectshow' , {id:{{ $project->id }}})"><i
                                                class="bx bx-show me-1"></i>
                                            Show</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
            {{ $projects->links() }}
        @else
            <span class="text-danger">
                No projects Found
            </span>
        @endif


    </div>
</div>
