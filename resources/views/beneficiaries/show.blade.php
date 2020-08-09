@extends('layouts.header')
    @section('tittle')
        Lista de beneficiarios
    @endsection

    @section('content')
        <h1>{{ $beneficiary->name}}</h1>
        <h1>HOLLA</h1>
    @endsection
@extends('layouts.foot')