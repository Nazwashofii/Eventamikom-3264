@extends('layouts.admin')

@section('content')
<div class="p-10 w-full">

    <!-- Header -->
    <div class="flex justify-between items-center mb-10">
        <div>
            <h1 class="text-3xl font-black text-slate-800">Kategori Event</h1>
            <p class="text-slate-500">Kelola kategori seperti Seminar, Konser, dll.</p>
        </div>

        <button 
            class="px-6 py-3 bg-indigo-600 text-white rounded-2xl font-bold shadow-lg hover:bg-indigo-700 transition">
            + Tambah
        </button>
    </div>

    <!-- CARD TABLE FULL WIDTH -->
    <div class="bg-white rounded-[2.5rem] border border-slate-100 shadow-sm overflow-hidden w-full">

        <!-- Top Bar -->
        <div class="px-8 py-6 bg-slate-50 border-b flex justify-between items-center">
            <input type="text" placeholder="Cari kategori..."
                class="px-5 py-3 rounded-xl border border-slate-200 w-1/3 focus:ring-2 focus:ring-indigo-500 outline-none">

            <button 
                class="px-5 py-2 bg-indigo-600 text-white rounded-xl hover:bg-indigo-700">
                + Tambah
            </button>
        </div>

        <!-- Table -->
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">

                <thead class="bg-slate-50 text-slate-400 uppercase text-xs font-bold tracking-wider">
                    <tr>
                        <th class="px-8 py-4 w-16">No</th>
                        <th class="px-8 py-4">Nama Kategori</th>
                        <th class="px-8 py-4 w-40">Aksi</th>
                    </tr>
                </thead>

                <tbody class="divide-y">

                    <!-- Data -->
                    <tr class="hover:bg-slate-50 transition">
                        <td class="px-8 py-6 font-bold text-slate-400">1</td>
                        <td class="px-8 py-6 font-semibold text-slate-700">Seminar</td>
                        <td class="px-8 py-6 flex gap-2">
                            <button class="px-4 py-2 bg-yellow-400 text-white rounded-xl hover:bg-yellow-500">
                                Edit
                            </button>
                            <button class="px-4 py-2 bg-rose-500 text-white rounded-xl hover:bg-rose-600">
                                Hapus
                            </button>
                        </td>
                    </tr>

                    <tr class="hover:bg-slate-50 transition">
                        <td class="px-8 py-6 font-bold text-slate-400">2</td>
                        <td class="px-8 py-6 font-semibold text-slate-700">Konser</td>
                        <td class="px-8 py-6 flex gap-2">
                            <button class="px-4 py-2 bg-yellow-400 text-white rounded-xl hover:bg-yellow-500">
                                Edit
                            </button>
                            <button class="px-4 py-2 bg-rose-500 text-white rounded-xl hover:bg-rose-600">
                                Hapus
                            </button>
                        </td>
                    </tr>

                    <tr class="hover:bg-slate-50 transition">
                        <td class="px-8 py-6 font-bold text-slate-400">3</td>
                        <td class="px-8 py-6 font-semibold text-slate-700">Workshop</td>
                        <td class="px-8 py-6 flex gap-2">
                            <button class="px-4 py-2 bg-yellow-400 text-white rounded-xl hover:bg-yellow-500">
                                Edit
                            </button>
                            <button class="px-4 py-2 bg-rose-500 text-white rounded-xl hover:bg-rose-600">
                                Hapus
                            </button>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>

    </div>

</div>
@endsection