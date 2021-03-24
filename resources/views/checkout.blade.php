@extends('layouts.app')
@section('content')
    @include('partials.errors')

    <div class="container">
    <h1>Checkout</h1>
    <form method="post">
        @csrf
        <h3>1. Lieferung</h3>
        <h4>Lieferadresse</h4>
        <div class="deliveryAddress">
            <div class="form-group">
                <label>Vorname</label>
                <input type="text" class="form-control" name="firstNameDelivery" id="firstNameDelivery">
            </div>
            <div class="form-group">
                <label>Nachname</label>
                <input type="text" class="form-control" name="lastNameDelivery" id="lastNameDelivery">
            </div>
            <div class="form-group">
                <label>Telefonnummer</label>
                <input type="text" class="form-control" name="phoneDelivery" id="phoneDelivery">
            </div>
            <div class="form-group">
                <label>E-Mail</label>
                <input type="email" class="form-control" name="emailDelivery" id="emailDelivery">
            </div>
            <div class="form-group">
                <label>Adresse</label>
                <input type="text" class="form-control" name="addressDelivery" id="addressDelivery">
            </div>
            <div class="form-group">
                <label>Postleizahl</label>
                <input type="text" class="form-control" name="postCodeDelivery" id="postCodeDelivery">
            </div>
            <div class="form-group">
                <label>Stadt</label>
                <input type="text" class="form-control" name="cityDelivery" id="cityDelivery">
            </div>
        </div>
        <h3>2. Zahlung</h3>
        <h4>Rechnung</h4>
        <span>Du bezahlst die Ware per Rechnung.</span>
        <div class="form-group">
            <input type="checkbox" class="form-check-input" name="hasDifferentAddress" id="hasDifferentAddress" onchange="valueChanged()">
            <label>Andere Rechnungsadresse</label>
        </div>
        <div class="billingAddress" id="billingAddress" style="display:none;">
            <div class="form-group">
                <label>Vorname</label>
                <input type="text" class="form-control" name="firstNameBilling" id="firstNameBilling">
            </div>
            <div class="form-group">
                <label>Nachname</label>
                <input type="text" class="form-control" name="lastNameBilling" id="lastNameBilling">
            </div>
            <div class="form-group">
                <label>Telefonnummer</label>
                <input type="text" class="form-control" name="phoneBilling" id="phoneBilling">
            </div>
            <div class="form-group">
                <label>E-Mail</label>
                <input type="email" class="form-control" name="emailBilling" id="emailBilling">
            </div>
            <div class="form-group">
                <label>Adresse</label>
                <input type="text" class="form-control" name="addressBilling" id="addressBilling">
            </div>
            <div class="form-group">
                <label>Postleizahl</label>
                <input type="text" class="form-control" name="postCodeBilling" id="postCodeBilling">
            </div>
            <div class="form-group">
                <label>Stadt</label>
                <input type="text" class="form-control" name="cityBilling" id="cityBilling">
            </div>
        </div>

        <h3>3. Bestellübersicht</h3>
        <div>Liste der Produkte</div>
        <br>
        <input type="submit" class="btn btn-primary" name="submit" value="Jetzt kaufen">
    </form>
</div>

<script type="text/javascript" src="{{ asset('js/hideBillingAddress.js') }}"></script>

@stop

