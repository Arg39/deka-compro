@php
    $clientSlides = [
        asset('assets/img/clients/pins.png'),
        asset('assets/img/clients/itk.png'),
        asset('assets/img/clients/pertamina.png'),
        asset('assets/img/clients/singlurus-pratama.png'),
        asset('assets/img/clients/sims.png'),
        asset('assets/img/clients/sbs.png'),
        asset('assets/img/clients/cta.png'),
        asset('assets/img/clients/tmp.png'),
    ];
@endphp

<div class="w-full flex justify-center items-center">
    <div class="w-full flex flex-col">
        <div 
            x-data="{
                currentPage: 0,
                perPage: 1,
                slides: {{ json_encode($clientSlides) }},
                isDown: false,
                startX: 0,
                scrollLeft: 0,
            
                get pages() {
                    return Math.ceil(this.slides.length / this.perPage);
                },
            
                updatePage(e) {
                    const el = e.target;
                    const scrollLeft = el.scrollLeft;
                    const pageWidth = el.offsetWidth;
                    if (scrollLeft + pageWidth >= el.scrollWidth - 1) {
                        this.currentPage = this.pages - 1;
                    } else {
                        this.currentPage = Math.floor(scrollLeft / pageWidth);
                    }
                },
            
                goTo(page) {
                    const container = $refs.slider;
                    container.scrollTo({
                        left: container.offsetWidth * page,
                        behavior: 'smooth'
                    });
                },
            
                startDrag(e) {
                    this.isDown = true;
                    this.startX = e.pageX || e.touches[0].pageX;
                    this.scrollLeft = $refs.slider.scrollLeft;
                },
            
                endDrag() {
                    this.isDown = false;
                },
            
                drag(e) {
                    if (!this.isDown) return;
                    e.preventDefault();
                    const x = e.pageX || e.touches[0].pageX;
                    const walk = (x - this.startX) * 1.5;
                    $refs.slider.scrollLeft = this.scrollLeft - walk;
                },
            
                maxVisibleDots: 5,
            
                visibleDots() {
                    const total = this.pages;
                    const max = this.maxVisibleDots;
                    let current = this.currentPage;
            
                    if (total <= max) {
                        return [...Array(total).keys()];
                    }
            
                    let start = Math.max(0, current - Math.floor(max / 2));
                    let end = start + max;
            
                    if (end > total) {
                        end = total;
                        start = end - max;
                    }
            
                    return [...Array(end - start).keys()].map(i => i + start);
                },
            
                // Tambahkan lifecycle hooks Alpine
                init() {
                    // Mouse
                    this._mouseupHandler = () => { this.endDrag(); };
                    window.addEventListener('mouseup', this._mouseupHandler);
                    // Touch
                    this._touchendHandler = () => { this.endDrag(); };
                    window.addEventListener('touchend', this._touchendHandler);
                },
                destroy() {
                    window.removeEventListener('mouseup', this._mouseupHandler);
                    window.removeEventListener('touchend', this._touchendHandler);
                }
            }"
            x-init="init()"
            x-effect="$watch('isDown', value => { if (!value) endDrag(); })"
            x-on:destroy="destroy()"
            class="w-full select-none"
        >
            <!-- Card Container -->
            <div 
                x-ref="slider"
                class="flex overflow-x-auto space-x-6 scroll-smooth snap-x snap-mandatory cursor-grab active:cursor-grabbing no-scrollbar noselect"
                @mousedown="startDrag"
                @mouseup="endDrag"
                @mouseleave="endDrag"
                @mousemove="drag"
                @touchstart="startDrag"
                @touchend="endDrag"
                @touchmove="drag"
                @scroll.debounce.100="updatePage"
            >
                <template x-for="(slide, idx) in slides" :key="idx">
                    <div class="snap-start shrink-0 w-[80%] sm:w-[320px] md:w-[360px] flex items-center justify-center">
                        <img 
                            :src="slide" 
                            class="object-contain w-full h-40 md:h-48 rounded-lg bg-white shadow-lg p-4"
                            alt="Client Logo"
                        >
                    </div>
                </template>
            </div>

            <!-- Dot Indicator -->
            <div class="flex justify-center mt-6 space-x-2">
                <template x-for="(dot, idx) in visibleDots()" :key="dot">
                    <button 
                        @click="goTo(dot)"
                        :class="currentPage === dot ? 'bg-[#C00000] w-4 h-4' : 'bg-gray-300 w-3 h-3'"
                        class="rounded-full transition-all duration-200"
                    ></button>
                </template>
            </div>
        </div>
    </div>
</div>