        <div class="form-group">
            <label for="file">Archivo a subir:</label>
                <input type="file" id="file" name="file" class="form-control-file mt-1" value="{{ isset($file)?$file->file:old('file') }}">
                @if( $errors->has('file'))
                    <div class="invalid-feedback">
                        {{ $errors->first('file') }}
                    </div>
                @endif
        </div>
        <div class="form-group">
            <label for="name">Nombre del archivo:</label>
            <input type="name" id="name" name="name" class="form-control" value="{{ isset($name)?$name->name:old('name') }}">
                @if( $errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
        </div>

        <div class="form-group">
            <label for="description">Descripcción del archivo:</label>
                <input type="text" id="description" name="description" class="form-control" value="{{ isset($file)?$file->description:old('description') }}" rows="10">
                @if( $errors->has('description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('description') }}
                    </div>
                @endif
            </div>
