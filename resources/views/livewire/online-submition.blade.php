<div>
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

                <div wire:ignore>
                    <div class="form-group">
                        <label for="">Abstrack</label>
                        <textarea wire:model='abstract' >
                        </textarea>
                    </div>
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
                    <button class="btn btn-success">Submit Sekarang</button>
                </div>
            </form>
        </div>
    </div>
</div>


@section('css')

@endsection
@section('js')
<script src="https://cdn.tiny.cloud/1/3kubek8r1p1mz4kvit7hc1z2mxd8wgg551cbeu82qkmenprf/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
      toolbar_mode: 'floating',
      height: 500
    });
</script>

<script>
    Livewire.on('success', params => {
        Swal.fire(
            params['title'],
            params['message'],
            params['type']
        )
    })
</script>
@endsection
