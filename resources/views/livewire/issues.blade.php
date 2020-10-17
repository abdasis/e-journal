<div>
    <div class="card shadow-md">
        <div class="card-body">
            <h3 class="card-title">
                Kumpulan Journal Terbaru
            </h3>
        </div>

        <div class="card-body">
            @foreach ($journals as $journal)
                <a href="{{ route('journal.show', $journal->slug) }}"><h4>{{ $journal->journal_title }}</h4></a>
                <p><i class="mdi mdi-account mr-1">{{ Str::lower($journal->created_by) }}</i> | <i class="mdi mdi-calendar">{{ $journal->created_at }}</i></p>
            @endforeach
        </div>
    </div>
</div>
