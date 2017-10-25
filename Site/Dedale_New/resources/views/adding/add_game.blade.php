 @extends('layout')

@section('content')

   <h2>Ajouter un jeu</h2>
   
    {!! Form::open(
        ['url' => route('pro.post_game'), 'class' => 'ui form',
        'enctype' => 'multipart/form-data', 'files' => true
    ]) !!}
        
        <div class="field">
            <label for="add_game_name">Titre du jeu</label>
            {!! Form::text('name', null, ['id' => 'add_game_name']) !!}
        </div>

        <div class="field">
            <label for='add_game_descr'>Description</label>
            {!! Form::textarea('description', null, ['id' => 'add_game_descr']) !!}
        </div>

        <div class="field">
            <label class="upload-file custom-file" for="images">Choisir une ou des image(s)</label>
            {!! Form::file('images[]', 
                ['id' => 'images', 'multiple' => 'multiple']) 
            !!}
        </div>
        <output id="list-show__up_img"></output>
        <script>
            function handleFileSelect(evt) {
                var files = evt.target.files;
                for (var i = 0, f; f = files[i]; i++) {
                    if (!f.type.match('image.*')) {
                        continue;
                    }

                    var reader = new FileReader();

                    reader.onload = (function(theFile) {
                        return function(e) {
                            var span = document.createElement('span');
                            span.innerHTML = ['<img class="thumb" src="', e.target.result,
                            '" title="', escape(theFile.name), '"/>'].join('');
                            document.getElementById('list-show__up_img').insertBefore(span, null);
                        };
                    })(f);
                    reader.readAsDataURL(f);
                }
            }
            document.getElementById('images').addEventListener('change', handleFileSelect, false);
        </script>

        {!! Form::hidden('note', 0) !!}

        <button type='submit' class='ui button primary'>Ajouter le jeu</button>

    {!! Form::close() !!}

@endsection