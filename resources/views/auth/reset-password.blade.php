<x-layouts.app :title="__('Reset Password')">
    <livewire:web.auth.reset-password :userId="$token ?? null"/>
</x-layouts.app>
