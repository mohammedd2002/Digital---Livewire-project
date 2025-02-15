<div>
    <div>
        <input type="text" class="form-control w-25" placeholder="Search" wire:model.live="search">
    </div>
    <div class="table-responsive text-nowrap">
        @if ($counters->count() > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th width=40%>Name</th>
                        <th width=25%>Count</th>
                        <th width=25%>Icon</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($counters as $counter)
                        <tr>
                            <td>
                                <strong>{{ $counter->name }}</strong>
                            </td>
                            <td>{{ $counter->count }}</td>

                            <td><i class="{{ $counter->icon }} fa-2x text-secondary mb-3"></i>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#"
                                            wire:click.prevent="$dispatch('counterUpdate' , {id:{{ $counter->id }}})"><i
                                                class="bx bx-edit-alt me-1"></i>
                                            Edit</a>
                                        <a class="dropdown-item" href="#"
                                            wire:click.prevent="$dispatch('counterDelete' , {id:{{ $counter->id }}})"><i
                                                class="bx bx-trash me-1"></i>
                                            Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
            {{ $counters->links() }}
        @else
            <span class="text-danger">
                No counters Found
            </span>
        @endif


    </div>
</div>
