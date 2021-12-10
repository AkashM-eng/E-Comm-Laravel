@extends('master')
@section('content')
    <div class="container">
        <div class="d-flex justify-content-center btn-yellowish p-2">
            <h3 class="text-center">Your Orders</h3>

        </div>
        <table class="table">
            <tbody>
                <tr>
                    <th>Amount</th>
                    <td>Rs. {{ $totalorderprice }}.00</td>
                </tr>
                <tr>
                    <th>Tax</th>
                    <td>Rs. 0.00</td>
                </tr>
                <tr>
                    <th>Delivery</th>
                    <td>Rs. 10.00</td>
                </tr>
                <tr>
                    <th>Total Amount</th>
                    <td>Rs. {{ $totalorderprice + 10 }}.00</td>
                </tr>
            </tbody>
        </table>

        <form action="/orderplace" method="post">
            @csrf
            <div class="form-group row">
                <label for="address" class="col-sm-2 col-form-label">Address :</label>
                <div class="col-sm-10">
                    <textarea name="address" id="address" cols="25" rows="" required></textarea>
                </div>
            </div>

            <fieldset class="form-group">
                <div class="row">
                    <legend class="col-form-label col-sm-2 pt-0">Payment Method :</legend>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="payment_option" id="online_payment"
                                value="cash" required>
                            <label class="form-check-label" for="online_payment">
                                Online Payment
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="payment_option" id="emi_payment" value="cash"
                                required>
                            <label class="form-check-label" for="emi_payment">
                                EMI Payment
                            </label>
                        </div>
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="payment_option" id="pay_on_delivery"
                                value="cash" required>
                            <label class="form-check-label" for="pay_on_delivery">
                                Payment on Delivery
                            </label>
                        </div>
                    </div>
                </div>
            </fieldset>

            <div class="form-group row justify-content-center mt-4">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-success">Order Now</button>
                </div>
            </div>
        </form>
    </div>

@endsection
