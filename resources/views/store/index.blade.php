<x-App>
    <x-slot:title>{{ $title }}</x-slot:title>

    @if(session('success'))
        <div class="alert alert-success mt-4" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="card shadow border-0 rounded-4 p-4 mt-4 bg-white">
        <h3 class="fw-bold text-success">🌿 Daftar Store</h3>
        <p class="text-muted mb-4">Kelola semua toko UMKM kamu di sini</p>

        <a class="btn btn-success mb-3 px-4 rounded-3" href="{{ route('store.create') }}" role="button">+ Create Store</a>

        <div class="table-responsive">
            <table class="table table-bordered table-striped align-middle">
                <thead>
                    <tr class="table-success">
                        <th scope="col">#</th>
                        <th scope="col">Name Store</th>
                        <th scope="col">Owner</th>
                        <th scope="col">Category</th>
                        <th scope="col">Addres</th>
                        <th scope="col" style="min-width: 140px; white-space: nowrap;">Omset</th>
                        <th scope="col" style="min-width: 210px; white-space: nowrap;">Action</th>
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
                        <td style="white-space: nowrap;">Rp {{ number_format($store->omset, 0, ',', '.') }}</td>
                    <td>
                        <div class="d-flex gap-1">
                            <a href="{{ route('store.edit', $store->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <a href="{{ route('store.show', $store->id) }}" class="btn btn-success btn-sm">Detail</a>
                            <a href="{{ route('store.destroy', $store->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</a>
                        </div>
    </div>
                    </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</x-App>