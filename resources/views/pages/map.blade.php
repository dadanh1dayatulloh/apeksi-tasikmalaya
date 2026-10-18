@extends('layouts.app')
@section('title', 'Peta — Tasikmalaya Digital Guide')
@section('content')
<section class="mx-auto max-w-6xl px-5 pb-24 pt-28">
    <x-section-title title="EXPLORE|TASIKMALAYA" class="mb-10" />
    <x-map :markers="$markers" />
</section>
@endsection
