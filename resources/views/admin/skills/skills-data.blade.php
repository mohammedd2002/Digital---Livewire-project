<div>
    <div>
        <input type="text" class="form-control w-25" placeholder="Search" wire:model.live="search">
    </div>
    <div class="table-responsive text-nowrap">
        @if ($skills->count() > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th width=45%>Project</th>
                        <th width=45%>Client</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($skills as $skill)
                        <tr>
                            <td>
                                <strong>{{ $skill->name }}</strong>
                            </td>
                            <td>{{ $skill->progress }}</td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#"
                                            wire:click.prevent="$dispatch('skillUpdate' , {id:{{ $skill->id }}})"><i
                                                class="bx bx-edit-alt me-1"></i>
                                            Edit</a>
                                        <a class="dropdown-item" href="#"
                                            wire:click.prevent="$dispatch('skillDelete' , {id:{{ $skill->id }}})"><i
                                                class="bx bx-trash me-1"></i>
                                            Delete</a>

                                        <a class="dropdown-item" href="#"
                                            wire:click.prevent="$dispatch('skillShow' , {id:{{ $skill->id }}})"><i
                                                class="bx bx-show me-1"></i>
                                            Show</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
            {{ $skills->links() }}
        @else
            <span class="text-danger">
                No Skills Found
            </span>
        @endif


    </div>
</div>
