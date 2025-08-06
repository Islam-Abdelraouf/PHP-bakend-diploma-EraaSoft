{{-- assign errorName property "html attribute" --}}
@props(['errorName'=>''])

{{-- if $errors is not empty --}}
@if ($errors->any())

    {{-- select which error by errorName --}}
    @error($errorName)
        <div class="form-text text-danger" id="basic-addon4" {{ $attributes }}>
            {{$message}}
        </div>
    @enderror

@endif
