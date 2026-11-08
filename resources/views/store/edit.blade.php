<x-App>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="col-md-8 col-lg-6 mx-auto mt-4">
        <div class="card shadow border-0 rounded-4 p-4 bg-white">
            <h3 class="fw-bold text-success">✨ Tambah Store Baru</h3>
            <p class="text-muted mb-4">Lengkapi data toko UMKM kamu di bawah ini</p>

        <form action="/store/{{ $store->id }}/update" method="POST">
    @csrf
    @method('PUT')
                <div class="mb-3">
                    <label class="form-label">Name Store</label>
                    <input type="text" name="name" value="{{ old('name',$store->name) }}" class="form-control rounded-3 py-2 @error('name') is-invalid @enderror" placeholder="Contoh: Toko Kue Luna">
                    @error('name')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Owner</label>
                    <input type="text" name="owner" value="{{ old('owner',$store->owner) }}" class="form-control rounded-3 py-2 @error('owner') is-invalid @enderror" placeholder="Nama pemilik toko">
                    @error('owner')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Category</label>
                    <input type="text" name="category" value="{{ old('category',$store->category) }}" class="form-control rounded-3 py-2 @error('category') is-invalid @enderror" placeholder="Contoh: Kuliner, Fashion">
                    @error('category')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Address</label>
                    <input type="text" name="address" value="{{ old('address',$store->address) }}" class="form-control rounded-3 py-2 @error('address') is-invalid @enderror" placeholder="Alamat lengkap toko">
                    @error('address')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="form-label">Omset</label>
                    <input type="number" name="omset" value="{{ old('omset',$store->omset) }}" class="form-control rounded-3 py-2 @error('omset') is-invalid @enderror" placeholder="Contoh: 25000000">
                    @error('omset')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="d-flex gap-2">
                    <a href="{{ route('store.index') }}" class="btn btn-warning px-4 rounded-3">Back</a>
                    <button type="submit" class="btn btn-success px-4 rounded-3">Submit</button>
                </div>
            </form>
        </div>
    </div>
</x-App>