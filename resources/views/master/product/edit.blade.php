@extends('layout.default')

@section('page_toolbar')
    @php
        $button = [
            ['route'=> '.index', 'title' => 'Back','svg' => 'Navigation/Angle-double-left.svg', 'class' => 'btn-info']
        ];
    @endphp

@endsection

@section('content')
<div class="row">
    <div class="col-xs-8 col-sm-8 col-md-8 offset-2">
        <div class="card card-custom {{ @$class }}">
            {{-- Header --}}
            <div class="card-header flex-wrap border-0 pt-6 pb-0">
                <div class="card-title">
                    <h3 class="card-label">{{ @$page_description }}
                    </h3>
                </div>
            </div>
            {{-- Body --}}
            <div class="card-body pt-4" >
                {!! Form::model($record, ['method' => 'PATCH','route' => ['products.update', $record->id], 'id' => 'MyForm',  'enctype' => 'multipart/form-data']) !!}

                {{ Form::inputText('Name: ', 'name', null, null, ['placeholder' => 'products name', 'required']) }}
                {{ Form::inputTextarea('Description: ', 'detail', null, null, ['placeholder' => 'products description', 'required']) }}
                <div class="form-group">
                    <label for="document">Documents</label>
                    <div class="needsclick dropzone" id="document-dropzone">

                    </div>
                </div>

                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
    var uploadedDocumentMap = {}
    $("div#document-dropzone").dropzone({
        url: "{{ route('apis.uploadMedia') }}",
        maxFilesize: 2, // MB
        addRemoveLinks: true,
        headers: {
            'X-CSRF-TOKEN': "{{ csrf_token() }}"
        },
        success: function (file, response) {
                $('form').append('<input type="hidden" name="document[]" value="' + response.name + '">')
                uploadedDocumentMap[file.name] = response.name
            },
        removedfile: function (file) {
            file.previewElement.remove()
            var name = ''
            if (typeof file.file_name !== 'undefined') {
                name = file.file_name
            } else {
                name = uploadedDocumentMap[file.name]
            }
            $('form').find('input[name="document[]"][value="' + name + '"]').remove()
        },
        init: function () {
            @if(isset($record) && $record->getMedia('document'))
            var files = {!! json_encode($record->getMedia('document')) !!}
            for (var i in files) {
                var file = files[i]
                this.options.addedfile.call(this, file)
                file.previewElement.classList.add('dz-complete')
                $('form').append('<input type="hidden" name="document[]" value="' + file.file_name + '">')
            }
            @endif
        }
    });
</script>
@endsection
