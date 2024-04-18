<x-layout>
    <form action="login" method="POST">
        @csrf
        <div class="mb-3">
            @error('email')
                {{ $message }}
            @enderror
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" Name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            @error('password')
                {{ $message }}
            @enderror
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" Name="password" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
        <a href="reg">Register</a>
    </form>
</x-layout>
