@extends('layouts.app')
@section('title', 'Kuliner — Tasikmalaya Digital Guide')
@section('content')
<section class="min-h-screen bg-moss px-5 pb-24 pt-28 text-paper">
    <div class="mx-auto max-w-6xl">
        <x-section-title title="Rasa Tasikmalaya" />
        <ul class="mt-12">@foreach ($items as $item) <x-culinary-card :item="$item" /> @endforeach</ul>
    </div>
</section>
@endsection
