<h1>Home</h1>
@foreach($courses as $course)

    <h2>{{ $course->title }}</h2>
    <p>{{ $course->description }}</p>
@endforeach
