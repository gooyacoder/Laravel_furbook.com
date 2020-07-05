@extends('layouts.master')

@section('header')
<h1>About This Site</h1>
@endsection

@section('content')
<p>
	There are over {{ $number_of_cats }} cats on this site!
</p>
@endsection