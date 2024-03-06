<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Short url</th>
        <th scope="col">Allow\Visited</th>
        <th scope="col">Best before</th>
    </tr>
    </thead>
    <tbody>
    @foreach($shortUrls as $url)
        <tr>
            <th scope="row">{{ $url->id }}</th>
            <td>{{ $url->short_url }}</td>
            @if( $url->allow_visit == 0)
                <td>Unlimited</td>
            @else
                <td>{{ $url->allow_visit }} \ {{$url->visits->count()}}</td>
            @endif
            <td>{{ $url->disabled_at }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
