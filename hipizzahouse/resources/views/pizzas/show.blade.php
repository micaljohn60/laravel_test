@extends('layouts.app')
@section('content')
        <div class="flex-center position-ref full-height">


            <div class="content">
                <div class="title m-b-md">
                    Pizzas ID - {{$pizza->id}} <br>
                    Order BY - {{$pizza->name}} <br>
                    Base - {{$pizza->base}} <br>
                    Type - {{$pizza->type}} <br>

                    <a href="/pizzas">Go Back</a>

                </div>
                
               </div>
        </div>
@endsection

