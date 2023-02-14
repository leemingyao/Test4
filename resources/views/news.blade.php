@extends('layout')

@section('content')
<div class="subpage-banner">
   <div class="subpage-banner-item" style="">
        <div class="sub-banner-content">
            <h1>Global News</h1>
        </div>
   </div>
</div>

<div class="page-news">
    
</div>

<div class="engaging-customer">
    <div class="overlay"></div>
    @include('partial.engaging')
</div>

@endsection

@section('custom_style')
<style>

</style>
@endsection