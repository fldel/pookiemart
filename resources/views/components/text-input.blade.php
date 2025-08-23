@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'border-gray-300 focus:border-brand-default focus:ring-brand-default rounded-md shadow-sm']) }}>
