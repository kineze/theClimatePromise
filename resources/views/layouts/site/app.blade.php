<!DOCTYPE html>
<html lang="en" style="scroll-behavior: smooth">

    @include('site.includes.headerlinks')

  <body class="m-0 relative font-sans antialiased font-normal text-left leading-default text-base dark:bg-slate-950 bg-white text-slate-500 dark:text-white/80">

    <main id="app" class=" transition-all duration-200 ease-soft-in-out">

        @include('site.includes.nav')

        @yield('content')

        @include('site.includes.footer')

    </main>
    
    @stack('scripts')
    
  </body>

  @include('site.includes.footerlinks')
  @stack('scripts')
  
</html>