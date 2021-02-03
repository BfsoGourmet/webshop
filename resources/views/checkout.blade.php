<div class="container">
    <h1>Checkout</h1>
    <form method="post">
        @csrf
        <h3>1. Lieferung</h3>
        <h4>Lieferadresse</h4>
        <div class="deliveryAddress">
            <div class="form-group">
                <label>Vorname</label>
                <input type="text" class="form-control" name="first_name">
            </div>
            <div class="form-group">
                <label>Nachname</label>
                <input type="text" class="form-control" name="last_name">
            </div>
            <div class="form-group">
                <label>Adresse</label>
                <input type="text" class="form-control" name="address">
            </div>
            <div class="form-group">
                <label>Postleizahl</label>
                <input type="text" class="form-control" name="post_code">
            </div>
            <div class="form-group">
                <label>Stadt</label>
                <input type="text" class="form-control" name="city">
            </div>
        </div>
        <h3>2. Zahlung</h3>
        <h4>Rechnung</h4>
        <div>Du bezahlst die Ware per Rechnung.</div>
        <br>
        <div class="form-group">
            <label>Andere Rechnungsadresse</label>
            <input type="checkbox" name="hasDifferentAddress" id="hasDifferentAddress">
        </div>
        <div class="billingAddress">
            <div class="form-group">
                <label>Vorname</label>
                <input type="text" class="form-control" name="first_name">
            </div>
            <div class="form-group">
                <label>Nachname</label>
                <input type="text" class="form-control" name="last_name">
            </div>
            <div class="form-group">
                <label>Adresse</label>
                <input type="text" class="form-control" name="address">
            </div>
            <div class="form-group">
                <label>Postleizahl</label>
                <input type="text" class="form-control" name="post_code">
            </div>
            <div class="form-group">
                <label>Stadt</label>
                <input type="text" class="form-control" name="city">
            </div>
        </div>

        <h3>3. Bestellübersicht</h3>
        <div>Liste der Produkte</div>
        <br>
        <input type="submit" name="submit" value="Jetzt kaufen">
    </form>
</div>


