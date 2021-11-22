@extends('layouts.header')
@section('styles')
<style>
.breadcrumb {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    padding: 0.75rem 1rem;
    margin-bottom: 1rem;
    list-style: none;
    background-color: #e9ecef;
    border-radius: 0.25rem;
}
</style>
@endsection
@section('content')
      <main role="main">
<main role="main" class="pt-2 pb-2 details">
<div class="container">
<div aria-label="breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="/">প্রচ্ছদ</a></li>
<li class="breadcrumb-item active" aria-current="page">Terms of Use</li>
</ol>
</div>
<div class="py-5">
<p class="pt-5">
{!! Voyager::setting('site.terms') !!}
</p>
</div>
</div>
</main>
</main>
@endsection