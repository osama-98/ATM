<tr>
    <th>
        <input class="form-control mw-300px" type="text" wire:model.defer="user.name">
    </th>
    <th>
        <input class="form-control mw-300px" type="text" wire:model.defer="user.username">
    </th>
    <th>{{ $user['deposit_transactions_count'] }}</th>
    <th>{{ $user['withdraw_transactions_count'] }}</th>
    <th>
        <a href="{{ route('users.edit', ['user' => $user['id']]) }}">
            <i class="fs-4 fa-solid cursor-pointer fa-eye text-success me-3"></i>
        </a>
        <i class="fs-4 fa-solid cursor-pointer fa-save text-info me-3" wire:click="save"></i>
        <i class="fs-4 fa-solid cursor-pointer fa-trash-alt text-danger" data-bs-toggle="modal" data-bs-target="#delete_user{{ $user['id'] }}"></i>

        <div class="modal fade" id="delete_user{{ $user['id'] }}" tabindex="-1" wire:ignore.self>
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content rounded">
                    <div class="modal-header pb-0 border-0 justify-content-end">
                        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                            <label for="" class="svg-icon svg-icon-2 cursor-pointer">
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
