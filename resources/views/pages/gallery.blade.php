@extends('layouts.app')
@section('title', 'Gallery — Tasikmalaya Digital Guide')
@section('content')
<section class="pb-24 pt-28">
    <div class="mx-auto mb-10 max-w-6xl px-5"><x-section-title title="LIHAT TASIKMALAYA|DARI DEKAT" /></div>
    <x-gallery :items="$items" />
</section>
@endsection
