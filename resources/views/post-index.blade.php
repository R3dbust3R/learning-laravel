@include('layout.header')
<div class="container">
    <h2>
        {{$page_title}}
    </h2>

    @foreach ($posts as $post)
        <x-display-post :post="$post"></x-display-post>
    @endforeach

</div>
@include('layout.footer')