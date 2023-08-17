@extends('master')
@section('content')

<div class="custom-product">
    <div class="col-sm-10">
        <table class="table table-striped  my-4 mx-4">
            <tr>
                <td>Amount</td>
                <td>₹ {{$total}}</td>
            </tr>
            <tr>
                <td>Tax</td>
                <td>₹ 0</td>
            </tr>
            <tr>
                <td>Delivery</td>
                <td>₹ 10</td>
            </tr>
            <tr>
                <td>Total Amount</td>
                <td>₹ {{$total+10}}</td>
            </tr>
        </table>
        <form action="/orderPlace" method="POST">
            @csrf
            <div class="form-group  my-4 mx-4">
              <textarea name="address" type="email" placeholder="Enter your Address" class="form-control"></textarea>
            </div>
            <div class="form-group my-4 mx-4">
              <label for="pwd">Payment Method</label>
              <br><br>
              <input type="radio" value="cash" name="payment"><span>Online Payment</span><br><br>
              <input type="radio" value="cash" name="payment"><span>EMI Payment</span><br><br>
              <input type="radio" value="cash" name="payment"><span>Debit Card</span><br><br>
              <input type="radio" value="cash" name="payment"><span>Pay On Delivery</span><br>
            </div>
            <button type="submit" class="btn btn-primary my-4 mx-4">Place your Order</button>
          </form>
    </div>
</div>

@endsection
