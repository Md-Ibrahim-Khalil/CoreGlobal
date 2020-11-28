@extends('layouts.index')

@section('content')


<!--Card-->
<div class="card">

    <!--Card content-->
    <div class="card-body">

        <!-- Form -->
        <form name="">
            <!-- Heading -->
            <h3 class="dark-grey-text text-center">
                <strong>Write to us:</strong>
            </h3>
            <hr>

            <div class="md-form">
                <i class="fas fa-user prefix grey-text"></i>
                <input type="text" id="form3" class="form-control">
                <label for="form3">Your name</label>
            </div>
            <div class="md-form">
                <i class="fas fa-envelope prefix grey-text"></i>
                <input type="text" id="form2" class="form-control">
                <label for="form2">Your email</label>
            </div>
            <div class="md-form">
                <i class="fas fa-book-reader prefix grey-text"></i>
                <input type="text" id="form2" class="form-control">
                <label for="form2">Courses</label>
            </div>

            <div class="md-form">
                <i class="fas fa-pencil-alt prefix grey-text"></i>
                <textarea type="text" id="form8" class="md-textarea"></textarea>
                <label for="form8">Your message</label>
            </div>

            <div class="text-center">
                <button class="btn btn-indigo">Send</button>
                <hr>
                <fieldset class="form-check">
                    <input type="checkbox" class="form-check-input" id="checkbox1">
                    <label for="checkbox1" class="form-check-label dark-grey-text">Registered Today </label>
                </fieldset>
            </div>

        </form>
        <!-- Form -->

    </div>

</div>
<!--/.Card-->


@endsection