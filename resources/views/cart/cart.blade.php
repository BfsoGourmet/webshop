@extends('layouts.app')
@section('content')
<div id="itemHolder" class="container">
    <h1>Warenkorb</h1>
    <table class="table table-hover border-shadow-left " style="margin-bottom: 20px;">
        <thead>
        <tr>
            <th class="col-6">ARTIKEL</th>
            <th class="col-2">EINZELPREIS</th>
            <th class="col-2">ANZAHL</th>
            <th class="col-2">GESAMTPREIS</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <p>APPLE iPhone 12 - Smartphone (6.1 ", 128 GB, Black)</p><br> <img src="https://i.ibb.co/YNVDKW3/nike101.png" alt="[ProdImg]" border="0"  style="max-width:150px;">
                </td>
                <td>CHF 999.99</td>
                <td>
                    <select class="form-select" aria-label="" style="width: 65%">
                        <option value="0">Entfernen</option>
                        <option selected value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>

                    </select>
                </td>
                <td>CHF 999.99</td>
            </tr>

        </tbody>
    </table>
    <div class="container" style="  border: 1px solid rgba(219,216,207, 0.8);">
        <div class="row">
            <div class="col-7">

            </div>
            <div class="col-5">

                <ul class="list-group borderless" style="padding: 10px 0px">
                    <li class="list-group-item borderless"><span style="float: left"></span>Zwischensumme<span style="float: right">CHF 99999.99</span></li>
                    <li class="list-group-item borderless"><span style="float: left"></span>Versandkosten<span style="float: right">CHF 0.00</span> </li>
                    <li class="list-group-item borderless"><span style="float: left"></span>Enthaltene 7.7% MwSt.<span style="float: right">CHF 69.69</span> </li>
                    <li class="list-group-item borderless"><span style="float: left; font-weight: 700; font-size: 20px;">Total:</span><span style="float: right; font-size: 24px; font-weight: 700;"><bold>CHF 1699.99</bold></span> </li>
                </ul>
            </div>
        </div>
    </div>
    <div style="padding-bottom: 80px">
        <button type="button" class="btn btn-lg btn-danger " style="margin: 25px 0px;width: 150px; float: right">Zur Kasse</button>
    </div>


</div>
<script>
    $( document ).ready(function() {
        


    });
</script>
@stop
