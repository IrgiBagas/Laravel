@extends('front')

@section('content')
<div class="row">
    <div class="col-6">
        <form action="{{ url('/postregister') }}" method="post">
            @csrf
            <div>
                <label class="form-label" for="">Pelanggan</label>
                <input class="form-control" value="{{ old('pelanggan') }}" type="text" name="pelanggan" id="">
                <span class="text-danger">
                    @error('pelanggan')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div>
                <label class="form-label" for="">Alamat</label>
                <input class="form-control" value="{{ old('alamat') }}" type="text" name="alamat" id="">
                <span class="text-danger">
                    @error('alamat')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div>
                <label class="form-label" for="">Telepon</label>
                <input class="form-control" value="{{ old('telepon') }}" type="text" name="telepon" id="">
                <span class="text-danger">
                    @error('telepon')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div>
                <label class="form-label" for="">Jenis Kelamis</label>
                <select class="form-select" name="jeniskelamin" id="">
                    <option value="l">Laki</option>
                    <option value="p">Perempuan</option>
                </select>
            </div>
            <div>
                <label class="form-label" for="">Email</label>
                <input class="form-control" value="{{ old('email') }}" type="text" name="email" id="">
                <span class="text-danger">
                    @error('email')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div>
                <label class="form-label" for="">Password</label>
                <input class="form-control" value="{{ old('password') }}" type="password" name="password" id="">
                <span class="text-danger">
                    @error('password')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="mt-4">
                <button class="btn btn-primary" type="submit">Register</button>
            </div>
        </form>
    </div>
</div>
@endsection