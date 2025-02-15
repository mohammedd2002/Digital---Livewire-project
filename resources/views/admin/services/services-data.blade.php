<div>
    <div>
        <input type="text" class="form-control w-25" placeholder="Search" wire:model.live="search">
    </div>
    <div class="table-responsive text-nowrap">
        @if ($services->count() > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th width=45%>Name</th>
                        <th width=45%>Icon</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($services as $service)
                        <tr>
                            <td>
                                <strong>{{ $service->name }}</strong>
                            </td>
                            <td> <i class="{{$service->icon}} fa-2x"></i></td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#"
                                            wire:click.prevent="$dispatch('serviceUpdate' , {id:{{ $service->id }}})"><i
                                                class="bx bx-edit-alt me-1"></i>
                                            Edit</a>
                                        <a class="dropdown-item" href="#"
                                            wire:click.prevent="$dispatch('serviceDelete' , {id:{{ $service->id }}})"><i
                                                class="bx bx-trash me-1"></i>
                                            Delete</a>

                                        <a class="dropdown-item" href="#"
                                            wire:click.prevent="$dispatch('serviceShow' , {id:{{ $service->id }}})"><i
                                                class="bx bx-show me-1"></i>
                                            Show</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
            {{ $services->links() }}
        @else
            <span class="text-danger">
                No services Found
            </span>
        @endif


    </div>
</div>
