<x-layout>

<div style="text-align:center; margin-bottom:20px;">
    <h1>Syahrial Pamudha Wardhana</h1>
    <p>NIM: A710230019</p>
</div>

<h2 style="text-align:center;">Daftar Chirps</h2>

@foreach ($chirps as $chirp)
    <div style="background:white; padding:10px; margin:10px auto; max-width:500px; border-radius:8px;">
        <b>{{ $chirp->message }}</b>

        <form method="POST" action="/chirps/{{ $chirp->id }}" style="margin-top:10px;">
            @csrf
            @method('DELETE')

            <button style="background:red; color:white;">Hapus</button>
        </form>
    </div>
@endforeach

</x-layout>