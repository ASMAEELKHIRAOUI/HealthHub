@include('layouts.sidebar')
<div class="py-5">
    <div class="mb-4">
        <label class="my-1">
            Date and time:
        </label>
        <h5>
            {{ $order->created_at}}
        </h5>
    </div>
    <div class="mb-4">
        <label class="my-1">
            Full Name:
        </label>
        <h5>
            {{ $order->fullName}}
        </h5>
    </div>
    <div class="my-4">
        <label class="my-1">
            Email Address:
        </label>
        <h5>
            {{ $order->email}}
        </h5>
    </div>
    <div class="my-4">
        <label class="my-1">
            Phone:
        </label>
        <h5>
            {{ $order->phone}}
        </h5>
    </div>
    <div class="my-4">
        <label class="my-1">
            Address:
        </label>
        <h5>
            {{ $order->address}}
        </h5>
    </div>
    <div class="my-4">
        <label class="my-1">
            ZIP code:
        </label>
        <h5>
            {{ $order->zipcode}}
        </h5>
    </div>
    <div class="my-4">
        <label class="my-1">
            Status:
        </label>
        <h5>
            {{ $order->status->name}}
        </h5>
    </div>
    @php
        $items = App\Models\OrderItems::all()->where('order_id', $order->id);
        $sum = $items->sum('total');
    @endphp
    <div class="my-4">
        <label class="my-1">
            Products:
        </label>
        @foreach ($items as $item)
            <li class="fs-5 fw-semibold my-2 ms-4">
                {{ $item->product->name }} ({{ $item->quantity }})
            </li>
        @endforeach
    </div>
    <div class="my-4">
        <label class="my-1">
            Total:
        </label>
        <h5>
            {{ $sum }}$
        </h5>
    </div>
</div>
