@extends('layouts.app')

@section('title', "Payment Information")

@section('content')

<div class="container w-50 p-5">
    <h1 class="text-center my-5 color1">Edit Your Payment Method</h1>
            <form action="" method="post">
                <div class="credit-card">
                    <div class="row my-3 align-items-center">
                        <div class="col-6 text-end">
                            <label for="cc-number">Credit Card Number</label>
                        </div>
                        <div class="col-6 d-flex number multifield">
                            <input type="text" name="cc_number1" id="cc_number1" placeholder="0000" class="form-control input-color1 text-center flex-fill me-1" maxlength="4" inputmode='numeric' pattern="\d+" required>
                            <input type="text" name="cc_number2" id="cc_number2" placeholder="0000" class="form-control input-color1 text-center flex-fill me-1" maxlength="4" inputmode="numeric" pattern="\d+" required>
                            <input type="text" name="cc_number3" id="cc_number3" placeholder="0000" class="form-control input-color1 text-center flex-fill me-1" maxlength="4" inputmode="numeric" pattern="\d+" required>
                            <input type="text" name="cc_number4" id="cc_number4" placeholder="0000" class="form-control input-color1 text-center flex-fill me-1" maxlength="4" inputmode="numeric" pattern="\d+" required>
                        </div>
                    </div>

                    <div class="row my-3 align-items-center">
                        <div class="col-6 text-end">
                            <label for="cardholder">Cardholder</label>
                        </div>
                        <div class="col-6 d-flex mutifield">
                            <input type="text" name="cardholder_fname" id="cardholder_fname" placeholder="First Name" class="form-control input-color1 me-1 text-center  flex-fill" required>
                            <input type="text" name="cardholder_lname" id="cardholder_lname" placeholder="Last Name" class="form-control input-color1 text-center flex-fill" required>
                        </div>
                    </div>

                    <div class="row my-3 align-items-center">
                        <div class="col-6 text-end">
                            <label for="cc-exp">Date of Expiration</label>
                        </div>
                        <div class="col-6 d-flex date mutifield align-items-center">
                            <input type="text" name="cc-exp-month" maxlength="2" inputmode="numeric" placeholder="MM" class="form-control input-color1 text-center flex-fill" required>
                            <span class="mx-1">/</span>
                            <input type="text" name="cc-exp-year" placeholder="YY" class="form-control input-color1 text-center flex-fill" required>
                        </div>
                    </div>

                    <div class="row my-3 align-items-center">
                        <div class="col-6 text-end">
                            <label for="cc-cvv">CVV</label>
                        </div>
                        <div class="col-6 d-flex">
                            <input type="text" name="cc-csc" class="form-control input-color1 text-center flex-fill" required>
                        </div>
                    </div>

                    <div class="text-center mt-5">
                        <input type="reset" value="Cancel" class="btn btn-md btn-sub btn-sub:hover me-3">
                        <input type="submit" value="Save" class="btn btn-md btn-main btn-main:hover ms-3">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
