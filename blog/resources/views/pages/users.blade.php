@extends('layouts/global')

@section('pages')

<h1 class="title">Hi Users!</h1>


@endsection
@push('after-css')
    <style>
        .title{
            color: black
        }
    </style>
@endpush
@endsection
