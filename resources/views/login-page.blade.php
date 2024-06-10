@include('layout.header')
<div class="container">
    <h1 class="text-center mt-5">{{$page_title}}</h1>
    <x-login-form></x-login-form>
</div>
@include('layout.footer')
