@extends('layouts.dashboard')

@section('container')
    {{-- Judul Halaman --}}
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Post Categories</h1>
    </div>

    {{-- Menangani jika berhasil menambahkan/mengubah/menghapus post --}}
    @if (session()->has('success'))
        <div class="alert alert-success col-lg-6" role="alert">
            {{ session('success') }}
        </div>
    @endif

    {{-- Tabel categories --}}
    <div class="table-responsive col-lg-6">
        {{-- Button create new category --}}
        <a href="/dashboard/categories/create" class="btn btn-primary mb-3"> <i data-feather="plus"></i> Create New
            Category</a>
        {{-- Tabel --}}
        <table class="table table-striped table-sm">
            {{-- Kolom --}}
            <thead>
                {{-- Baris Kolom --}}
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Category Name</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>

            {{-- Isi --}}
            <tbody>
                {{-- Loop/Iterasi post yang ada --}}
                @foreach ($categories as $category)
                    <tr>
                        {{-- Nomor --}}
                        <td>{{ $loop->iteration }}</td>

                        {{-- Nama --}}
                        <td>{{ $category->name }}</td>


                        <td>

                            <a href="/dashboard/categories/{{ $category->slug }}" class="badge bg-info">

                                <i data-feather="eye"></i>
                            </a>
                            <a href="/dashboard/categories/{{ $category->slug }}/edit" class="badge bg-warning">
                                <i data-feather="edit"></i>
                            </a>

                            {{-- Hapus --}}
                            <form action="/dashboard/categories/{{ $category->slug }}" method="POST" class="d-inline">
                                {{-- Menangani penyerangan Cross-Site Request Forgery --}}
                                @csrf
                                {{-- Menangani method DELETE --}}
                                @method('delete')
                                {{-- Button hapus --}}
                                <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')">
                                    {{-- Icon hapus --}}
                                    <i data-feather="trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
