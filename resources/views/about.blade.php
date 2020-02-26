@extends('layout.master')

@section('title', 'Tentang')

@section('container')
<div class="jumbotron jumbotron-fluid min-vh-100">
    <div class="container">
        <h1 class="display-4">Hello, {{ $name }}</h1>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vel dictum orci. Duis porta non tellus sit amet hendrerit. Suspendisse ac ante iaculis, tempor ex in, vehicula erat. Maecenas id posuere libero, vitae eleifend mi. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dictum lacus ex, vitae semper diam dapibus sed. Integer a aliquam diam. In luctus neque erat, eget mollis augue semper dapibus.</p>
    </div>
</div>
@endsection
