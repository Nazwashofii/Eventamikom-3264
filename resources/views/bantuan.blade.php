@extends('layouts.app')

@section('title', 'Bantuan')

@section('content')

<div class="flex justify-center">

    <div class="bg-white/30 backdrop-blur-lg p-8 rounded-3xl shadow-2xl w-full max-w-xl">

        <h2 class="text-2xl font-bold text-white mb-6 text-center">❓ Bantuan</h2>

        <div class="space-y-4">

            <div class="bg-white/20 p-4 rounded-xl hover:bg-white/30 transition">
                <p class="font-semibold text-white">Cara daftar event?</p>
                <p class="text-white/80 text-sm">Masuk ke katalog lalu pilih event.</p>
            </div>

            <div class="bg-white/20 p-4 rounded-xl hover:bg-white/30 transition">
                <p class="font-semibold text-white">Apakah gratis?</p>
                <p class="text-white/80 text-sm">Sebagian gratis, sebagian berbayar.</p>
            </div>

            <div class="bg-white/20 p-4 rounded-xl hover:bg-white/30 transition">
                <p class="font-semibold text-white">Bisa ikut banyak event?</p>
                <p class="text-white/80 text-sm">Bisa banget 👍</p>
            </div>

        </div>

    </div>

</div>

@endsection