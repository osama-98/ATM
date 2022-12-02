<tr>
    <th>
        <input class="form-control mw-300px" type="text" wire:model.defer="user.name">
    </th>
    <th>
        <input class="form-control mw-300px" type="text" wire:model.defer="user.username">
    </th>
    <th>
        <div class="form-check form-switch form-check-custom form-check-solid">
            <input class="form-check-input" type="checkbox" wire:model.defer="active" />
        </div>
    </th>
    <th>{{ $user['deposit_transactions_count'] }}</th>
    <th>{{ $user['withdraw_transactions_count'] }}</th>
    <th>
        <div class="dropdown position-static">

            <button data-bs-toggle="dropdown" class="btn btn-sm text-dark btn-light dropdown-toggle">
                Actions
            </button>

            <div class="dropdown-menu min-h-50px max-h-250px overflow-auto mt-1 p-0 rounded min-w-200px">
                <div class="dropdown-item rounded py-2 w-100 position-relative cursor-pointer text-dark">
                    <a wire:click="save" href="javascript:void(0);" class="btn btn-sm p-0 w-100 d-flex justify-content-start align-items-center">
                        <label class="svg-icon svg-icon-2 cursor-pointer btn btn-icon btn-bg-light btn-sm me-1">
                            <svg width="24px" height="24px" viewBox="0 0 24 24" fill="#fff">
                                <path d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor" opacity="0.3"></path>
                                <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor"></path>
                            </svg>
                        </label>
                        <span>Save</span>
                    </a>
                </div>


                <div class="dropdown-item rounded py-2 w-100 position-relative cursor-pointer text-dark">
                    <a href="{{ route('users.edit', ['user' => $user['id']]) }}" class="btn btn-sm p-0 w-100 d-flex justify-content-start align-items-center">
                        <label class="svg-icon svg-icon-2 cursor-pointer btn btn-icon btn-bg-light btn-sm me-1">
                            <svg width="24px" height="24px" viewBox="0 0 24 24" fill="#fff">
                                <path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="currentColor"></path>
                                <path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="currentColor"></path>
                            </svg>
                        </label>
                        <span>Transactions</span>
                    </a>
                </div>


                <div class="dropdown-item rounded py-2 w-100 position-relative cursor-pointer text-dark">
                    <a href="javascript:void(0);" class="btn btn-sm p-0 w-100 d-flex justify-content-start align-items-center" data-bs-toggle="modal" data-bs-target="#delete_user{{ $user['id'] }}">
                        <label class="svg-icon svg-icon-2 cursor-pointer btn btn-icon btn-bg-light btn-sm me-1">
                            <svg width="24px" height="24px" viewBox="0 0 24 24" fill="#fff">
                                <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor"></path>
                                <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor"></path>
                                <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor"></path>
                            </svg>
                        </label>
                        <span>Delete</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="modal fade" id="delete_user{{ $user['id'] }}" tabindex="-1" wire:ignore.self>
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content rounded">
                    <div class="modal-header pb-0 border-0 justify-content-end">
                        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                            <label class="svg-icon svg-icon-2 cursor-pointer">
                                <svg width="24px" height="24px" viewBox="0 0 24 24" fill="#fff">
                                    <g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)" fill="currentColor">
                                        <rect fill="currentColor" x="0" y="7" width="16" height="2" rx="1"></rect>
                                        <rect fill="currentColor" x="0" y="7" width="16" height="2" rx="1"
                                              transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)"></rect>
                                    </g>
                                </svg>
                            </label>
                        </div>
                    </div>

                    <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                        <div class="mb-13 text-center">
                            <!--begin::Title-->
                            <h1 class="mb-3">
                                Delete User
                                <br>
                                <small class="text-muted fs-6">Are you sure you want to delete the user <span class="text-info">{{ $user['name'] }}</span> ?</small>
                            </h1>
                        </div>
                        <div class="w-100 text-center">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-sm-8">
                                        <button class="btn btn-danger w-100" data-bs-dismiss="modal" wire:click="delete">
                                            Delete
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </th>
</tr>
