@props([
    'title',
    'description' => '',
    'sizeClass' => ''
])

<article class="card card-anim">
    <div class="card__wrap">
        <h3 class="card__title h3">{!!$title!!}</h3>
    </div>
    <p class="card__description h4">
        {!!$description!!}
    </p>
    <svg class="bg-anim" width="106" height="116" viewBox="0 0 106 116" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path id="animPath" opacity="0.4" d="M85.8643 3.41503C80.7555 -0.350159 73.8557 -0.468061 68.6348 3.06152L68.1348 3.41503L4.96484 49.9687C2.15804 52.0373 0.500035 55.3209 0.499995 58.8135L0.499987 145.327C0.499987 148.409 3.70973 150.381 6.41991 149.08L6.68065 148.944L76.7451 109.287L76.9912 109.147L77.2383 109.287L147.319 148.956C150.08 150.518 153.5 148.521 153.5 145.34L153.5 58.8223C153.5 55.4392 151.945 52.2514 149.296 50.1748L149.036 49.9775L85.8643 3.41503Z" stroke="#00BF86"/>
    </svg>
</article>
