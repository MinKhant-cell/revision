<div class="mb-3">
    <label>$label</label>
    <input type="text"
           name=$name
           @if(!$value)
           value="{{ old($name) }}"
           @else
           value="{{ old($name,$value) }}"
               @endif

           class="form-control @error($name) is-invalid @enderror">
    @error($name)
    <p class="text-danger small mt-2">{{ $message }}</p>
    @enderror
</div>
