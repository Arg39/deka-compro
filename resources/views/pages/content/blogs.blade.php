@foreach ($blogs as $blog)
    @include('pages.content.blog', ['blog' => $blog])
@endforeach
