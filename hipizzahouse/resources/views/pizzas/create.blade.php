@extends('layouts.app')
@section('content')
        <div class="flex-center position-ref full-height">


            <div class="content">
                <div class="title m-b-md">
                    Add New Pizza
                </div>
                
                <form action="/pizzas" method="POST">
                @csrf
                <label for="name">Name :</label>
                <input type="text" name="name" id="name">
                <label for="base">Base :</label>
                <input type="text" id="base" name="base">
                <label for="type">Type :</label>
                <input type="text" id="type" name="type"> <br><br>
                <input type="submit" name="submit" value="Add Pizza">
                </form>
              
               

               </div>
        </div>
@endsection

