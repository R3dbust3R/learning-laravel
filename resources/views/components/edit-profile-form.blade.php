@props(['profile'])

{{-- success alert --}}
@session('success')
<div class="w-75 m-auto">
    <x-alert type="success" msg="{{ session('success') }}"></x-alert>
</div>
@endsession
{{-- success alert --}}

{{-- error alert --}}
@session('error')
<div class="w-75 m-auto">
    <x-alert type="warning" msg="{{ session('error') }}"></x-alert>
</div>
@endsession
{{-- error alert --}}


<form enctype="multipart/form-data" action="{{ route('profile-update', $profile->id) }}" method="POST" class="w-75 m-auto my-5">
    @csrf
    @method('PUT')
    <input value="{{ $profile->id }}" required type="hidden" name="id">
    <div class="form-group mb-3">
        <div class="row">
            <div class="col-6">
                <label class="mb-2" for="fname"><strong>First name</strong></label>
                <input value="{{ old('fname', $profile->fname) }}" type="text" id="fname" class="form-control" placeholder="Enter your first name (required)" name="fname">
                @error('fname')
                    <small class="text-muted">
                        <span class="text-danger">{{ $message }}</span>
                    </small>
                 @enderror
            </div>
            <div class="col-6">
                <label class="mb-2" for="lname"><strong>Last name</strong></label>
                <input value="{{ old('lname', $profile->lname) }}" type="text" id="lname" class="form-control" placeholder="Enter your last name (optional)" name="lname">
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
            <input value="{{ old('email', $profile->email) }}" type="email" id="email" class="form-control" placeholder="Enter your email (required)" name="email">
            @error('email')
                <small class="text-muted">
                    <span class="text-danger">{{ $message }}</span>
                </small>
            @enderror
        </div>
    </div>
    <div class="form-group mb-3">
        <div class="row">
            <div class="col-4">
                <label class="mb-2" for="old-password"><strong>Old password</strong></label>
                <input type="password" id="old-password" class="form-control" placeholder="Enter your password old" name="old_password">
                @error('password')
                    <small class="text-muted">
                        <span class="text-danger">{{ $message }}</span>
                    </small>
                @enderror
            </div>
            <div class="col-4">
                <label class="mb-2" for="password-confirmation"><strong>New password</strong></label>
                <input type="password" id="password-confirmation" class="form-control" placeholder="Enter a new password" name="password">
                @error('password_confirmation')
                    <small class="text-muted">
                        <span class="text-danger">{{ $message }}</span>
                    </small>
                @enderror
            </div>
            <div class="col-4">
                <label class="mb-2" for="password-confirmation"><strong>New password confirmation</strong></label>
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
        <textarea rows="6" name="bio" id="bio" class="form-control" placeholder="Enter your biography (optional)">{{ old('bio', $profile->bio) }}</textarea>
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
        <input type="submit" class="btn btn-primary px-5" value="Update" name="submit">
    </div>
</form>