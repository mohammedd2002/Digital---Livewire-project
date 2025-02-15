<div>
    <div>
        <input type="text" class="form-control w-25" placeholder="Search" wire:model.live="search">
    </div>
    <div class="table-responsive text-nowrap">
        @if ($subscribers->count() > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th width=90%>Email</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($subscribers as $subscriber)
                        <tr>
                            <td>
                                <strong>{{ $subscriber->email }}</strong>
                            </td>
                          
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                      
                                        <a class="dropdown-item" href="#"
                                            wire:click.prevent="$dispatch('subscriberDelete' , {id:{{ $subscriber->id }}})"><i
                                                class="bx bx-trash me-1"></i>
                                            Delete</a>                                     
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
            {{ $subscribers->links() }}
        @else
            <span class="text-danger mt-3 d-block">
                No subscribers Found
            </span>
        @endif


    </div>
</div>
