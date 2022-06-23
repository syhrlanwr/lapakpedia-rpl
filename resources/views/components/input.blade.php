@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'text-white rounded-md bg-slate-900/20 shadow-sm border-gray-600 focus:border-emerald-300 focus:ring focus:ring-emerald-200 focus:ring-opacity-50']) !!}>
