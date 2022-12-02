<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h1>Transactions for the user <span class="text-primary">{{ $user['name'] }}</span></h1>
            <div class="table-responsive bg-white p-5">
                <table class="table table-row-dashed table-row-gray-300 gy-7">
                    <thead>
                    <tr class="fw-bold fs-6 text-gray-800 text-center">
                        <th>Value</th>
                        <th>Type</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($transactions->total() == 0)
                        <td colspan="4" class="text-center">There are no transactions.</td>
                    @else
                        @foreach($transactions as $transaction)
                            <tr class="text-center">
                                <th>{{ $transaction['value'] }}</th>
                                <th>
                                <span class="badge badge-light-{{ $transaction['type'] == \App\Enums\TransactionType::Deposit ? 'success' : 'info' }}">
                                    {{ $transaction['type'] }}
                                </span>
                                </th>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>

                <div class="w-100 d-flex justify-content-end">
                    @if(method_exists($transactions, 'links'))
                        {!! $transactions->links() !!}
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
