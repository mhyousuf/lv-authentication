<x-ui.row class="justify-content-center">
    <div class="col-md-4" style="padding: 5px;">
        <form wire:submit="PasswordLink">
            @csrf
            <h1 class="h1 mb-3 fw-normal text-center">Password Reset</h1>
            <p>Enter your email address and we'll send you an email with instructions to reset your password.</p>

            <div class="form-floating">
                <x-ui.form.input
                    :label="__('Email Address')"
                    type="text"
                    class="form-control"
                    wire:model="email"
                    name="email"
                    id="email"
                    placeholder="Email Address"
                    required
                />
            </div>
            <div class="d-grid gap-2 mx-auto mt-4">
                <button class="btn btn-primary w-100 py-2" type="submit">Reset password</button>
            </div>
            <div class="d-flex justify-content-between mt-4">
                <a
                    class="link-info link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"
                    href="{{ route('web.login.index') }}">Back Login</a>
                {{-- <a class="" href="#">Register</a> --}}
            </div>
        </form>
    </div>
</x-ui.row>