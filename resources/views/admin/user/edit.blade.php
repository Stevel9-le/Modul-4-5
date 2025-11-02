@extends('admin.layouts.app')
@section('title', 'Edit User')
@section('content')

<div class="py-4">
    <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
        <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
            <li class="breadcrumb-item">
                <a href="#">
                    <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                        </path>
                    </svg>
                </a>
            </li>
            <li class="breadcrumb-item"><a href="#">User</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit User</li>
        </ol>
    </nav>

    <div class="d-flex justify-content-between w-100 flex-wrap">
        <div class="mb-3 mb-lg-0">
            <h1 class="h4">Edit User</h1>
            <p class="mb-0">Form untuk mengedit data user.</p>
        </div>
        <div>
            <a href="{{ route('user.index') }}" class="btn btn-primary">
                <i class="far fa-question-circle me-1"></i> Kembali
            </a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12 mb-4">
        <div class="card border-0 shadow components-section">
            <div class="card-body">
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif
                @if($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Terjadi kesalahan:</strong>
                        <ul class="mb-0">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif
                <form action="{{ route('user.update', $dataUser->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="name" class="form-label fw-semibold">Name</label>
                            <input type="text" id="name" name="name"
                                   value="{{ old('name', $dataUser->name) }}"
                                   class="form-control form-control-lg" required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="password" class="form-label fw-semibold">Password</label>
                            <input type="password" name="password" placeholder="Password">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="email" class="form-label fw-semibold">Email</label>
                            <input type="email" id="email" name="email"
                                   value="{{ old('email', $dataUser->email) }}"
                                   class="form-control form-control-lg text-lowercase" required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="confirm_password" class="form-label fw-semibold">Confirm Password</label>
                            <input type="password" name="password_confirmation" placeholder="Konfirmasi Password">
                        </div>
                    </div>

                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary px-4">Simpan</button>
                        <a href="{{ route('user.index') }}" class="btn btn-outline-secondary ms-2 px-4">Batal</a>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection
