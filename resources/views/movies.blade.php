@extends('layout.main')

@section('title', 'Movies')

@section('home')
    <main>
        <div class="container-lg">
            <div class="row justify-content-center">
                 @forelse ($movies as $movie)
                    @include('import.card')
                 @empty
                     <h4>
                         Non sono presenti film.
                     </h4>
                 @endforelse        
            </div>
        </div>
    </main>
@endsection