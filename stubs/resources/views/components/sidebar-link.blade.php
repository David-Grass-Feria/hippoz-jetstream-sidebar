@props(['active'])

  @php
  $classes = ($active ?? false)
              ? 'bg-gray-900 text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md'
              : 'text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md';
  @endphp
  
  <a {{ $attributes->merge(['class' => $classes]) }}>
    <svg class="text-gray-300 mr-3 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
        <path stroke-linecap="round" stroke-linejoin="round" d="{{$icon}}" />
      </svg>
    {{ $slot }}
  </a>