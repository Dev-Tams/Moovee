@props([
    'type' => '',
    'name' => '',
    'placeholder' => '',
    'class' => 'w-96 h-11 p-2 m-4 rounded-lg mt-1 block px-3 py-2 border-none text-lg shadow-sm 
                                                            focus:outline-none focus:ring-2 focus:ring-blue-500 bg-slate-100 placeholder-slate-500 border-slate-200 hover:shadow-none
                                                             invalid:border-pink-500 invalid:text-pink-600 focus:invalid:border-pink-500 focus:invalid:ring-pink-500'
])

<input type="{{ $type }}" name="{{ $name }}" placeholder="{{ $placeholder }}" class="{{ $class }}" {{ $attributes }} />
