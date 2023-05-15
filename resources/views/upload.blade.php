<x-layout>
  <div class="card text-center">
    <div class="card-header">
    </div>
    <div class="card-body">
      <h5 class="card-title">Upload CSV</h5>
      <form action="/upload" method ="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="csv" required>
        @error('csv')
        <p class="alert alert-small alert-danger">{{$message}}</p>
        @enderror
    </div>
    <div class="card-footer text-muted">
      <button class="btn btn-primary"> Upload</button>
    </div>
  </div>
</x-layout>