@extends('admin.layouts.app')

@section('title', 'Edit Syarat')

@section('content')
    <h1>Edit Syarat</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('manage-syarat.update', $syarat->id_komponen) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="komponen">Komponen syarat</label>
            <input type="text" name="komponen" class="form-control" value="{{ $syarat->komponen }}" required>
        </div>
        <div class="form-group">
            <label for="uraian">Deskripsi syarat</label>
            <div class="toolbar">
                <div class="btn-toolbar">
                    <button type="button" onclick="formatDoc('undo')"><i class='bx bx-undo' ></i></button>
                    <button type="button" onclick="formatDoc('redo')"><i class='bx bx-redo' ></i></button>
                    <button type="button" onclick="formatDoc('bold')"><i class='bx bx-bold'></i></button>
                    <button type="button" onclick="formatDoc('underline')"><i class='bx bx-underline' ></i></button>
                    <button type="button" onclick="formatDoc('italic')"><i class='bx bx-italic' ></i></button>
                    <button type="button" onclick="formatDoc('strikeThrough')"><i class='bx bx-strikethrough' ></i></button>
                    <button type="button" onclick="formatDoc('justifyLeft')"><i class='bx bx-align-left' ></i></button>
                    <button type="button" onclick="formatDoc('justifyCenter')"><i class='bx bx-align-middle' ></i></button>
                    <button type="button" onclick="formatDoc('justifyRight')"><i class='bx bx-align-right' ></i></button>
                    <button type="button" onclick="formatDoc('justifyFull')"><i class='bx bx-align-justify' ></i></button>
                    <button type="button" onclick="formatDoc('insertOrderedList')"><i class='bx bx-list-ol' ></i></button>
                    <button type="button" onclick="formatDoc('insertUnorderedList')"><i class='bx bx-list-ul' ></i></button>
                    <button type="button" onclick="addLink()"><i class='bx bx-link' ></i></button>
                    <button type="button" onclick="formatDoc('unlink')"><i class='bx bx-unlink' ></i></button>
                </div>
            </div>
            <textarea name="uraian" class="form-control" required>{{ $syarat->uraian }}</textarea>
        </div>
        <div class="form-group">
            <label for="id_sub">Kategori Layanan</label>
            <select name="id_sub" id="id_sub" class="form-control" required>
                <option value="" disabled selected>--Pilih Jenis Layanan--</option>
                @foreach ($subpelayanan as $item)
                    <option value="{{ $item->id_sub }}" {{ $item->id_sub == $item->id_sub ? 'selected' : '' }}>
                        {{ $item->id_sub }} - {{ $item->nama_sub }}
                    </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('manage-syarat.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
@endsection
