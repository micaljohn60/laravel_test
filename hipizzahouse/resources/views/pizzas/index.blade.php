@extends('layouts.app')
@section('content')
        <div class="flex-center position-ref full-height">


            <div class="content">
                <div class="title m-b-md">
                    Pizzas List
                </div>
                <p> </p>
              
                @foreach($pizzas as $pizza)
                 <p> {{$pizza->name }} {{$pizza->base }} {{$pizza->type}}</p>
                @endforeach

               </div>
        </div>
@endsection

