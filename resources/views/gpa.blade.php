@extends('layouts.master')
    @section('title', 'GPA Simulator')
@section('content')
<div class="card">
    <div class="card-header">GPA Simulator</div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>Course Code</th>
                    <th>Title</th>
                    <th>Credit Hours</th>
                    <th>Grade</th>
                </tr>
            </thead>
            <tbody>
                @foreach($courses as $course)
                <tr>
                    <td>{{ $course['code'] }}</td>
                    <td>{{ $course['title'] }}</td>
                    <td>{{ $course['credit'] }}</td>
                    <td>
                        <input type="number" class="grade" data-credit="{{ $course['credit'] }}" min="0" max="4" step="0.1">
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <button class="btn btn-primary" onclick="calculateGPA()">Calculate GPA</button>
        <h4>GPA: <span id="gpa"></span></h4>
    </div>
</div>

<script>
function calculateGPA() {
    let totalCredits = 0, totalPoints = 0;
    document.querySelectorAll('.grade').forEach(input => {
        let grade = parseFloat(input.value);
        let credit = parseInt(input.getAttribute('data-credit'));
        if (!isNaN(grade)) {
            totalPoints += grade * credit;
            totalCredits += credit;
        }
    });
    let gpa = (totalCredits > 0) ? (totalPoints / totalCredits).toFixed(2) : 0;
    document.getElementById('gpa').innerText = gpa;
}
</script>
@endsection
