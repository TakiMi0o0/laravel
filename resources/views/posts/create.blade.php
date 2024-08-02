<x-layout>
    <a href="{{ route('index.posts') }}" class="re">戻る</a>
    <h1>新規追加</h1>
    <form action="{{ route('store.posts') }}" method='post'>
        @csrf
        {{-- ※悪意のある攻撃から守るためのcsrf対策 --}}

        <label>
            Title
            <input type="text" name="title" value="{{ old('title') }}">
        </label>
        @error('title')
          <div class="error">{{ $message }}</div>
        @enderror
        <label>
            Detail
            <textarea name="detail" rows="10">{{ old('detail') }}</textarea>
        </label>
        <div class="btn"><button>新規追加</button></div>
        @error('detail')
          <div class="error">{{ $message }}</div>
        @enderror
    </form>
</x-layout>
