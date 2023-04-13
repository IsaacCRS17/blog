@include('layouts.master')
<section class="bg-white dark:bg-gray-900">
<div class="container px-6 py-10 mx-auto">
    <h1 class="text-3xl">All Posts</h1>
    <div class="grid grid-cols-1 gap-8 mt-8 md:mt-16 md:grid-cols-2">
        @foreach($posts as $post)
        <div class="lg:flex">
            <img src="/storage/{{$post->imagen_url}}" alt="" class="object-cover w-full h-56 rounded-lg lg:w-64">
            <div class="flex flex-col justify-wetween py-6 lg:mx-6">
                <a href="{{route('posts.view', $post->id)}}" class="text-xl">
                    {{$post->title}}
                </a>
                <span class="text-sm text-gray-500 dark_text-gray-300">En: {{$post->created_at}}</span>

            </div>
        </div>
        @endforeach
    </div>
</div>
</section>
@include('layouts.footer')
