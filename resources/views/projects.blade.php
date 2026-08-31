@extends('layouts.app')

@section('title', __('projects.page_title'))

@section('content')

    <section class="px-6 md:px-16 pt-32 pb-24">

        <h1 class="text-3xl md:text-5xl font-extrabold mb-4">{{ __('projects.page_title') }}</h1>
        <p class="text-gray-400 max-w-xl mb-10">{{ __('projects.page_subtitle') }}</p>

        {{-- ===================== TABS ===================== --}}
        <div class="flex flex-wrap gap-3 mb-12 text-sm" id="category-tabs">
            @foreach($categories as $index => $category)
                <button
                    class="tab-btn px-5 py-2.5 rounded-full border transition cursor-pointer {{ $index === 0 ? 'border-accent text-accent' : 'border-base-line text-gray-400' }}"
                    data-category="{{ $category }}"
                    data-color="{{ $category === 'main' ? 'accent' : 'orange' }}">
                    {{ __('projects.category.' . $category) }}
                    <span class="text-gray-600">({{ $projects[$category]->count() }})</span>
                </button>
            @endforeach
        </div>

        {{-- ===================== TAB PANELS ===================== --}}
        @foreach($categories as $index => $category)
            <div class="tab-panel grid gap-6 {{ $category === 'main' ? 'md:grid-cols-1' : 'md:grid-cols-2' }}"
                 data-panel="{{ $category }}"
                 style="{{ $index === 0 ? '' : 'display:none' }}">

                @forelse($projects[$category] as $project)
                    <div id="{{ $project->slug }}"
                         class="project-card cursor-pointer bg-base-card border border-base-line rounded-2xl p-7 hover:border-accent-dim transition"
                         data-slug="{{ $project->slug }}">

                        <svg class="card-border-track" preserveAspectRatio="none">
                            <rect x="1" y="1" width="calc(100% - 2px)" height="calc(100% - 2px)" rx="16" ry="16"/>
                        </svg>

                        <h3 class="text-xl font-extrabold mb-2">{{ $project->title }}</h3>
                        <p class="text-gray-400 text-sm mb-4">{{ $project->summary }}</p>

                        <div class="flex flex-wrap gap-2 mb-2">
                            @foreach($project->tech_stack as $tech)
                                <span
                                    class="font-mono text-xs text-gray-400 border border-base-line rounded px-2 py-1">{{ $tech }}</span>
                            @endforeach
                        </div>

                        <span class="text-accent text-sm font-medium">
                            {{ __('projects.view_details') }}
                            <span class="inline-block ltr:rotate-180">←</span>
                        </span>

                        <div class="hidden modal-content-source">
                            <h3 class="text-2xl font-extrabold mb-4">{{ $project->title }}</h3>
                            <p class="text-gray-300 leading-loose mb-6">{{ $project->description }}</p>

                            <h4 class="text-sm text-accent mb-3">{{ __('projects.highlights') }}</h4>
                            <ul class="grid gap-2 mb-6">
                                @foreach($project->highlights as $point)
                                    <li class="text-gray-300 text-sm flex gap-2">
                                        <span class="text-accent">▸</span> {!! $point !!}
                                    </li>
                                @endforeach
                            </ul>

                            <div class="flex items-center gap-3 flex-wrap">
                                <span class="text-gray-400 text-xs">{{ __('projects.view_full_details') }}</span>

                                @if($project->github_url)
                                    <a href="{{ $project->github_url }}" target="_blank"
                                       class="px-5 py-2.5 rounded-lg border border-base-line text-sm hover:bg-base-raise">
                                        GitHub
                                    </a>
                                @endif

                                @if($project->demo_url)
                                    <a href="{{ $project->demo_url }}" target="_blank"
                                       class="px-5 py-2.5 rounded-lg bg-accent text-[#08110d] text-sm font-semibold">
                                        {{ __('projects.view_demo') }}
                                    </a>
                                @endif
                            </div>

                            @if(!empty($project->screenshots))
                                <div class="mb-6">
                                    <h4 class="font-mono text-sm text-accent mb-3">{{ __('projects.screenshots') }}</h4>
                                    <div class="screenshot-carousel relative">
                                        <div class="screenshot-track rounded-lg border border-base-line overflow-hidden">
                                            @foreach($project->screenshots as $i => $shot)
                                                <img src="{{ asset('images/projects/' . $shot) }}"
                                                     class="screenshot-slide w-full cursor-zoom-in {{ $i === 0 ? '' : 'hidden' }}"
                                                     data-index="{{ $i }}"
                                                     alt="{{ $project->title }} screenshot {{ $i + 1 }}">
                                            @endforeach
                                        </div>

                                        @if(count($project->screenshots) > 1)
                                            <button type="button" class="screenshot-prev absolute top-1/2 -translate-y-1/2 start-2 bg-base-bg/80 hover:bg-base-bg rounded-full w-8 h-8 flex items-center justify-center text-lg">‹</button>
                                            <button type="button" class="screenshot-next absolute top-1/2 -translate-y-1/2 end-2 bg-base-bg/80 hover:bg-base-bg rounded-full w-8 h-8 flex items-center justify-center text-lg">›</button>

                                            <div class="screenshot-dots flex justify-center gap-1.5 mt-3">
                                                @foreach($project->screenshots as $i => $shot)
                                                    <span class="w-1.5 h-1.5 rounded-full {{ $i === 0 ? 'bg-accent' : 'bg-base-line' }}"></span>
                                                @endforeach
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            @endif

                        </div>
                    </div>
                @empty
                    <p class="text-gray-600 text-sm">{{ __('projects.empty_category') }}</p>
                @endforelse

            </div>
        @endforeach

    </section>

    {{-- ===================== MODAL ===================== --}}
    <div id="project-modal" class="hidden fixed inset-0 z-50 items-center justify-center px-6">
        <div id="modal-backdrop" class="absolute inset-0 bg-black/70"></div>
        <div
            class="relative bg-base-card border border-base-line rounded-2xl max-w-2xl w-full max-h-[85vh] overflow-y-auto p-8">
            <button id="modal-close" class="absolute top-5 end-5 text-gray-500 hover:text-white text-xl">&times;
            </button>
            <div id="modal-body"></div>
        </div>
    </div>

    <div id="lightbox" class="hidden fixed inset-0 z-[60] items-center justify-center bg-black/90 px-6">
        <button id="lightbox-close" class="absolute top-6 end-6 text-white text-3xl">&times;</button>
        <img id="lightbox-img" src="" class="max-w-full max-h-[85vh] rounded-lg">
    </div>

