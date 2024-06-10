@include('layout.header')
<div class="container">
    <h1>{{$page_title}}</h1>

    {{-- success alert --}}
    @if (session('success'))
        <x-alert type="success" msg="{{session('success')}}"></x-alert>
    @endif
    {{-- success alert --}}

    {{-- error alert --}}
    @if (session('error'))
        <x-alert type="warning" msg="{{session('error')}}"></x-alert>
    @endif
    {{-- error alert --}}

    <div class="row">
        @foreach ($profiles as $profile)
            <div class="col-md-3 col-sm-4 col-xs-6 mb-4">
                <x-profile-card :profile="$profile"></x-profile-card>
            </div>
        @endforeach
    </div>

    {{ $profiles->links() }}

</div>
@include('layout.footer')
