@extends('layouts.footer')
@extends('layouts.app')
@section('content')
<div class="container p-5 mt-4">
    <div class="d-flex row">
        <div class="col-9 d-flex row mt-5 justify-content-center">
                    <div class="modal-content">
                        <form action="{{ route('order.store') }}" method="POST" id="add-form" data-parsley-validate>
                            @csrf
                            <div class="modal-body">
                                <input type="hidden" name="user_id" value="{{ $user->id }}">
                                <input type="hidden" name="status_id" value="1">

                                <div class="mb-3">
                                    <label class="form-label">Full Name</label>
                                    <input type="text" name="fullName" class="form-control" value="{{ $user->name }}" required/>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Email Address</label>
                                    <input type="email" name="email" class="form-control" value="{{ $user->email }}" required/>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Phone Number</label>
                                    <input type="tel" name="phone" class="form-control" required/>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Address</label>
                                    <input type="text" name="address" class="form-control" required/>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">ZIP Code</label>
                                    <input type="number" name="zipcode" class="form-control" required/>
                                </div>

                            </div>
                            <div class="modal-footer d-flex justify-content-around my-5">
                                {{-- <a href="#" class="btn btn-white border rounded" style="width: 400px">Digital Payment</a> --}}
                                <button type="submit" name="SaveOrder" class="btn btn-white border rounded" style="width: 400px">Submit (Cash on Delivery)</button>
                            </div>
                        </form>
                    </div>
            
        </div>
        

        <div class="col-3 my-5">
            <div class="d-flex justify-content-between px-2">
                <h4>
                    {{ $sum_items }} articles
                </h4>
                <h3>
                    {{ $subtotal }}$
                </h3>
            </div>
            
            <hr>
            <div class="d-flex justify-content-between px-2">
                <h4>
                    Total
                </h4>
                <h3>
                    {{ $subtotal }}$
                </h3>
            </div>
            
            <hr>

        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
@endsection

