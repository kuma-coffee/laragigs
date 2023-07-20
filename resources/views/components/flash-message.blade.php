@if (session()->has('message'))
<div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show"
    class="w-1/4 h-12 fixed top-6 left-1/2 -translate-y-1/2 -translate-x-1/2 bg-laravel text-white flex items-center justify-center">
    <p>
        {{session('message')}}
    </p>
</div>
@endif