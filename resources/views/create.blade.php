@extends('layout.layout')
@section('content')

    <div class="content" style="margin-inline: 20rem; margin-top: 5rem">

        <p>Para agregar un nuevo anime</p>
        <form action="">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nombre</label>
                <input type="email" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">descripción</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>


            <div class="mb-3">
                <label for="formFileSm" class="form-label">Imagen</label>
                <input class="form-control form-control-sm" id="formFileSm" type="file">
            </div>
        </form>
        
        <p style="margin-top: 5rem">Para agregar un capitulo</p>
        <form action="">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nombre</label>
                <input type="email" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">descripción</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>


            <div class="mb-3">
                <label for="formFileSm" class="form-label">Imagen</label>
                <input class="form-control form-control-sm" id="formFileSm" type="file">
            </div>
            <div>
                <label for="formFileLg" class="form-label">video</label>
                <input class="form-control form-control-lg" id="formFileLg" type="file">
            </div>
        </form>
    </div>
    <div class="content" style="margin-inline: 20rem; margin-top: 5rem">
        
    </div>






@endsection
