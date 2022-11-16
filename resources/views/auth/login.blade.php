<x-guest-layout title="Login">
    <!-- Main Section-->
    <section class="d-flex justify-content-center align-items-start vh-100 py-5 px-3 px-md-0">

        <!-- Login Form-->
        <div class="d-flex flex-column w-100 align-items-center">

            <!-- Logo-->
            <a href="./index.html" class="d-table mt-5 mb-4 mx-auto">
                <div class="d-flex align-items-center justify-content-center">
                    <span class="fw-bold fs-3 text-white">EC Computer</span>
                </div>
            </a>
            <div class="shadow-lg rounded p-4 p-sm-5 bg-white form">
                <h5 class="fw-bold text-muted">Login</h5>
                <p class="text-muted">Selamat Datang!</p>
                <form class="mt-4" action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label class="form-label form-label-light" for="email">Email address</label>
                        <input type="email" name="email" class="form-control form-control-light" id="email"
                            placeholder="name@email.com">
                        @error('email')
                        <label class="form-label form-label-light">{{ $message }}</label>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password"
                            class="form-label form-label-light d-flex justify-content-between align-items-center">
                            Password
                            <a href="./forgot-password.html"
                                class="text-muted small ms-2 text-decoration-underline">Lupa
                                password?</a>
                        </label>
                        <input type="password" name="password" class="form-control form-control-light" id="password"
                            placeholder="password">
                        @error('password')
                        <label class="form-label form-label-light">{{ $message }}</label>
                        @enderror
                    </div>
                    <div class="">
                        <input type="checkbox" class="form-check-input" id="remember" name="remember">
                        <label class="form-label form-label-light" for="remember">Remember Me</label>
                    </div>
                    <button type="submit" class="btn btn-primary d-block w-100 my-4">Login</button>
                </form>
            </div>
        </div>
    </section>
</x-guest-layout>