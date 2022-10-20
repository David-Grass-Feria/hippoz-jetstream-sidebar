<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
    

<div x-data="{open:false}">
   
    <div x-show="open" class="relative z-40 md:hidden" role="dialog" aria-modal="true">
     
      <div class="fixed inset-0 bg-gray-600 bg-opacity-75"></div>
  
      <div class="fixed inset-0 z-40 flex">
      
        <div class="relative flex w-full max-w-xs flex-1 flex-col bg-gray-800 pt-5 pb-4">
         
          <div class="absolute top-0 right-0 -mr-12 pt-2">
            <button x-on:click="open = !open" type="button" class="ml-1 flex h-10 w-10 items-center justify-center rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
              <span class="sr-only">Close sidebar</span>
              <!-- Heroicon name: outline/x-mark -->
              <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </button>
          </div>
  
          <div class="flex flex-shrink-0 items-center px-4">
            <x-jet-application-mark class="block h-9 w-auto" />
          </div>
          <div class="mt-5 h-0 flex-1 overflow-y-auto">
            <nav class="space-y-1 px-2">
            
             
              <x-hippoz-jetstream-sidebar::sidebar-menu />
       
            
            </nav>
          </div>
        </div>
  
        <div class="w-14 flex-shrink-0" aria-hidden="true">
        
        </div>
      </div>
    </div>
  
    <!-- Static sidebar for desktop -->
    <div class="hidden md:fixed md:inset-y-0 md:flex md:w-64 md:flex-col">
   
      <div class="flex min-h-0 flex-1 flex-col bg-gray-800">
        <div class="flex h-16 flex-shrink-0 items-center bg-gray-900 px-4">
            <x-jet-application-mark class="block h-9 w-auto" />
        </div>
        <div class="flex flex-1 flex-col overflow-y-auto">
          <nav class="flex-1 space-y-1 px-2 py-4">
         
            <x-hippoz-jetstream-sidebar::sidebar-menu />
  
      
          
  
         
  
  
          
          </nav>
        </div>
      </div>
    </div>
    <div class="flex flex-col md:pl-64">
      <div class="sticky top-0 z-10 flex h-16 flex-shrink-0 bg-white shadow">
        <button x-on:click="open = !open" type="button" class="border-r border-gray-200 px-4 text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500 md:hidden">
          <span class="sr-only">Open sidebar</span>
          <!-- Heroicon name: outline/bars-3-bottom-left -->
          <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25H12" />
          </svg>
        </button>
        <div class="flex flex-1 justify-between px-4">
          <div class="flex flex-1">
            
          </div>
          @livewire('navigation-menu')
          </div>
        </div>
      </div>
  
      <main class="flex-1">
        <div class="py-6">
          <div class="mx-auto max-w-7xl px-4 sm:px-6 md:px-8">
            
          </div>
          <div class="mx-auto max-w-7xl px-4 sm:px-6 md:px-8">
           {{ $slot }}
          </div>
        </div>
      </main>
    </div>
  </div>
        

        @stack('modals')

        @livewireScripts
    </body>
</html>

























  