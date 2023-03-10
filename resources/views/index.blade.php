@extends('layouts.app')
@section('content')
<div class="container mx-auto py-1">
    <div class="h-screen flex flex-col justify-between">
        <!-- header -->
        <div class="hidden lg:flex justify-between m-2 sm:mx-4">
            <a href="{{url('/')}}">
                <h1 class="text-3xl font-bold text-center mx-10"> <span
                        class="bg-gradient-to-r from-red-500 to-rose-400 bg-clip-text text-transparent"> 92.1 FM Radio
                        Pesona</span>
                </h1>
            </a>
            <div class="flex space-x-4 font-medium sm:text-lg">
                <a href="{{url('/newsall')}}" class="hover:scale-125  text-red-500">News</a>
                <a href="{{url('/photos')}}" class="hover:scale-125 text-red-500">Tips & Trick</a>
                <a href="https://api.whatsapp.com/send?phone=6282323839996"
                    class="hover:scale-125 text-red-500">Contact</a>
                <a href="{{ url('login') }}" class="hover:scale-125 text-red-500">Login</a>
            </div>
        </div>
        <!-- title website -->
        <div class="hidden xl:flex justify-center">
            <h1 class="text-8xl font-bold text-center my-15 "> Radio LPPL
                <span class="bg-gradient-to-r from-blue-500 to-teal-500 bg-clip-text text-transparent">Wonosobo
                </span>
                <p class="text-center bg-gradient-to-r from-blue-500 to-teal-500 bg-clip-text text-transparent"> Jawa
                    Tengah
                </p>
            </h1>
        </div>
        <!-- box menu -->
        <div class="justify-center flex flex-wrap flex-row hp:mt-12 sm:space-x-3 md:space-x-5 md:mt-16">
            <section>
                <div
                    class="bg-gradient-to-r from-blue-300 to-blue-500 text-center shadow-lg rounded-md group grid place-items-center w-60 backdrop-blur-lg bg-slate-500/2 h-40 sm:ml-3 md:ml-5 md:hover:-translate-y-5 hp:mb-2">
                    <h1 class="text-4xl mt-2 xl:font-extrabold">
                        Streaming Online
                    </h1>
                    <button
                        class="btn shadow-md shadow-red-500/50 bg-red-500 rounded-lg m-2 btn-playstream group-hover:scale-125 text-md w-14 p-1 ">Play</button>
                </div>
            </section>
            <section>
                <a href="{{url('/newsall')}}">
                    <div
                        class="bg-gradient-to-r from-red-700 to-red-800 text-center shadow-lg rounded-md grid place-items-center group w-60 backdrop-blur-lg bg-slate-500/2 h-40 hover:cursor-pointer md:hover:-translate-y-5 hp:mb-2">
                        <h1 class="text-2xl group-hover:scale-125 md:text-5xl xl:font-extrabold">News</h1>
                </a>
            </section>
            <section>
                <a href="{{url('/photos')}}">
                    <div
                        class="bg-gradient-to-r from-yellow-500 to-orange-500 text-center shadow-lg rounded-md grid place-items-center group w-60 backdrop-blur-lg bg-slate-500/2 h-40 sm:mt-3 md:mt-5 hover:cursor-pointer md:hover:-translate-y-5 lg:mt-0 hp:mb-2">
                        <h1 class="text-2xl group-hover:scale-125 md:text-4xl xl:font-extrabold text-white">Tips & Trick
                        </h1>
                    </div>
                </a>
            </section>
            <section>
                <div
                    class="bg-purple-400 text-center shadow-lg rounded-md grid place-items-center w-60 backdrop-blur-lg bg-slate-500/2 h-40 sm:mt-3 md:mt-5 md:hover:-translate-y-5 xl:mt-0 hp:mb-2">
                    <h1 class="text-4xl mt-2 xl:font-extrabold ">
                        Social Media
                    </h1>
                    <div class="flex space-x-4 m-2 sm:space-x-6">
                        <div class="group">
                            <div class="flex justify-center group-hover:scale-125">
                                <a href="https://www.instagram.com/pesonafmwonosobo" target="_blank">
                                    <img src="{{ asset('assets/image/001-instagram.png') }}"
                                        class="scale-125 sm:scale-150">
                                </a>
                            </div>
                        </div>
                        <div class="group">
                            <div class="flex justify-center group-hover:scale-125">
                                <a href="https://www.facebook.com/profile.php?id=100039381652233" target="_blank">
                                    <img src="{{ asset('assets/image/002-facebook.png') }}"
                                        class="scale-125 sm:scale-150">
                                </a>
                            </div>
                        </div>
                        <div class="group">
                            <div class="flex justify-center group-hover:scale-125">
                                <a href="https://www.youtube.com/channel/UCklHzjhKAwuLFJJXPorNidQ" target="_blank">
                                    <img src="{{ asset('assets/image/003-youtube.png') }}"
                                        class="scale-125 sm:scale-150">
                                </a>
                            </div>
                        </div>
                        <div class="group">
                            <div class="flex justify-center group-hover:scale-125">
                                <a href="https://www.tiktok.com/@pesonafm.official?_t=8V4CnyeOVX8&_r=1" target="_blank">
                                    <img src="{{ asset('assets/image/tiktok.png') }}" class="scale-125 sm:scale-150">
                                </a>
                            </div>
                        </div>
                        <div class="group">
                            <div class="flex justify-center group-hover:scale-125">
                                <a href="https://twitter.com/pesonafmofc?s=21&t=21IEkLnxsotkWbw2ObgEQg" target="_blank">
                                    <img src="{{ asset('assets/image/twitter.png') }}" class="scale-125 sm:scale-150">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="flex space-x-4 m-2 sm:space-x-6">
                        <div class="group">
                            <div class="flex justify-center group-hover:scale-125">
                                <a href="https://api.whatsapp.com/send?phone=6282323839996" target="_blank">
                                    <img src="{{ asset('assets/image/WA.png') }}" class="scale-125 sm:scale-150">
                                </a>
                            </div>
                        </div>
                        <div class="group">
                            <div class="flex justify-center group-hover:scale-125">
                                <a href="tel://082323839996">
                                    <img src="{{ asset('assets/image/telephone.png') }}" class="scale-125 sm:scale-150">
                                </a>
                            </div>
                        </div>
                        <div class="group">
                            <div class="flex justify-center group-hover:scale-125">
                                <a href="mailto: pesonamedsos@gmail.com">
                                    <img src="{{ asset('assets/image/gmail-2.png') }}" class="scale-125 sm:scale-150">
                                </a>
                            </div>
                        </div>
                    </div>
            </section>
            <section>
                <a href="{{ url('/front-music') }}">
                    <div
                        class="bg-gradient-to-r from-orange-200 via-red-400 to-purple-500 text-center shadow-lg rounded-md grid place-items-center w-60 backdrop-blur-lg bg-slate-500/2 h-40 sm:mt-3 md:mt-5 md:hover:-translate-y-5 xl:mt-2 hp:mb-2">
                        <h1 class="text-4xl mt-2 xl:font-extrabold">
                            Chart Top 10 Music
                        </h1>
                    </div>
                </a>
            </section>
            <section>
                <a href="{{ url('/front-buaper') }}">
                    <div
                        class="bg-gradient-to-r from-pink-400 to-pink-500 text-center shadow-lg rounded-md grid place-items-center w-60 backdrop-blur-lg bg-slate-500/2 h-40 sm:mt-3 md:mt-5 md:hover:-translate-y-5 xl:mt-2 hp:mb-2">
                        <h1 class="text-4xl mt-2 xl:font-extrabold">
                            Buaperrr
                            <p class="text-2xl mt-2 xl:font-extrabold"> (Buat Pesona Inspira) </p>
                        </h1>

                    </div>
                </a>
            </section>
            <section>
                <a href="{{ url('/strukturall') }}">
                    <div
                        class="bg-gradient-to-r from-zinc-300 via-zinc-600 to-zinc-800 text-center shadow-lg rounded-md grid place-items-center w-60 backdrop-blur-lg bg-slate-500/2 h-40 sm:mt-3 md:mt-5 md:hover:-translate-y-5 xl:mt-2">
                        <h1 class="text-3xl mt-2 xl:font-extrabold text-white ">
                            Our Crew
                        </h1>
                    </div>
                </a>
            </section>
        </div>
        <!-- footer -->
        <div class="text-center sm:mt-16">?? 2022 DISKOMINFO</div>
    </div>
</div>
<audio id="audio_1">
    <source src="http://i.klikhost.com:8234/stream" type="audio/mpeg">
</audio>
@push('after-script')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    $('.btn-playstream').click(function () {
        currentvalue = document.getElementById('audio_1').value;
        if (currentvalue == "on") {
            document.getElementById('audio_1').pause();
            document.getElementById("audio_1").value = "off";
            console.log("off!");
            $(".btn-playstream").html('Play');
        } else {
            document.getElementById('audio_1').play();
            document.getElementById("audio_1").value = "on";
            console.log("on!");
            $(".btn-playstream").html('Pause');
        }
    });
</script>
@endpush
@endsection