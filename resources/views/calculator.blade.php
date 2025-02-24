@extends('layouts.master')
@section('title', 'Calculator')
@section('content')
<div class="card">
    <div class="card-header">Simple Calculator</div>
    <div class="card-body">
        <input type="number" id="num1" placeholder="Enter number 1">
        <input type="number" id="num2" placeholder="Enter number 2">
        <button onclick="calculate('+')">+</button>
        <button onclick="calculate('-')">-</button>
        <button onclick="calculate('*')">*</button>
        <button onclick="calculate('/')">/</button>
        <h4>Result: <span id="result"></span></h4>
    </div>
</div>

<script>
function calculate(operator) {
    let num1 = parseFloat(document.getElementById('num1').value);
    let num2 = parseFloat(document.getElementById('num2').value);
    let result = 0;
    if (operator == '+') result = num1 + num2;
    if (operator == '-') result = num1 - num2;
    if (operator == '*') result = num1 * num2;
    if (operator == '/') result = num1 / num2;
    document.getElementById('result').innerText = result;
}
</script>
@endsection
