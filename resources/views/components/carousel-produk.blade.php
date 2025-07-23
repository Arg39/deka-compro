<div class="w-full flex justify-center items-center mt-16 mb-16 px-4 sm:px-12 md:px-24">
    <div class="w-full flex flex-col">
        <h5 class="w-full justify-start text-2xl sm:text-4xl text-[#C00000] uppercase font-extrabold mb-8 leading-tight tracking-wide">
            Kami disini untuk kamu<br>
        </h5>
        <div class="w-1/2 mb-8">
            <p class="font-light text-xl">Kami berusaha untuk terus dapat memenuhi kebutuhan digital kalian. Tidak berhenti disini, layanan yang kami tawarkan akan semakin beragam dan pastinya dapat diandalkan.</p>
        </div>

        @php
            $produkSlides = [
                [
                    'image' => asset('assets/img/produk/wifi.jpg'),
                    'icon' => view('components.icons', ['name' => 'wifi'])->render(),
                    'title' => 'Wifi / Hotspot',
                    'description' => 'Hadirkan Wifi/Hotspot area di public area, sekolah atau ruang usaha anda.'
                ],
                [
                    'image' => asset('assets/img/produk/cctv.jpg'),
                    'icon' => view('components.icons', ['name' => 'cctv'])->render(),
                    'title' => 'CCTV',
                    'description' => 'Pemasangan CCTV menjadi lebih mudah, mengawasi rumah anda. Tidak perlu khawatir saat berpergian.'
                ],
                [
                    'image' => asset('assets/img/produk/local-network.jpg'),
                    'icon' => view('components.icons', ['name' => 'network'])->render(),
                    'title' => 'Local Network',
                    'description' => 'Serahkan perawatan, perbaikan, atau pengembangan jaringan di kantor kamu pada Deka.'
                ],
                [
                    'image' => asset('assets/img/produk/point-to-point.jpg'),
                    'icon' => view('components.icons', ['name' => 'radio'])->render(),
                    'title' => 'RADIO POINT TO POINT / MULTIPOINT',
                    'description' => 'Menyediakan akses internet nirkabel, menghubungkan lokasi yang terpisah/mendukung komunikasi nirkabel dalam suatu jaringan.'
                ],
                [
                    'image' => asset('assets/img/produk/access-point.png'),
                    'icon' => view('components.icons', ['name' => 'access'])->render(),
                    'title' => 'Access Control & Intercom',
                    'description' => 'Memberikan solusi keamanan yang komprehensif dan terintegrasi untuk memenuhi kebutuhan anda.'
                ],
                // Tambahkan slide lainnya jika ada...
            ];
        @endphp

        <div 
            x-data="{
                currentPage: 0,
                perPage: 1,
                slides: {{ json_encode($produkSlides) }},
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
                    const maxScrollLeft = el.scrollWidth - pageWidth;

                    // Jika sudah mendekati ujung (dalam 1/2 page), anggap di halaman terakhir
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
                }, // ✅ tambahkan koma di sini

                maxVisibleDots: 3,

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
                }
            }"
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
                    <div class="snap-start shrink-0 w-[80%] sm:w-[400px] md:w-[460px]">
                        <div class="relative rounded-lg shadow-lg overflow-hidden h-[240px] flex flex-col">
                            <div 
                                class="absolute inset-0 bg-cover bg-center"
                                :style="`background-image: url('${slide.image}')`"
                                :aria-label="slide.title"
                            ></div>
                            <div class="absolute inset-0 bg-black bg-opacity-40"></div>
                            <div class="absolute left-0 right-0 top-0 bottom-0 z-10 flex flex-col w-full h-full p-6">
                                <div class="mb-8">
                                    <span class="inline-flex items-center justify-center w-8 h-8 text-[#F3C22E]" x-html="slide.icon"></span>
                                </div>
                                <h6 class="text-lg font-bold text-white mb-4 uppercase" x-text="slide.title"></h6>
                                <p class="text-white text-base line-clamp-5 w-full" x-text="slide.description"></p>
                            </div>
                        </div>
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