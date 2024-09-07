@if (session()->has('success'))
    <div x-data="{ show: true }" x-init="setTimeout(() => { show = false; }, 3000)" x-show="show">
        <p>{{ session('success') }}</p>
    </div>
@endif
