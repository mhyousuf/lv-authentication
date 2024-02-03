<x-ui.row class="justify-content-center">
    <div class="col-md-6" style="padding: 5px;">
        <h2 class="mb-4">Login</h2>
        <form action="{{ route('web.login') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

            <div class="form-floating">
                <x-ui.form.input
                    :label="__('Username')"
                    type="text"
                    class="form-control"
                    name="username"
                    id="username"
                    placeholder="Email Address"
                    required
                />
            </div>
            <div class="">
                <x-ui.form.input
                    :label="__('Password')"
                    type="password"
                    class="form-control"
                    name="password"
                    id="password"
                    placeholder="Password"
                    required
                />
            </div>

            <div class="form-check my-3 row">
                <div class="d-inline text-start">
                    <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Remember me
                    </label>
                </div>
                <div class="d-inline" style="float: inline-end;">
                    <a href="{{ route('forgot.pass') }}">Forgot password?</a>
                </div>
            </div>
            <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
        </form>
    </div>
</x-ui.row>
