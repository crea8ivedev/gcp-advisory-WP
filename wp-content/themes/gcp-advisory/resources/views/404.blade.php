@extends('layouts.app')

@section('content')
    @include('partials.page-header')
    <div class="container-fluid-lg py-[40px] lg:py-[80px]">
        <div
            class="flex items-center gap-[30px] lg:gap-[55px] max-w-[1033px] mx-auto justify-center 1023:flex-col-reverse">
            @if (!empty($error_image))
                <div class="error404-image max-w-[500px] xl2:max-w-[646px]">
                    <img src="{!! $error_image['url'] !!}" class="lozad img-fluid" alt="{!! $error_image['alt'] !!}">
                </div>
            @endif
            @if (!have_posts())
                @if (!empty($error_heading))
                    <div class="error404-content flex-shrink-0 1023:text-center">
                        <div class="top-title fadeText ">
                            <div class="title big title-green mb-[20px] last:mb-0">
                                <h2>{!! $error_heading !!} </h2>
                            </div>
                            @if (!empty($error_description))
                                <div class="sub title-green title-capitalize title-darkpurle">
                                    <h3 class="h2">{!! $error_description !!}</h2>
                                </div>
                            @endif
                        </div>
                    </div>
                @endif
            @endif
        </div>
    </div>
@endsection
