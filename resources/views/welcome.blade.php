@extends('layouts.app')
@section('content')

    <div class="position-relative overflow-hidden bg-Gvs p-3 p-md-5 m-md-3 text-center bg-light"  style="background-image: url({{ asset('Banner2.png') }})">
        <div class="col-md-5 p-lg-5 mx-auto margClass ">
            <img src="{{ asset('Schriftzug-weiss.png') }}">
            <p class="lead font-weight-normal" style="font-size: 25px; color: #909090"><span style="font-weight: bold">Die beste Wahl für ihren Einkauf. Gourmet Wallis hat die besten Regional Produkte. Unterstüzen sie die Region.</span></p>
            <a href="{{route('shop_index')}}" class="btn btn-lg btn-dark">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jetzt einkaufen&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
        </div>
    </div>


@stop