@endsection

@push('scripts')
    <script>
        $(function () {
            $('.tab-btn').on('click', function () {
                const category = $(this).data('category');
                const color = $(this).data('color');
                const activeClass = color === 'orange' ? 'border-[#ff6a4d] text-[#ff6a4d]' : 'border-accent text-accent';

                $('.tab-btn').removeClass('border-accent text-accent border-[#ff6a4d] text-[#ff6a4d]').addClass('border-base-line text-gray-400');
                $(this).removeClass('border-base-line text-gray-400').addClass(activeClass);

                $('.tab-panel').hide();
                $('.tab-panel[data-panel="' + category + '"]').show();
            });

            $('.project-card').on('click', function () {
                const content = $(this).find('.modal-content-source').html();
                $('#modal-body').html(content);
                $('#project-modal').removeClass('hidden').addClass('flex');
            });

            $('#modal-close, #modal-backdrop').on('click', function () {
                $('#project-modal').addClass('hidden').removeClass('flex');
            });

            const targetSlug = window.location.hash.replace('#', '');
            if (targetSlug) {
                const targetCard = $('#' + targetSlug);
                if (targetCard.length) {
                    const targetCategory = targetCard.closest('.tab-panel').data('panel');

                    $('.tab-btn').removeClass('border-accent text-accent').addClass('border-base-line text-gray-400');
                    $('.tab-btn[data-category="' + targetCategory + '"]')
                        .removeClass('border-base-line text-gray-400').addClass('border-accent text-accent');

                    $('.tab-panel').hide();
                    $('.tab-panel[data-panel="' + targetCategory + '"]').show();

                    setTimeout(function () {
                        targetCard.trigger('click');
                        targetCard[0].scrollIntoView({behavior: 'smooth', block: 'center'});
                    }, 200);
                }
            }

            $(document).on('click', '.screenshot-next', function () {
                const carousel = $(this).closest('.screenshot-carousel');
                const slides = carousel.find('.screenshot-slide');
                const dots = carousel.find('.screenshot-dots span');
                const current = slides.filter(':visible').data('index');
                const next = (current + 1) % slides.length;
                slides.addClass('hidden').eq(next).removeClass('hidden');
                dots.removeClass('bg-accent').addClass('bg-base-line').eq(next).addClass('bg-accent').removeClass('bg-base-line');
            });

            $(document).on('click', '.screenshot-prev', function () {
                const carousel = $(this).closest('.screenshot-carousel');
                const slides = carousel.find('.screenshot-slide');
                const dots = carousel.find('.screenshot-dots span');
                const current = slides.filter(':visible').data('index');
                const prev = (current - 1 + slides.length) % slides.length;
                slides.addClass('hidden').eq(prev).removeClass('hidden');
                dots.removeClass('bg-accent').addClass('bg-base-line').eq(prev).addClass('bg-accent').removeClass('bg-base-line');
            });

            $(document).on('click', '.screenshot-slide', function () {
                $('#lightbox-img').attr('src', $(this).attr('src'));
                $('#lightbox').removeClass('hidden').addClass('flex');
            });

            $('#lightbox-close, #lightbox').on('click', function (e) {
                if (e.target.id === 'lightbox-close' || e.target.id === 'lightbox') {
                    $('#lightbox').addClass('hidden').removeClass('flex');
                }
            });
        });
    </script>
@endpush
