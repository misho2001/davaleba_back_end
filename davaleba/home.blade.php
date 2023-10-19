@extends('layouts.app')

@section('content')

@endsection


@foreach($quizData as $quiz)
    <div class="quiz">
        <h2>{{ $quiz['name'] }}</h2>
        <img src="{{ $quiz['photo'] }}" alt="Quiz Photo">
        <p class="{{ $quiz['status'] === 'published' ? 'published' : 'unpublished' }}">
            {{ $quiz['status'] }}
        </p>
    </div>
@endforeach