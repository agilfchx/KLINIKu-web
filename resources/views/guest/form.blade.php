<div class="page-section">
  <div class="container">
    <h1 class="text-center" id="janji">Buat Janji disini</h1>

    <form class="main-form" action="{{ url('create') }}" method="POST">
      @csrf
      <div class="row mt-5 ">
        <div class="col-12 col-sm-6 py-2">
          <input type="text" name="name" class="form-control" placeholder="Nama Lengkap" required>
        </div>
        <div class="col-12 col-sm-6 py-2">
          <input type="text" name="email" class="form-control" placeholder="Email">
        </div>
        <div class="col-12 py-2">
          <label for="janji">Tanggal Janjian</label>
          <input type="date" name="date" class="form-control" required>
        </div>
        <div class="col-12 py-2 ">
          <input type="text" name="nohp" class="form-control" placeholder="Nomor Telepon" required>
        </div>
        <div class="col-12 py-2">
          <textarea name="message" id="message" class="form-control" rows="6" placeholder="Keluhan yang dirasakan" required></textarea>
        </div>
      </div>

      <button type="submit" class="btn btn-success mt-3 mb-5">Submit Request</button>
    </form>
  </div>
</div>