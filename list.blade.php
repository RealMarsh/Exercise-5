@extends('master')
@section('title', 'list')
@section('content')

<h1>Ammar's E-books Library</h1>
<ul>
    @foreach($list as $list)
    <li>{{ $list }} </li>
    @endforeach
</ul>
<br>
<style>
    table, td, th {
        border: 1px solid #ddd;
        text-align: left;
    }
    table {
        border-collapse: collapse;
        width: 100%;
    }
    th, td {
        padding: 15px;
    }
</style>
<table>
    <tr>
        <th>Title</th>
        <th>ISBN</th>
        <th>Book category</th>
        <th>Number of pages</th>
    </tr>

    <tr>
        <th>The Silence of Murder</th>
        <th>9780375872938</th>
        <th>BX, Fiction, Teenage / Young Adult, WBD</th>
        <th>327</th>
    </tr>

    <tr>
        <th>I Lost My Way Finding Happiness after Despair</th>
        <th>9789671740248</th>
        <th>Motivation, Spiritual</th>
        <th>62</th>
    </tr>

    <tr>
        <th>The Weight of Our Sky</th>
        <th>9780008158613</th>
        <th>Bestseller, BX, Crime, Fiction, Mystery and Thriller, WBD, Woman Authors</th>
        <th>Varies</th>
    </tr>
</table>
@endsection