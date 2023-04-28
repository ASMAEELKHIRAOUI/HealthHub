@extends('layouts.footer')
@extends('layouts.app')
@section('content')
<div class="container p-5">
    <form action="{{route('profile.update')}}" method="POST">
        @csrf
        <div class="modal-body">
            <div class="mb-3">
                <label class="form-label">Full Name</label>
                <input type="text" name="name" class="form-control" value="{{ $user->name }}" required/>
            </div>

            <div class="mb-3">
                <label class="form-label">Email Address</label>
                <input type="email" name="email" class="form-control" value="{{ $user->email }}" required/>
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" required/>
            </div>
        </div>
        <div class="modal-footer d-flex justify-content-around my-5">
            <button type="submit" name="SaveOrder" class="btn btn-white border rounded" style="width: 400px">Save</button>
        </div>
    </form>




    
        <div class="row">
            <div class="col-lg-12">
                <div class="overview-wrap">
                    <h2 class="title-1 m-b-25 me-4 mt-4" id="products-list">Orders</h2>
                </div>
        
                <br>
                <div class="table-responsive table--no-card mb-4" >
                    <table class="table table-borderless table-striped table-earning" >
                        <thead >
                            <tr >
                                <th class="text-right">Image</th>
                                <th class="text-right">Name</th>
                                <th class="text-right">Brand</th>
                                <th class="text-right">Quantity</th>
                                <th class="text-right">Price</th>
                                <th class="text-right">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $items = App\Models\OrderItems::with('order.user')->whereHas('order.user', function ($query) {$query->where('id', Illuminate\Support\Facades\Auth::user()->id);})->get();
                            @endphp  
                            @forelse ($items as $item)
                                <tr>
                                    <td class="text-right"><img src="img/products/{{ $item->product->img }}" alt="" style="height:50px; width:50px;"></td>
                                    <td class="text-right">{{ $item->product->name }}</td>
                                    <td class="text-right">{{ $item->product->brand->name }}</td>
                                    <td class="text-right">{{ $item->quantity }}</td>
                                    <td class="text-right">{{ $item->total }}</td>
                                    <td class="text-right">{{ $item->order->status->name }}</td>
                                </tr>
                            @empty
                                <h2>There is no orders here, try placing one!</h2>
                            @endforelse      
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        





</div>

@endsection