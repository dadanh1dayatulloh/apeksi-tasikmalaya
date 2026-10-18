@extends('layouts.app')
@section('title', 'Budaya — Tasikmalaya Digital Guide')
@section('content')
<section class="mx-auto max-w-6xl px-5 pb-24 pt-28">
    <x-section-title title="Warisan yang|Tetap Hidup" />
    <div class="mt-12 flex flex-wrap gap-5">
        @foreach ($items as $item) <x-culture-card :item="$item" /> @endforeach
    </div>
</section>
@endsection
