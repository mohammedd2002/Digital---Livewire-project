<div>
    <div>
        <input type="text" class="form-control w-25" placeholder="Search" wire:model.live="search">
    </div>
    <div class="table-responsive text-nowrap">
        @if ($messages->count() > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th width=30%>Name</th>
                        <th width=20%>Email</th>
                        <th width=20%>Subject</th>
                        <th width=20%>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($messages as $message)
                        <tr>
                            <td>
                                <strong>{{ $message->name }}</strong>
                            </td>
                            <td>{{ $message->email }}</td>
                            <td>{{ $message->subject }}</td>
                            <td> <span class=" {{ $message->status == 'read' ? 'text-primary' : 'text-danger' }}">
                                    {{ $message->status == 'read' ? 'Active' : 'In Active' }} </span></td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        
                                        <a class="dropdown-item" href="#"
                                        wire:click.prevent="$dispatch('messageShow' , {id:{{ $message->id }}})"><i
                                        class="bx bx-show me-1"></i>
                                        Show</a>
                                        <a class="dropdown-item" href="#"
                                            wire:click.prevent="$dispatch('messageDelete' , {id:{{ $message->id }}})"><i
                                                class="bx bx-trash me-1"></i>
                                            Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
            {{ $messages->links() }}
        @else
            <span class="text-danger">
                No messages Found
            </span>
        @endif


    </div>
</div>
