<div {{ $attributes->merge(['data-controller' => $attributes->prepends('profile-controller')]) }} {{$attributes}}>
    {{$a}}
    <hr />
    {{$b}}
</div>