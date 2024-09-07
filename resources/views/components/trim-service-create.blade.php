@props([
    'type' => 'text',
    'placeholder' => '',
    'value' => '',
    'class' => 'w-1/2 h-10 p-2 m-4 rounded-lg mt-1 block px-3 py-2 text-lg shadow-sm
         focus:outline focus:ring-2
         invalid:border-pink-500 invalid:text-pink-600
          focus:invalid:border-pink-500 focus:invalid:ring-pink-500 ',
    'name' => '',
])

<input type="{{ $type }}" name="{{ $name }}" placeholder="{{ $placeholder }}" value="{{ $value }}"
    class="{{ $class }}" {{ $attributes }} />

@error($name)
    <p>{{ $message }}</p>
@enderror
<br>
