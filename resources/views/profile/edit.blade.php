@extends('layouts.app')

@section('title', 'Mi perfil')

@section('header')
    <h1 class="text-2xl font-semibold text-gray-800">Mi perfil</h1>
@endsection

@section('content')
<div class="py-12">
    <div class="mx-auto max-w-7xl space-y-6 px-4 sm:px-6 lg:px-8">
        <section class="rounded-2xl bg-white p-4 shadow sm:p-8">
            <div class="max-w-xl">
                @include('profile.partials.update-profile-information-form')
            </div>
        </section>

        <section class="rounded-2xl bg-white p-4 shadow sm:p-8">
            <div class="max-w-xl">
                @include('profile.partials.update-password-form')
            </div>
        </section>

        <section class="rounded-2xl bg-white p-4 shadow sm:p-8">
            <div class="max-w-xl">
                @include('profile.partials.delete-user-form')
            </div>
        </section>
    </div>
</div>
@endsection
