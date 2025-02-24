@extends('layouts.master')
@section('title', 'Transcript')
@section('content')
<div class="card">
    <div class="card-header">Student Transcript</div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>Course</th>
                    <th>Grade</th>
                </tr>
            </thead>
            <tbody>
                @foreach($courses as $course)
                <tr>
                    <td>{{ $course['name'] }}</td>
                    <td>{{ $course['grade'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
