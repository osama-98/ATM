<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="table-responsive bg-white p-5">
                <table class="table table-row-dashed table-row-gray-300 gy-7">
                    <thead>
                    <tr class="fw-bold fs-6 text-gray-800">
                        <th>Name</th>
                        <th>Username</th>
                        <th>Deposit Transactions</th>
                        <th>Withdraw Transactions</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($users->total() == 0)
                        <td colspan="4" class="text-center">There are no users.</td>
                    @else
                        @foreach($users as $user)
                            @livewire('users-list-item', ['user' => $user], key(microtime()))
                        @endforeach
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
