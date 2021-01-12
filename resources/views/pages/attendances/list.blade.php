@extends('pages.index')

@section('content')
<div class="" style="margin: 20px auto; width: 500px;">
    <h3 class="mb-3">Attendancy</h3>
    @foreach ($attendances as $attendance)
        <div class="alert alert-info">{{ $attendance->created_at }} - {{ $attendance->employee->name }}</div>
    @endforeach
</div>
@endsection