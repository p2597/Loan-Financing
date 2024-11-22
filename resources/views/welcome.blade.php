<x-site-layout title="Welcome to Our Loan Page">

    @foreach($articles as $article)
        <div class="mt-4">
            <h2 class="font-bold text-lg">{{$article->title}}</h2>
            <div>
                {{ \Carbon\Carbon::parse($article->published_at)->toDateString() }}
                |
                {{$article->author_name}}
            </div>
            <p class="text-sm">{{$article->content}}</p>
        </div>
    @endforeach



</x-site-layout>