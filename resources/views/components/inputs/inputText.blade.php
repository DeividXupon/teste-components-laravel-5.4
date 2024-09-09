@push('style')
    <link rel="stylesheet" href="{{ asset('css/components/inputs/inputText.css') }}">
@endpush

@push('scrypt')
    <script defer src="{{asset('js/components/inputText.js')}}"></script>
@endpush

<div class="_inputText">
    <label for="">{{$label}}</label>
    <input 
        type="text" 
        name="{{$name ?? null}}" 
        id="{{$id ?? null}}" 
        {{isset($readonly) ? 'readonly' : null}}
        {{isset($autofocus) ? 'autofocus' : null}}
        value="{{$value ?? null}}"
    >
</div>
