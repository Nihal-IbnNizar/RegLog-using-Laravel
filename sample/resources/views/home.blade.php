<!-- home.blade.php -->
<x-layout>
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <div class="mb-3">
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <label for="exampleInputEmail1" class="form-label">Username</label>
            <input type="text" class="form-control" name="name" id="exampleInputEmail1" value="{{ old('name') }}"
                aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" name="email" id="exampleInputEmail1"
                value="{{ old('email') }}" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            @error('password_confirmation')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" name="password_confirmation" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <!-- Link to Login Page -->
    <div class="mt-3">
        Already have an account? <a href="{{ route('Loginmain') }}">Login here</a>.
    </div>
</x-layout>
