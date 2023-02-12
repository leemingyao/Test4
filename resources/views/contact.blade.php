@extends('layout')

@section('content')
<iframe width="100%" height="450" style="border:0" loading="lazy"  
src="{!! rtrim($config["contact"]["location"], '/')!!}"></iframe>

<div class="page-contact">
    
    

<div class="container py-5 px-3 mx-auto">
        
        
        

        
    </div>
@endsection

@section('custom_style')
<style>

</style>
@endsection