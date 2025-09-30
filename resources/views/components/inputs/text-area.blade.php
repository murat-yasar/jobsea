@props(['id', 'name', 'label' => null, 'value' => '', 'placeholder'=>'', 'cols'=>'30', 'rows'=>'6'])

<div class="mb-4">
    @if($label)
    <label class="block text-gray-700" for="{{ $id }}">{{ $label }}</label>
    @endif
    <textarea id="{{ $id }}" name="{{ $name }}" value="{{ old($name, $value) }}" placeholder="{{$placeholder}}"
        cols="30" rows="6" class="w-full px-4 py-2 border rounded focus:outline-none @error($name) border-red-500 @enderror" >{{ old($name, $value) }}</textarea>
    @error($name)
    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
    @enderror
</div>