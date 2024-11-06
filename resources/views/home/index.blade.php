<h1>Hello From Laravel Course</h1>
<p>Year: {{ $year }}</p>

{{--{{ $name }}--}}
{{--Single line comment --}}
{{--
Multi
line
comment
--}}
@if (true)

This will be displayed

@endif

@foreach ($hobbies as $h )
    {{ $loop->iteration }}
    {{-- {{ dd($loop) }} --}}
    {{-- {{ $h }} --}}
@endforeach