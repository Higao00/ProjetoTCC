<div class="container">
    <div class="row">
        <div class="col-md-12" align="center">
            <h4>Coloque aqui suas fotos de Quadras!</h4>
            {!! Form::open(['route' => ['dropzone.store'], 'files' => true, 'enctype' => 'multipart/form-data', 'class'
            => 'dropzone', 'id' => 'image']) !!}
            <div class="dz-message">
                <span style="font-size: 20px; font-weight: 500;">Clique Aqui para adicionar Fotos. <i
                        class="fas fa-cloud-upload-alt"></i></span><br>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>


