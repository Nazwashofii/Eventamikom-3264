@extends('layouts.app')

@section('title', 'Katalog')

@section('content')

<div class="max-w-5xl mx-auto">

    <h2 class="text-3xl font-bold text-white mb-6 text-center">🎉 Katalog Event</h2>

    <div class="grid md:grid-cols-3 gap-6">

        <!-- CARD -->
        <div class="bg-white/30 backdrop-blur-lg p-6 rounded-2xl shadow-xl hover:scale-105 hover:rotate-1 transition duration-300 cursor-pointer">
            <div class="text-4xl mb-2">💻</div>
            <h3 class="font-bold text-white">Seminar IT</h3>
            <p class="text-white/80 text-sm">Belajar teknologi terbaru</p>
        </div>

        <div class="bg-white/30 backdrop-blur-lg p-6 rounded-2xl shadow-xl hover:scale-105 hover:-rotate-1 transition duration-300 cursor-pointer">
            <div class="text-4xl mb-2">⚙️</div>
            <h3 class="font-bold text-white">Workshop Laravel</h3>
            <p class="text-white/80 text-sm">Ngoding bareng</p>
        </div>

        <div class="bg-white/30 backdrop-blur-lg p-6 rounded-2xl shadow-xl hover:scale-105 hover:rotate-2 transition duration-300 cursor-pointer">
            <div class="text-4xl mb-2">🏆</div>
            <h3 class="font-bold text-white">Hackathon</h3>
            <p class="text-white/80 text-sm">Kompetisi coding</p>
        </div>

    </div>

</div>

@endsection