@include('layouts.sidebar')


<div class="edit-modal-content p-5">
    <form action="{{ route('orders.update', $order) }}" method="POST" id="add-form" data-parsley-validate>
    @csrf
    @method('PUT')
        <div class="modal-header">
            <h3 class="modal-title text-dark py-4">Edit order</h3>
        </div>
        <div class="modal-body">
            <input type="hidden" name="user_id" value="{{ $userId }}">

            <div class="mb-3">
                <label class="form-label">Full Name</label>
                <input type="text" name="fullName" class="form-control" value="{{ $order->fullName }}" required/>
            </div>

            <div class="mb-3">
                <label class="form-label">Email Address</label>
                <input type="email" name="email" class="form-control" value="{{ $order->email }}" required/>
            </div>

            <div class="mb-3">
                <label class="form-label">Phone Number</label>
                <input type="tel" name="phone" class="form-control" value="{{ $order->phone }}" required/>
            </div>

            <div class="mb-3">
                <label class="form-label">Address</label>
                <input type="text" name="address" class="form-control" value="{{ $order->address }}" required/>
            </div>

            <div class="mb-3">
                <label class="form-label">ZIP Code</label>
                <input type="number" name="zipcode" class="form-control" value="{{ $order->zipcode }}" required/>
            </div>

            @php
            $statuses = App\Models\Status::all();
            @endphp

            <div class="mb-3">
                <label class="form-label">Status</label>
                <select class="form-select" name="status_id" aria-label="Default select example">
                    <option disabled selected>Open this select menu</option>
                    @foreach($statuses as $status)
                        <option value="{{ $status->id }}" @if ($order->status_id == $status->id) selected @endif>{{ $status->name }}</option>
                    @endforeach
                </select>
            </div>

        </div>
        <div class="modal-footer d-flex justify-content-end my-5">
            <a href="#" class="btn big_btn btn-white border" data-bs-dismiss="modal" id="cancel-btn">Cancel</a>
            <button type="submit" name="SaveOrder" class="color big_btn text-light border-white p-2 rounded" id="save-btn">Save</button>
        </div>
    </form>
</div>
            
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
