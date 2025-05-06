<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>

  @foreach ( $posts as $post)
    
  

  <article class="py-8 max-w-screen-md border-b border-gray-300">
    <h2 class="mb-1 text-xl tracking-tight font-bold text-gray-800">Judul Article</h2>
    <div class=" text-gray-500">
      <a href="#">Dimas ukin</a> | 2 Februari 2004
    </div>
    <p class="my-4 font-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio quibusdam magnam quasi doloribus, iste ex aliquid veritatis sint qui quae est explicabo, ea non necessitatibus? Repellendus adipisci aliquid atque dicta! Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi earum rerum sed? Velit laborum quasi qui, accusantium vero, dolorem cum adipisci minima, expedita voluptatibus vitae consequuntur neque placeat nulla a.</p>
    <a href="" class="font-medium text-blue-400 hover:underline">Read more &raquo;</a>
  </article>
  @endforeach
</x-layout>