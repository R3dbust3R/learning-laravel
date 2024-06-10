@include('layout.header')
<div class="container">
    <h2>
        {{$page_title}}
    </h2>

    <form enctype="multipart/form-data" action="{{route('profile-store')}}" method="POST" class="w-75 m-auto my-5">
        @csrf
        <div class="form-group mb-3">
            <div class="row">
                <div class="col-6">
                    <label class="mb-2" for="fname"><strong>First name</strong></label>
                    <input value="{{ old('fname') }}" type="text" id="fname" class="form-control" placeholder="Enter your first name (required)" name="fname">
                    @error('fname')
                        <small class="text-muted">
                            <span class="text-danger">{{ $message }}</span>
                        </small>
                     @enderror
                </div>
                <div class="col-6">
                    <label class="mb-2" for="lname"><strong>Last name</strong></label>
                    <input value="{{ old('lname') }}" type="text" id="lname" class="form-control" placeholder="Enter your last name (optional)" name="lname">
                    @error('lname')
                        <small class="text-muted">
                            <span class="text-danger">{{ $message }}</span>
                        </small>
                    @enderror
                </div>
            </div>
        </div>
        <div class="form-group mb-3">
            <div class="col-12">
                <label class="mb-2" for="email"><strong>Email</strong></label>
                <input value="{{ old('email') }}" type="email" id="email" class="form-control" placeholder="Enter your email (required)" name="email">
                @error('email')
                    <small class="text-muted">
                        <span class="text-danger">{{ $message }}</span>
                    </small>
                @enderror
            </div>
        </div>
        <div class="form-group mb-3">
            <div class="row">
                <div class="col-6">
                    <label class="mb-2" for="password"><strong>Password</strong></label>
                    <input value="{{ old('password') }}" type="password" id="password" class="form-control" placeholder="Enter your password (required)" name="password">
                    @error('password')
                        <small class="text-muted">
                            <span class="text-danger">{{ $message }}</span>
                        </small>
                    @enderror
                </div>
                <div class="col-6">
                    <label class="mb-2" for="password-confirmation"><strong>Password confirmation</strong></label>
                    <input type="password" id="password-confirmation" class="form-control" placeholder="Confirm your password (required)" name="password_confirmation">
                    @error('password_confirmation')
                        <small class="text-muted">
                            <span class="text-danger">{{ $message }}</span>
                        </small>
                    @enderror
                </div>
            </div>
        </div>
        <div class="form-group mb-3">
            <label class="mb-2" for="bio"><strong>Biography</strong></label>
            <textarea rows="6" name="bio" id="bio" class="form-control" placeholder="Enter your biography (optional)">{{ old('bio') }}</textarea>
            @error('bio')
                <small class="text-muted">
                    <span class="text-danger">{{ $message }}</span>
                </small>
            @enderror
        </div>
        <div class="form-group mb-3">
            <label class="mb-2" for="image"><strong>Profile image</strong></label>
            <input type="file" id="image" class="form-control" name="image">
            @error('image')
                <small class="text-muted">
                    <span class="text-danger">{{ $message }}</span>
                </small>
            @enderror
        </div>
        <div class="form-group mb-3">
            <input type="submit" class="btn btn-primary px-5" value="Sign Up" name="submit">
        </div>
    </form>

</div>
@include('layout.footer')