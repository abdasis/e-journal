<div>
    <div class="alert alert-info">Silahkan login / register terlebih dahulu untuk mengupload jurnal terbaru anda</div>
    <div class="card shadow-md">
        <div class="card-body">
            <form wire:submit.prevent='store'>
                <div class="form-group">
                    <label for="">Title Jurnal</label>
                    <input type="text" class="form-control" wire:model='journal_title'>
                </div>

                <div class="form-group">
                    <label for="">Subtitle Journal</label>
                    <input type="text" class="form-control" wire:model='journal_subtitle'>
                </div>
                <div class="form-group" wire:ignore>
                    <label for="">Abstrack</label>
                    <textarea wire:model='abstract' id="abstract">
                    </textarea>
                </div>

                <div class="form-group">
                    <label for="">Type</label>
                    <input type="text" class="form-control" wire:model='type'>
                </div>

                <div class="form-group">
                    <label for="">Keyword</label>
                    <input type="text" class="form-control" wire:model='keyword'>
                </div>

                <div class="form-group">
                    <label for="">File Journal</label>
                    <input type="file" class="form-control" wire:model='file_journal'>
                </div>

                <div class="form-group">
                    <button class="btn btn-success">Submit Sekarang</button>
                </div>
            </form>
        </div>
    </div>
    @auth
    <div class="card shadow-md">
        <div class="card-body">
            <form wire:submit.prevent='store'>
                <div class="form-group">
                    <label for="">Title Jurnal</label>
                    <input type="text" class="form-control" wire:model='journal_title'>
                </div>

                <div class="form-group">
                    <label for="">Subtitle Journal</label>
                    <input type="text" class="form-control" wire:model='journal_subtitle'>
                </div>
                <div class="form-group" wire:ignore>
                    <label for="">Abstrack</label>
                    <textarea wire:model='abstract' id="abstract">
                    </textarea>
                </div>

                <div class="form-group">
                    <label for="">Type</label>
                    <input type="text" class="form-control" wire:model='type'>
                </div>

                <div class="form-group">
                    <label for="">Keyword</label>
                    <input type="text" class="form-control" wire:model='keyword'>
                </div>

                <div class="form-group">
                    <label for="">File Journal</label>
                    <input type="file" class="form-control" wire:model='file_journal'>
                </div>

                <div class="form-group">
                    <button class="btn btn-success">Submit Sekarang</button>
                </div>
            </form>
        </div>
    </div>
    @endauth
</div>


@section('css')

@endsection
@push('scripts')
<script src="https://cdn.tiny.cloud/1/3kubek8r1p1mz4kvit7hc1z2mxd8wgg551cbeu82qkmenprf/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/jquery.tinymce.min.js" referrerpolicy="origin"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    var abstract = $('#abstract').tinymce({
      plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
      toolbar_mode: 'floating',
      height: 500,
      setup: function(editor){
          editor.on('blur', function(e){
              @this.set('abstract', tinymce.activeEditor.getContent())
          })
      }
    });

</script>
<script>
    Livewire.on('success', function(){
        Swal.fire(
            'Selamat!',
            'Journal yang anda submit sudah kami terima, berikan kami waktu untuk menerbitkan journal anda!',
            'success'
        )
        @this.set('abstract', tinymce.activeEditor.setContent(''))
    })
</script>
@endpush
