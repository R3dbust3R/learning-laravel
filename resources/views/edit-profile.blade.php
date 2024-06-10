@include('layout.header')

<div class="container">
    <h1 class="mt-4"> {{$page_title}} </h1>
    
    <x-edit-profile-form :profile="$profile"></x-edit-profile-form>

</div>

@include('layout.footer')
