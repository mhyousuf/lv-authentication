<x-layouts.app :title="__('Reset Password')">
    <livewire:web.auth.reset-password :email="$email ?? null"/>
</x-layouts.app>