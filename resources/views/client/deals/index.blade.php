@extends('templates.main-client')

@section('section')
    @include('partials.client.deals.hero')

    @include('partials.client.deals.search')

    @include('partials.client.deals.content')
@endsection