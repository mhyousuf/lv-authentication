@php
    $wireTargets = [
        'current_password',
        'new_password',
        'confirm_password',
        'submit',
    ];
@endphp

<div wire:loading.class="disabled" wire:target="{{ implode(',', $wireTargets) }}">
    <div class="modal fade" id="exampleModal" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">New message</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form wire:submit="changePassword">
                        <div class="mb-3">
                            <x-ui.form.input
                                :label="__('Current Password')"
                                type="password"
                                class="form-control"
                                id="current_password"
                                wire:model="current_password"
                                {{-- name="current_password" --}}
                            />
                        </div>

                        <div class="mb-3">
                            <x-ui.form.input
                                :label="__('New Password')"
                                type="password"
                                class="form-control"
                                id="new_password"
                                wire:model="new_password"
                                {{-- name="new_password" --}}
                            />
                        </div>

                        <div class="mb-3">
                            <x-ui.form.input
                                :label="__('Confirm Password')"
                                type="password"
                                class="form-control"
                                id="confirm_password"
                                wire:model="confirm_password"
                                {{-- name="confirm_password" --}}
                            />
                        </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Change Password</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
