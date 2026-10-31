<x-App>
    <x-slot:title>{{ $title }}</x-slot>

    <a class="btn btn-success rounded-pill px-4 mb-3" href="{{ route('store.index') }}" role="button">← Back </a>

    <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
        <div class="p-4 text-white" style="background: #2e7d32;">
            <span class="badge bg-white text-success rounded-pill mb-2">{{ $store->category }}</span>
            <h4 class="fw-bold m-0">{{ $store->name }}</h4>
            <p class="small m-0 mt-1 text-white">Owner: {{ $store->owner }}</p>
        </div>
        <div class="card-body p-4">
            <p class="mb-2"><span class="text-muted small">Address:</span><br><span class="fw-semibold">{{ $store->address ?? $store->addres }}</span></p>
            <p class="mb-2"><span class="text-muted small">Owner:</span><br><span class="fw-semibold">{{ $store->owner }}</span></p>
            <p class="mb-0"><span class="text-muted small">Omset:</span><br><span class="fw-bold text-success">Rp {{ number_format($store->omset, 0, ',', '.') }}</span></p>
        </div>
    </div>

</x-App>