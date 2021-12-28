@if($pasien->count())
      <table class="table table-striped mt-3">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Lengkap</th>
            <th scope="col">Email</th>
            <th scope="col">Tanggal Janjian</th>
            <th scope="col">No Handphone</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
            <th scope="col">Confirm</th>
          </tr>
        </thead>
        <tbody>
          @foreach($pasien as $p)

          {{-- Modal Message dari User --}}
          <div id="msgModal{{ $p->id }}" class="modal fade" role="dialog">
            <div class="modal-dialog">
    
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">{{ $p->name }}</h4>
                    </div>
                    <div class="modal-body">
                        <p>{{ $p->message }}</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
          </div>

          {{-- Modal Edit Form --}}
          <div class="modal fade" id="form{{ $p->id }}" tabindex="-1" role="dialog" >
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header border-bottom-0">
                  <h5 class="modal-title font-weight-bolder" id="editLabel">Edit Data Pasien</h5>
                  <button type="button" class="close" data-dismiss="modal" >
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form action="{{ url('admin-dashboard/update', $p->id) }}" method="POST">
                  @csrf
                  <div class="modal-body">

                    <div class="form-group">
                      <label for="name">Nama</label>
                      <input type="text" name="name" class="form-control" value="{{ $p->name }}">
                    </div>
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="text" name="email" class="form-control"  value="{{ $p->email }}">
                    </div>
                    <div class="form-group">
                      <label for="janji">Tanggal Janjian</label>
                      <input type="date" name="date" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="nohp">No Handphone</label>
                      <input type="text" name="nohp" class="form-control"  value="{{ $p->no_hp }}">
                    </div>
                    <input type="hidden" class="form-control" name="status" id="status" value="{{ $p->status }}" >
                    <input type="hidden" class="form-control" name="msg" id="msg" value="{{ $p->message }}" >

                    <div class="modal-footer">
                      <input type="submit" value="Submit" class="btn btn-primary">
                  </div>
                </form>
              </div>
            </div>
          </div>

          <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $p->name }}</td>
            <td>{{ $p->email }}</td>
            <td>{{ $p->tgl_janjian }}</td>
            <td>{{ $p->no_hp }}</td>
            <td>{{ $p->status }}</td>
            <td>
              <a data-toggle="modal" data-target="#msgModal{{ $p->id }}" class="btn btn-primary" href="{{ url('admin-dashboard/showkeluhan', $p->id) }}">
                <i class="bi-eye"></i>
              </a>
              <a data-toggle="modal" data-target="#form{{ $p->id }}" class="btn btn-warning" href="{{ url('admin-dashboard/update', $p->id) }}">
                <i class="bi-pencil"></i>
              </a>
              <a class="btn btn-danger" href="{{ url('admin-dashboard/delete', $p->id) }}"  onclick="return confirm('Apakah anda yakin?')"><i class="bi bi-trash"></i></a>
            </td>
            <td>
              <a class="btn btn-info" href="{{ url('admin-dashboard/progress', $p->id) }}">
                <i class="bi bi-check2"></i>
              </a>
              <a class="btn btn-success" href="{{ url('admin-dashboard/complete', $p->id) }}">
                <i class="bi bi-check2-circle"></i>
              </a>
              <a class="btn btn-warning" href="{{ url('admin-dashboard/cancel', $p->id) }}">
                <i class="bi bi-x-lg"></i>
              </a>
            </td>
          </tr>
          @endforeach
          </tbody>
        </table>
        {{ $pasien->links() }}
          @else
            <p class="text-center text-xl mt-5">
              Pasien tidak ditemukan <br>
              <small class="text-primary">
                <a href="{{ url('admin-dashboard') }}">Kembali ke daftar list</a>
              </small>
            </p>
          </tbody>
        </table>
        @endif