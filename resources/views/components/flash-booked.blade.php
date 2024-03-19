@if(session()->has('booked'))
<div x-data="{ show: true }" x-init="setTimeout(() => { show = false; }, 3000)" x-show="show">
    <p>{{ session('booked') }}</p>
</div>
@endif