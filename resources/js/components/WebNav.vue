<template>
    <nav class="sticky top-0 z-50 bg-white/90 backdrop-blur-md border-b border-stone-100">
        <div class="max-w-6xl mx-auto px-6 h-20 flex items-center justify-between">
            <div class="flex items-center gap-4">
                <img
                    src="/images/the-climate-promise-logo.webp"
                    alt="The Climate Promise Logo"
                    class="h-16 w-auto object-contain"
                >
                <div class="flex flex-col">
                    <span class="heading text-xl font-semibold text-emerald-900 tracking-tight leading-none">
                        The Climate Promise
                    </span>
                </div>
            </div>

            <div class="hidden md:flex items-center gap-8 text-sm font-medium text-stone-500">
                <a href="#how-it-works" class="hover:text-emerald-600 transition-colors">How it Works</a>
                <a href="#impact" class="hover:text-emerald-600 transition-colors">Our Impact</a>
                <a
                    href="#oath-section"
                    class="bg-emerald-700 text-white px-6 py-2.5 rounded-full hover:bg-emerald-800 transition-all shadow-md"
                >
                    Take the Oath
                </a>
            </div>

            <button
                type="button"
                class="md:hidden inline-flex items-center justify-center rounded-xl border border-stone-200 bg-white/80 p-2 text-stone-600 hover:text-emerald-700 hover:border-emerald-200 transition"
                @click="toggleMenu"
                :aria-expanded="isOpen.toString()"
                aria-controls="mobile-menu"
                aria-label="Toggle navigation menu"
            >
                <svg v-if="!isOpen" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <svg v-else xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <div
            id="mobile-menu"
            class="md:hidden border-t border-stone-100 bg-white/95 backdrop-blur-md"
            :class="isOpen ? 'block' : 'hidden'"
        >
            <div class="px-6 py-4 flex flex-col gap-3 text-sm font-medium text-stone-600">
                <a href="#how-it-works" class="hover:text-emerald-600 transition-colors" @click="closeMenu">How it Works</a>
                <a href="#impact" class="hover:text-emerald-600 transition-colors" @click="closeMenu">Our Impact</a>
                <a
                    href="#oath-section"
                    class="bg-emerald-700 text-white px-5 py-2.5 rounded-full hover:bg-emerald-800 transition-all text-center"
                    @click="closeMenu"
                >
                    Take the Oath
                </a>
            </div>
        </div>
    </nav>
</template>

<script>
export default {
    name: 'WebNav',
    data() {
        return {
            isOpen: false,
        };
    },
    methods: {
        toggleMenu() {
            this.isOpen = !this.isOpen;
        },
        closeMenu() {
            this.isOpen = false;
        },
    },
};
</script>
