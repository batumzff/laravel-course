<h1>Hello From Laravel Course</h1>
<p>Year: {{ $year }}</p>




{{--{{ $name }}--}}
{{--Single line comment --}}
{{--
Multi
line
comment
--}}

{{-- @if (true)

This will be displayed

@endif

@foreach ($hobbies as $h )
    @foreach ($hobbies as $h )
        {{ $loop->dept }}
        {{ $loop->parent->dept }}
    @endforeach
@endforeach --}}

{{-- <div @class([
    'my-css-class',
    'turkey' => $country === 'tr'
    ])
    @style([
        'color: green',
        'background-color: cyan' => $country === 'tr'
    ])
    >
    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sapiente placeat, voluptates aliquid cupiditate corrupti earum sunt, eius est autem culpa molestias nulla suscipit. Amet maxime corrupti incidunt sed ratione consequatur!
</div> --}}

@include('shared.button', ['color' => 'yellow', 'text' => 'Submit'])

@php
    $cars = [1,2,3,4,5];
@endphp

@foreach ($cars as $car )
    @include('car.view', ['car'=> $car])
@endforeach

@each('car.view', $cars , 'car', 'car.empty' )