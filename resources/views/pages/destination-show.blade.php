@extends('layouts.app')
@section('title', $item['title'].' — Tasikmalaya Digital Guide')
@section('description', $item['description'])
@section('content')
<article class="mx-auto max-w-3xl px-5 pb-24 pt-28">
    <p class="font-semibold capitalize text-payung">{{ $item['category'] }}</p>
    <h1 class="font-display text-5xl font-extrabold md:text-7xl">{{ $item['title'] }}</h1>
    <p class="mt-3 text-stone">{{ $item['location'] }}</p>
    <img src="{{ asset($item['image']) }}" alt="{{ $item['title'] }}" onerror="this.remove()" class="mt-8 w-full rounded-3xl">
    <p class="mt-8 text-lg">{{ $item['description'] }}</p>
    <a href="{{ route('destinations') }}" class="mt-10 inline-block border-b-2 border-ink font-bold">Kembali ke destinasi</a>
</article>
@endsection
