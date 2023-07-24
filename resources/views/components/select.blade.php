@props(['disabled' => false])
<select {{ $disabled ? 'disabled' : '' }} {{ $attributes->merge(['class' => 'form-select w-full bg-waite border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5  disabled:opacity-75 disabled:cursor-no-drop pr-10']) }}>
    {{ $slot }}
</select>
