@extends('layouts.main')

@section('title', 'Blog')

@section('content')

@include('layouts.inc.header-section')
    <div class="container">
        <div class="row">

            <div class="col-md-8">
              Contact Us
            </div>

            @include('layouts.sidebar')
        </div>
    </div>

@endsection
