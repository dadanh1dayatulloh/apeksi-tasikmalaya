@extends('layouts.app')
@section('title', 'Destinasi — Tasikmalaya Digital Guide')
@section('content')
<section class="mx-auto max-w-6xl px-5 pb-24 pt-28">
    <x-section-title title="Destinasi" />
    <div class="mt-12 flex flex-wrap gap-8">
        @foreach ($items as $item) <x-destination-card :item="$item" /> @endforeach
    </div>
</section>
@endsection
