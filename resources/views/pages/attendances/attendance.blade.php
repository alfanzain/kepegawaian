@extends('pages.index')

@section('content')
<div class="" style="margin: 20px auto; width: 500px;">
    <h3 class="mb-3">Attendance</h3>
    <form action="/attend">
        <select name="employee_id" id="" class="form-control">
            @foreach ($employees as $employee)
                <option value="{{ $employee->id }}">{{ $employee->name }}</option>
            @endforeach
        </select>

        <div class="mb-2"></div>

        <button type="submit" class="btn btn-lg btn-success">Check</button>
    </form>
</div>
@endsection