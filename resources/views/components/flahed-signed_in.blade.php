@if(session()->has('signed_in'))
<div x-data="{ show: true }" x-init="setTimeout(() => { show = false; }, 3000)" x-show="show">
    <p>{{ session('signed_in') }}</p>
</div>
@endif