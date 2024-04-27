@vite('resources/css/end_btn.css')

@foreach ($lesson as $item)
    <form class="end_lesson" action="{{ route('updateRank', ['id' => $user->id, 'course_id' => $item->course_id]) }}"
        method="POST">
        @csrf
        <button type="submit" class="end_btn">Завершить</button>
    </form>
@endforeach

