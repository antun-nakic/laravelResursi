@props(['frane']);

<div {{ $attributes->merge(['data-controller' => $attributes->prepends('profile-controller')]) }} {{$attributes}}>

    {{$title}}

    <h1 {{$frane->attributes->class(['text-lg'])}}>
        {{$frane}} {{$frane->attributes->get('visina')}}
    </h1>

    {{$a}}
    <hr />
    {{$b}}
    <hr />
    {{$attributes['class']}}
    <hr />
    {{ $attributes->get('class') }}
    <hr />
    {{ $slot }}
</div>