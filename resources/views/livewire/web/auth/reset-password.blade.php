@php
    $wireTargets = [
        // 'email',
        'new_password',
        'confirm_password',
        'submit',
    ];

@endphp
<div wire:loading.class="disabled" wire:target="{{ implode(',', $wireTargets) }}">
    <x-ui.row class="justify-content-center">
        <div class="col-md-6" style="padding: 5px;">
            <h2 class="mb-4">Reset Password</h2>
            <form wire:submit="passwordUpdate">
                <div class="form-floating">
                    <x-ui.form.input
                        type="hidden"
                        class="form-control"
                        wire:model="email"
                        {{-- name="email" --}}
                        id="email"
                    />
                </div>
                <div class="">
                    <x-ui.form.input
                        :label="__('New Password')"
                        type="password"
                        class="form-control"
                        id="new_password"
                        wire:model="new_password"
                        placeholder="New Password"
                        required
                    />
                </div>

                <div class="">
                    <x-ui.form.input
                        :label="__('Confirm Password')"
                        type="password"
                        class="form-control"
                        {{-- name="confirm_password" --}}
                        id="confirm_password"
                        wire:model="confirm_password"
                        placeholder="Confirm Password"
                        required
                    />
                </div>

                <div class="form-check my-3 row">
                    <div class="d-inline" style="float: inline-end;">
                        <!-- <a href="">Forgot password?</a> -->
                    </div>
                </div>
                <button class="btn btn-primary w-100 py-2" type="submit">Update Password</button>
            </form>
            <div class="d-inline" style="float: inline-end;">
                <a href="{{ route('web.login.index') }}">Login Back?</a>
            </div>
        </div>
    </x-ui.row>
</div>