@extends('layouts.site.app')

@section('content')

<div class="bg-gradient-to-br from-emerald-50 via-amber-50 to-emerald-100 text-stone-800">

    <section class="max-w-6xl mx-auto px-6 py-16 md:py-24 grid md:grid-cols-2 gap-12 items-center">
        <div class="order-2 md:order-1 text-center md:text-left">
            <h1 class="heading text-4xl md:text-6xl text-emerald-900 leading-tight mb-6">A Promise Children Make to the Earth</h1>
            <p class="text-lg text-stone-600 mb-8 leading-relaxed">The Earth gives us air, water, and food. Today, the Earth needs a little bit of care from all of us. Are you ready to join the movement?</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center md:justify-start">
                <a href="#oath-section" class="bg-emerald-700 text-white px-8 py-4 rounded-2xl font-semibold text-lg hover:bg-emerald-800 transition-all text-center">Take the Promise</a>
                <a href="#inspiration" class="border border-stone-200 bg-white px-8 py-4 rounded-2xl font-semibold text-lg hover:bg-stone-50 transition-all text-center text-stone-600">See Action Gallery</a>
            </div>
            <div class="mt-10 grid grid-cols-2 gap-4 max-w-md mx-auto md:mx-0">
                <div class="bg-white/70 border border-stone-100 rounded-2xl p-4 text-left shadow-sm">
                    <div class="text-2xl font-bold text-emerald-900">12,482</div>
                    <div class="text-xs uppercase tracking-wider text-stone-500">Promises Made</div>
                </div>
                <div class="bg-white/70 border border-stone-100 rounded-2xl p-4 text-left shadow-sm">
                    <div class="text-2xl font-bold text-emerald-900">320+</div>
                    <div class="text-xs uppercase tracking-wider text-stone-500">Schools Joined</div>
                </div>
            </div>
        </div>
        <div class="order-1 md:order-2 flex justify-center">
            <div class="relative w-full max-w-sm">
                <div class="absolute inset-0 bg-emerald-100 rounded-full blur-3xl opacity-50"></div>
                <img src="/images/hero-img.jpeg" class="relative z-10 w-full rounded-3xl">
            </div>
        </div>
    </section>

    <section id="how-it-works" class="py-20 bg-white border-y border-stone-100">
        <div class="max-w-6xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="heading text-3xl text-emerald-900">Your Journey to the Promise</h2>
                <p class="text-stone-500 mt-2">Three simple steps to becoming a Climate Guardian.</p>
            </div>
            <div class="grid md:grid-cols-3 gap-12">
                <div class="text-center">
                    <div class="w-16 h-16 bg-emerald-100 text-emerald-700 rounded-2xl flex items-center justify-center text-2xl font-bold mx-auto mb-6">1</div>
                    <h3 class="heading text-xl mb-3">Read & Reflect</h3>
                    <p class="text-stone-500 text-sm">Understand the oath and what it means to care for our shared home.</p>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 bg-emerald-100 text-emerald-700 rounded-2xl flex items-center justify-center text-2xl font-bold mx-auto mb-6">2</div>
                    <h3 class="heading text-xl mb-3">Commit to Action</h3>
                    <p class="text-stone-500 text-sm">Choose three small habits you will practice every single day.</p>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 bg-emerald-100 text-emerald-700 rounded-2xl flex items-center justify-center text-2xl font-bold mx-auto mb-6">3</div>
                    <h3 class="heading text-xl mb-3">Get Certified</h3>
                    <p class="text-stone-500 text-sm">Receive your digital certificate to share with your school and family.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="impact" class="py-24 max-w-6xl mx-auto px-6">
        <div class="bg-emerald-900 rounded-[3rem] p-10 md:p-20 overflow-hidden relative">
            <div class="relative z-10 grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="heading text-3xl md:text-4xl text-white mb-6">Small actions matter when millions do them.</h2>
                    <p class="text-emerald-100/80 text-lg mb-8">Imagine if every student in the country saved just one bucket of water a day. That is a river of change!</p>
                    <div class="grid grid-cols-2 gap-6">
                        <div class="bg-white/10 p-4 rounded-2xl backdrop-blur-md">
                            <div class="text-3xl font-bold text-white">1.2M+</div>
                            <div class="text-emerald-300 text-xs uppercase tracking-wider">Litres Water Saved</div>
                        </div>
                        <div class="bg-white/10 p-4 rounded-2xl backdrop-blur-md">
                            <div class="text-3xl font-bold text-white">50K+</div>
                            <div class="text-emerald-300 text-xs uppercase tracking-wider">Trees Planted</div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center">
                    <img src="/images/the-climate-promise-logo.webp" class="w-64 rounded-full border-8 border-white/10">
                </div>
            </div>
            <div class="absolute -bottom-20 -right-20 w-64 h-64 bg-emerald-800 rounded-full opacity-50"></div>
        </div>
    </section>

    <section id="oath-section" class="py-24 px-6 bg-[#f4f9f6]">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-12">
                <img src="/images/the-climate-promise-logo.webp" alt="The Climate Promise Logo" class="w-32 mx-auto mb-6">
                <h2 class="heading text-4xl text-emerald-900 mt-2">The Climate Promise</h2>
                <p class="text-stone-500 mt-4 italic max-w-lg mx-auto">
                    "This promise is not about being perfect. It is about being mindful and responsible."
                </p>
            </div>

             <div class="bg-white rounded-[3rem] p-10 md:p-16 mb-3 border border-emerald-100 shadow-sm">
            
            <div class="max-w-2xl mx-auto text-center mb-12">
                <h2 class="heading text-3xl text-emerald-900 mb-6">This Promise Is About Care</h2>
                <div class="space-y-4 text-stone-600 leading-relaxed text-lg">
                    <p>
                        The Earth gives us air, water, food, and a home. 
                        Every day, nature supports our lives in many ways.
                    </p>
                    <p class="font-medium text-emerald-800">
                        Today, the Earth needs care and responsibility from all of us.
                    </p>
                    <p>
                        If you are a student from <span class="bg-emerald-50 px-2 py-1 rounded text-emerald-700 font-semibold">Class 4 to Class 8</span>, 
                        and you want to promise that you will care for the Earth in your daily life, 
                        you are invited to take <span class="italic font-medium">The Climate Promise</span>.
                    </p>
                </div>
            </div>

            <div class="max-w-xl mx-auto border-t border-stone-100 pt-10">
                <label class="group cursor-pointer flex items-start gap-4 p-6 rounded-2xl hover:bg-emerald-50/50 transition-colors border-2 border-transparent hover:border-emerald-100">
                    <div class="relative flex items-center mt-1">
                        <input type="checkbox" 
                            class="peer h-6 w-6 cursor-pointer appearance-none rounded-md border-2 border-emerald-200 transition-all checked:bg-emerald-600 checked:border-emerald-600 focus:outline-none">
                        <svg class="absolute h-4 w-4 text-white opacity-0 peer-checked:opacity-100 top-1 left-1 pointer-events-none" 
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="4" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12"></polyline>
                        </svg>
                    </div>
                    <div class="flex-1">
                        <p class="text-stone-700 font-medium leading-tight">
                            I am a student in Class 4-8 and I want to try my best to care for the Earth.
                        </p>
                        <p class="text-sm text-stone-400 mt-2 italic">
                            "There is no right or wrong way to care. What matters is trying."
                        </p>
                    </div>
                </label>
            </div>

        </div>


        

            <div class="oath-container rounded-[3rem] p-8 md:p-20 relative overflow-hidden bg-white">
                <div class="absolute top-0 right-0 p-8 opacity-5 text-9xl select-none">🌿</div>
                
                <div class="serif text-2xl md:text-4xl text-emerald-800 text-center leading-relaxed space-y-8 mb-20 px-4">
                    <p class="font-semibold text-emerald-900">"I promise to care for the Earth."</p>
                    
                    <div class="text-xl md:text-2xl space-y-6 text-stone-700 leading-loose">
                        <p>"I will respect nature and all living beings."</p>
                        <p>"I will try to save water, energy, and resources."</p>
                        <p>"I will reduce waste and avoid plastic whenever I can."</p>
                        <p>"I will care for plants and trees and keep my surroundings clean."</p>
                        <p>"I will learn more about the environment and encourage others to care for it."</p>
                    </div>

                    <p class="text-2xl text-emerald-600 font-medium pt-6">This is my Climate Promise.</p>
                </div>

                <div class="mb-16">
                    <div class="flex flex-col md:flex-row justify-between items-end mb-8 border-b border-stone-100 pb-4">
                        <h3 class="heading text-2xl text-emerald-900">Choose Your Climate Actions</h3>
                        <span class="text-sm font-medium text-emerald-600 bg-emerald-50 px-3 py-1 rounded-full mb-2 md:mb-0">Select any 3 actions</span>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <label class="relative cursor-pointer">
                            <input type="checkbox" class="hidden peer">
                            <div class="action-card p-5 rounded-2xl bg-stone-50 border-2 border-transparent peer-checked:border-emerald-500 peer-checked:bg-emerald-50 transition-all flex items-center gap-4">
                                <span class="text-2xl">💧</span> 
                                <span class="text-stone-700 font-medium">I will save water at home and school</span>
                            </div>
                        </label>

                        <label class="relative cursor-pointer">
                            <input type="checkbox" class="hidden peer">
                            <div class="action-card p-5 rounded-2xl bg-stone-50 border-2 border-transparent peer-checked:border-emerald-500 peer-checked:bg-emerald-50 transition-all flex items-center gap-4">
                                <span class="text-2xl">💡</span> 
                                <span class="text-stone-700 font-medium">I will switch off lights, fans, and devices</span>
                            </div>
                        </label>

                        <label class="relative cursor-pointer">
                            <input type="checkbox" class="hidden peer">
                            <div class="action-card p-5 rounded-2xl bg-stone-50 border-2 border-transparent peer-checked:border-emerald-500 peer-checked:bg-emerald-50 transition-all flex items-center gap-4">
                                <span class="text-2xl">🍱</span> 
                                <span class="text-stone-700 font-medium">I will avoid wasting food</span>
                            </div>
                        </label>

                        <label class="relative cursor-pointer">
                            <input type="checkbox" class="hidden peer">
                            <div class="action-card p-5 rounded-2xl bg-stone-50 border-2 border-transparent peer-checked:border-emerald-500 peer-checked:bg-emerald-50 transition-all flex items-center gap-4">
                                <span class="text-2xl">♻️</span> 
                                <span class="text-stone-700 font-medium">I will reduce the use of plastic</span>
                            </div>
                        </label>

                        <label class="relative cursor-pointer">
                            <input type="checkbox" class="hidden peer">
                            <div class="action-card p-5 rounded-2xl bg-stone-50 border-2 border-transparent peer-checked:border-emerald-500 peer-checked:bg-emerald-50 transition-all flex items-center gap-4">
                                <span class="text-2xl">🛍️</span> 
                                <span class="text-stone-700 font-medium">I will use reusable items</span>
                            </div>
                        </label>

                        <label class="relative cursor-pointer">
                            <input type="checkbox" class="hidden peer">
                            <div class="action-card p-5 rounded-2xl bg-stone-50 border-2 border-transparent peer-checked:border-emerald-500 peer-checked:bg-emerald-50 transition-all flex items-center gap-4">
                                <span class="text-2xl">🌳</span> 
                                <span class="text-stone-700 font-medium">I will care for a plant or tree</span>
                            </div>
                        </label>

                        <label class="relative cursor-pointer">
                            <input type="checkbox" class="hidden peer">
                            <div class="action-card p-5 rounded-2xl bg-stone-50 border-2 border-transparent peer-checked:border-emerald-500 peer-checked:bg-emerald-50 transition-all flex items-center gap-4">
                                <span class="text-2xl">🧹</span> 
                                <span class="text-stone-700 font-medium">I will keep my surroundings clean</span>
                            </div>
                        </label>

                        <label class="relative cursor-pointer">
                            <input type="checkbox" class="hidden peer">
                            <div class="action-card p-5 rounded-2xl bg-stone-50 border-2 border-transparent peer-checked:border-emerald-500 peer-checked:bg-emerald-50 transition-all flex items-center gap-4">
                                <span class="text-2xl">🗣️</span> 
                                <span class="text-stone-700 font-medium">I will talk to others about caring</span>
                            </div>
                        </label>
                    </div>
                    <p class="text-center text-stone-400 text-sm mt-6">"You can start with small actions. Small actions matter."</p>
                </div>

                <div class="bg-stone-50 rounded-[2.5rem] p-8 md:p-12 mb-10 border border-stone-100">
                    <h3 class="heading text-xl text-emerald-900 mb-8 text-center">Create Your Climate Promise Certificate</h3>
                    
                    <div class="grid md:grid-cols-2 gap-4">
                        <input type="text" placeholder="First Name" 
                            class="w-full px-6 py-4 rounded-xl border-none ring-1 ring-stone-200 focus:ring-2 focus:ring-emerald-500 outline-none bg-white">
                        
                        <input type="text" placeholder="School Name" 
                            class="w-full px-6 py-4 rounded-xl border-none ring-1 ring-stone-200 focus:ring-2 focus:ring-emerald-500 outline-none bg-white">
                        
                        <input type="tel" placeholder="Phone Number" 
                            class="w-full px-6 py-4 rounded-xl border-none ring-1 ring-stone-200 focus:ring-2 focus:ring-emerald-500 outline-none bg-white">
                        
                        <input type="email" placeholder="Email Address" 
                            class="w-full px-6 py-4 rounded-xl border-none ring-1 ring-stone-200 focus:ring-2 focus:ring-emerald-500 outline-none bg-white">
                        
                        <input type="text" placeholder="City" 
                            class="md:col-span-2 w-full px-6 py-4 rounded-xl border-none ring-1 ring-stone-200 focus:ring-2 focus:ring-emerald-500 outline-none bg-white">
                    </div>

                    <p class="text-[11px] text-stone-400 mt-6 text-center leading-relaxed">
                        We collect this information only to create your certificate and to count your promise as part of this national movement. 
                    </p>
                </div>

                <div class="max-w-md mx-auto text-center">
                    <button class="w-full bg-[#3d5a45] text-white py-6 rounded-2xl heading text-2xl shadow-xl hover:bg-[#2d4333] transition-all hover:scale-[1.02] active:scale-[0.98]">
                        Take the Climate Promise
                    </button>
                    <p class="text-stone-500 text-xs mt-4">By clicking this, you are making a promise to the Earth.</p>
                </div>
            </div>
        </div>
    </section>



    <footer class="bg-emerald-900 text-emerald-100 pt-20 pb-10 px-6 mt-20 rounded-t-[3rem]">
        <div class="max-w-6xl mx-auto">
            <div class="grid md:grid-cols-4 gap-12 mb-16">
                <div class="col-span-1 md:col-span-2">
                    <div class="flex items-center gap-3 mb-6">
                            <img src="https://i.postimg.cc/Dzhk3wTd/Untitled-design-(43)-(1).png" 
            alt="The Climate Promise Logo" 
            class="h-12 w-auto object-contain">
                        <span class="heading text-2xl font-semibold text-white">The Climate Promise</span>
                    </div>
                    <p class="text-emerald-200/70 max-w-sm leading-relaxed mb-6">A national movement empowering students to lead the way toward a sustainable and mindful future for our planet.</p>
                    <div class="flex gap-4">
                        <a href="#" class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-emerald-700 transition-colors">📱</a>
                        <a href="#" class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-emerald-700 transition-colors">✉️</a>
                    </div>
                </div>
                
                <div>
                    <h4 class="font-bold text-white mb-6 uppercase tracking-wider text-xs">Explore</h4>
                    <ul class="space-y-4 text-sm text-emerald-200/60">
                        <li><a href="#how-it-works" class="hover:text-white transition-colors">How it Works</a></li>
                        <li><a href="#impact" class="hover:text-white transition-colors">Impact Stories</a></li>
                        <li><a href="#oath-section" class="hover:text-white transition-colors">Take the Oath</a></li>
                        <li><a href="#inspiration" class="hover:text-white transition-colors">Action Gallery</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-bold text-white mb-6 uppercase tracking-wider text-xs">Resources</h4>
                    <ul class="space-y-4 text-sm text-emerald-200/60">
                        <li><a href="#" class="hover:text-white transition-colors">For Teachers</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">School Kits</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Climate Talk</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-white/10 pt-10 flex flex-col md:row items-center justify-between gap-6">
                <div class="text-xs text-emerald-200/40 uppercase tracking-[0.2em]">© 2026 The Climate Promise Movement</div>
                <div class="bg-emerald-800/50 px-6 py-3 rounded-2xl border border-white/5 text-sm italic text-emerald-200/80">
                    "Small actions matter."
                </div>
            </div>
            
            <p class="text-center text-[10px] text-emerald-200/20 mt-12">
                Would you like to talk about why you care? <a href="#" class="underline hover:text-emerald-300">Climate Talk</a> helps students share thoughts confidently.
            </p>
        </div>
    </footer>

</div>


@endsection
