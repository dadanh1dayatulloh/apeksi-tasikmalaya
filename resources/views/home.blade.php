@extends('layouts.app')

@section('content')
    <x-hero :event="config('site.event')" />
    <x-guide-section :guides="config('site.guides')" />
    <x-event-timeline :events="config('site.events')" />
    <x-discover-section :items="config('site.discover')" />
    <x-craft-section :crafts="config('site.crafts')" />
    <x-map-section
        :filters="config('site.culinaryFilters')"
        :culinary="config('site.culinary')"
        :featured="config('site.featuredPlace')"
        :points="config('site.mapPoints')"
        :legend="config('site.mapLegend')" />
    <section class="container-x section-y grid grid-cols-1 gap-10 xl:grid-cols-2 xl:gap-8">
        <x-journey-section :steps="config('site.journey')" :meta="config('site.journeyMeta')" />
        <x-hotel-card :hotel="config('site.hotel')" />
    </section>
    <x-investment-section :items="config('site.investments')" />
    <x-video-banner />
    <section id="digital-guide" class="container-x section-y grid gap-8 xl:grid-cols-[1.35fr_0.9fr_1fr] xl:items-start">
        <x-digital-guide :categories="config('site.digitalCategories')" />
        <x-emergency-card :contacts="config('site.emergency')" />
    </section>
    <x-gallery :filters="config('site.galleryFilters')" :items="config('site.gallery')" />
    <x-closing-banner :event="config('site.event')" />
@endsection
