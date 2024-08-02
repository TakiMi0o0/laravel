{{-- @dd($posts); --}}
<x-layout>
    <a href="{{ route('index.posts') }}" class="re">戻る</a>
    <h1>検索画面</h1>
    <form action="" method="get">
        @csrf
        <label>
            Title検索
            <input type="text" name="keyword" value="{{ request('keyword') }}">
        </label>
        <div class="btn"><button>検索</button></div>
    </form>
    <h3>検索結果</h3>
    <ul>
        @if (!empty($keyword))
            @foreach ($posts as $post)
            <li>
                <a href="{{ route('text.posts',$post->id) }}">{{ $post->title }}</a>
            </li>
            @endforeach
        @endif
    </ul>
</x-layout>
