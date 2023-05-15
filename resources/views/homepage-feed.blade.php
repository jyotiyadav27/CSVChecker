<x-layout>
  <div class="container py-md-5 container--narrow">
      <div class="text-center">
        <h2>Hello <strong>{{auth()->user()->username}}</strong></h2>

        <div class="row">
          <div class="col-sm-6">
            <div class="card mt-5">
              <div class="card-body">
                <h5 class="card-title">E-Books</h5>
                
                <a href="{{ route('download', ['file' => 'DB_Schema.png']) }}" class="btn btn-primary">Download File</a>
                <a href="/upload" class="btn btn-primary">Upload CSV</a>
               
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="card mt-5">
              <div class="card-body">
                <h5 class="card-title">E-Journals</h5>
                <a href="{{ route('download', ['file' => 'DB_Schema.png']) }}" class="btn btn-primary">Download File</a>
                <a href="#" class="btn btn-primary">Upload CSV</a>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <div class="card mt-5">
              <div class="card-body">
                <h5 class="card-title">Standardst</h5>
                <a href="{{ route('download', ['file' => 'DB_Schema.png']) }}" class="btn btn-primary">Download File</a>
                <a href="#" class="btn btn-primary">Upload CSV</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="card mt-5">
              <div class="card-body">
                <h5 class="card-title">Reports</h5>
                <a href="{{ route('download', ['file' => 'DB_Schema.png']) }}" class="btn btn-primary">Download File</a>
                <a href="#" class="btn btn-primary">Upload CSV</a>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <div class="card mt-5">
              <div class="card-body">
                <h5 class="card-title">IEEE Conf</h5>
                <a href="{{ route('download', ['file' => 'DB_Schema.png']) }}" class="btn btn-primary">Download File</a>
                <a href="#" class="btn btn-primary">Upload CSV</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="card mt-5">
              <div class="card-body">
                <h5 class="card-title">Others</h5>
                <a href="{{ route('download', ['file' => 'DB_Schema.png']) }}" class="btn btn-primary">Download File</a>
                <a href="#" class="btn btn-primary">Upload CSV</a>
              </div>
            </div>
          </div>
        </div>
</x-layout>