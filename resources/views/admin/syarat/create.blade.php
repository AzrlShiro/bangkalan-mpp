@extends('admin.layouts.app')

@section('title', 'Tambah Syarat')

@section('content')
    <h1>Tambah Syarat</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('manage-syarat.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="komponen">Komponen syarat</label>
            <input type="text" name="komponen" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="uraian">Deskripsi syarat</label>
            <div class="toolbar">
                <div class="btn-toolbar">
                    <button id="undoBtn" type="button"><i class='bx bx-undo'></i></button>
                    <button id="redoBtn" type="button"><i class='bx bx-redo'></i></button>
                    <button id="boldBtn" type="button"><i class='bx bx-bold'></i></button>
                    <button id="underlineBtn" type="button"><i class='bx bx-underline'></i></button>
                    <button id="italicBtn" type="button"><i class='bx bx-italic'></i></button>
                    <button id="orderedListBtn" type="button"><i class='bx bx-list-ol'></i></button>
                    <button id="unorderedListBtn" type="button"><i class='bx bx-list-ul'></i></button>
                    <button id="linkBtn" type="button"><i class='bx bx-link'></i></button>
                    <button id="unlinkBtn" type="button"><i class='bx bx-unlink'></i></button>
                </div>
            </div>
            <div id="uraian" contenteditable="true" class="form-control" required></div>
            <input type="hidden" name="uraian" id="uraianInput">
        </div>
        <div class="form-group">
            <label for="id_sub">Kategori Jenis Layanan</label>
            <select name="id_sub" id="id_sub" class="form-control">
                <option value="" disabled selected>--Pilih Jenis Layanan--</option>
                @foreach ($subpelayanan as $subpelayanan)
                    <option value="{{ $subpelayanan->id_sub }}">
                        {{ $subpelayanan->id_sub }} - {{ $subpelayanan->nama_sub }}
                    </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('manage-syarat.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
@endsection

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const editableDiv = document.getElementById('uraian');

        // Fungsi untuk menjalankan execCommand
        function execCommand(command, value = null) {
            editableDiv.focus(); // Pastikan div mendapatkan fokus
            document.execCommand(command, false, value);
            document.getElementById('uraianInput').value = editableDiv.innerHTML; // Update input tersembunyi
        }

        // Event listeners untuk setiap tombol
        document.getElementById('undoBtn').addEventListener('click', () => execCommand('undo'));
        document.getElementById('redoBtn').addEventListener('click', () => execCommand('redo'));
        document.getElementById('boldBtn').addEventListener('click', () => execCommand('bold'));
        document.getElementById('underlineBtn').addEventListener('click', () => execCommand('underline'));
        document.getElementById('italicBtn').addEventListener('click', () => execCommand('italic'));
        document.getElementById('orderedListBtn').addEventListener('click', () => execCommand(
            'insertOrderedList'));
        document.getElementById('unorderedListBtn').addEventListener('click', () => execCommand(
            'insertUnorderedList'));
        document.getElementById('linkBtn').addEventListener('click', () => {
            const url = prompt('Insert url');
            if (url) execCommand('createLink', url);
        });
        document.getElementById('unlinkBtn').addEventListener('click', () => execCommand('unlink'));

        // Update hidden input saat konten diubah
        editableDiv.addEventListener('input', function() {
            document.getElementById('uraianInput').value = this.innerHTML;
        });
    });
</script>

<style>
    .toolbar {
        padding: 10px 16px;
        background: #eee;
        display: none;
    }

    .toolbar .head {
        display: flex;
        grid-gap: 15px;
        margin-bottom: 16px;
        flex-wrap: wrap;
    }

    .toolbar .head>input {
        max-width: 100px;
        padding: 6px 10px;
        border-radius: 6px;
        border: 2px solid #fff;
        outline: none;
    }

    .toolbar .head select {
        background: #fff;
        border: 2px solid #fff;
        border-radius: 6px;
        outline: none;
        cursor: pointer;
    }

    .toolbar .head .color {
        background: #fff;
        border: 2px solid #fff;
        border-radius: 6px;
        outline: none;
        cursor: pointer;
        display: flex;
        align-items: center;
        grid-gap: 6px;
        padding: 0 10px;
    }

    .toolbar .head .color span {
        font-size: 14px;
    }

    .toolbar .head .color input {
        border: none;
        padding: 0;
        width: 26px;
        height: 26px;
        background: #fff;
        cursor: pointer;
    }

    .toolbar .head .color input::-moz-color-swatch {
        width: 20px;
        height: 20px;
        border: none;
        border-radius: 50%;
    }

    .toolbar .btn-toolbar {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        grid-gap: 10px;
    }

    .toolbar .btn-toolbar button {
        background: #fff;
        border: 2px solid #fff;
        border-radius: 6px;
        cursor: pointer;
        width: 42px;
        height: 42px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 18px;
    }

    .toolbar .btn-toolbar button:hover {
        background: #f3f3f3;
    }

    #uraian {
        border: 1px solid #ced4da;
        padding: 10px;
        min-height: 150px;
        overflow-y: auto;
    }
</style>
