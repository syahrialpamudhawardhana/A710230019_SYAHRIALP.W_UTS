public function index()
{
    $chirps = []; // sementara kosong dulu
    return view('home', compact('chirps'));
}
public function destroy(Chirp $chirp)
{
    $chirp->delete();

    return redirect('/');
}