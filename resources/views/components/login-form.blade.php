
{{-- login form --}}

<form action="{{ route('login-check') }}" method="POST" class="w-75 m-auto my-5 bg-light p-5 rounded-5">
    @csrf
    <div class="form-group mb-3">
        <div class="mx-auto">
            <label class="mb-2" for="email"><strong>Email</strong></label>
            <input type="email" id="email" class="form-control form-control-lg" placeholder="Enter your email" name="email">
            @error('email')
                <small class="text-muted">
                    <span class="text-danger">{{ $message }}</span>
                </small>
            @enderror
        </div>
    </div>
    <div class="form-group mb-3">
        <div class="mx-auto">
            <label class="mb-2" for="password"><strong>Password</strong></label>
            <input type="password" id="password" class="form-control form-control-lg" placeholder="Enter your password" name="password">
            {{-- @error('password')
                <small class="text-muted">
                    <span class="text-danger">{{ $message }}</span>
                </small>
            @enderror --}}
        </div>
    </div>
    <div class="form-group mt-5 mx-auto text-center">
        <input type="submit" class="btn btn-primary btn-lg px-5 rounded-pill" value="Login" name="submit">
    </div>
</form>

{{-- login form --}}
