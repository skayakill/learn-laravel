<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>

  @foreach ( $posts as $post)
    
  

  <article class="py-8 max-w-screen-md border-b border-gray-300">
    <a href="/posts/{{ $post ['id'] }}">
    <h2 class="mb-1 text-xl tracking-tight font-bold text-gray-800"> {{ $post ['title'] }}</h2>
    </a>
    <div class=" text-gray-500">
      <a href="#">{{ $post ['Author'] }}</a> | 2 Februari 2004
    </div>
    <p class="my-4 font-light">{{ Str::limit( $post ['body'], 100) }}</p>
    <a href="/posts/{{ $post['id'] }}" class="font-medium text-blue-400 hover:underline">Read more &raquo;</a>
  </article>
  @endforeach
</x-layout>