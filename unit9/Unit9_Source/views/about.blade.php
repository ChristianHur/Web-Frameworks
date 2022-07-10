@extends('layouts.master')

@section('title', $title )

@section('content')
<main>
    <h1 id="title">{{ $title }}</h1>
    <p>
        I am a Junior Full-Stack Web Developer. I still have so much to learn. My goal is to become
        either a professional Software Development Engineer (SDE) or a business owner and run my own
        web development business.
    </p>
</main>
@endsection
