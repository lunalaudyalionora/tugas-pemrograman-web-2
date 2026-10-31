<x-App>
    <x-slot:title>{{ $title }}</x-slot>

    <a class="btn btn-success" href="{{ route('store.create') }}" role="button">Create Store</a>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Name Store</th>
        <th scope="col">Owner</th>
        <th scope="col">Category</th>
        <th scope="col">Addres</th>
        <th scope="col">Omset</th>
        <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($stores as $store)
            
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $store->name }}</td>
            <td>{{ $store->owner }}</td>
            <td>{{ $store->category }}</td>
            <td>{{ $store->address }}</td>
            <td>{{ $store->omset }}</td>
            <td><td><a href="{{ route('store.show', $store->id) }}" class="btn btn-success btn-sm">
                <i class="bi bi-file-earmark-text"></i> Detail
</a>
</td></td>
        </tr>
        @endforeach
    </tbody>
</table>
</x-App>