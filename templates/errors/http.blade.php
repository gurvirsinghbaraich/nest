<?php
http_response_code($statusCode);
?>

@extends('errors.layout')

@section('status-code')
  {{ $statusCode }}
@endsection

@section('status-message')
  {{ $statusMessage }}
@endsection
