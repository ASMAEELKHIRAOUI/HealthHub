@include('layouts.sidebar')
<div class="p-5">
    <div class="row">
        <div class="col-lg-12">
            <div class="overview-wrap">
                <h2 class="title-1 m-b-25 me-4 mt-4" id="orders-list">Orders</h2>
            </div>
            <br>
            <div class="table-responsive table--no-card mb-4">
                <table class="table table-borderless table-striped table-earning">
                    <thead>
                        <tr>
                            <th class="text-right">Full name</th>
                            <th class="text-right">Email Address</th>
                            <th class="text-right">Phone</th>
                            <th class="text-right">Address</th>
                            <th class="text-right">ZIP code</th>
                            <th class="text-right">Status</th>
                            <th class="text-right">Products</th>
                            <th class="text-right">Total</th>
                            <th class="text-right">Date/Time</th>
                            <th class="text-left"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($orders as $order)
                            <tr>
                                <td class="text-right">{{ $order->fullName }}</td>
                                <td class="text-right">{{ $order->email }}</td>
                                <td class="text-right">{{ $order->phone }}</td>
                                <td class="text-right">{{ $order->address }}</td>
                                <td class="text-right">{{ $order->zipcode }}</td>
                                <td class="text-right">{{ $order->status->name }}</td>
                                @php
                                    $items = App\Models\OrderItems::all()->where('order_id', $order->id);
                                    $sum = $items->sum('total');
                                @endphp
                                <td class="text-right">
                                    @foreach ($items as $item)
                                        {{ $item->product->name }} ({{ $item->quantity }}),
                                    @endforeach
                                </td>
                                <td class="text-right">{{ $sum }}$</td>
                                <td class="text-right">{{ $order->created_at }}</td>
                                <td class="text-left d-flex justify-content-end">
                                    <a class="text-dark me-3" href="{{ route('order.details', $order->id) }}">details</a>
                                    <form action="{{ route('order.destroy',$order->id) }}" method="POST">
                                        <a href="{{ route('order.edit',$order->id) }}">
                                            <i class="fa fa-edit text-primary me-2"></i>
                                        </a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="delete-btn">
                                            <i class="fa fa-trash text-danger"></i>
                                        </button>
                                    </form>
                                    </td>
                            </tr>
                        @empty
                            <h2 class="text-center">No orders here, I guess you'll have to wait</h2>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
