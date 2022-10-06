<div class="modal fade activity" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content p-4">
            <div class="modal-header">
                <h2 class="modal-title fw-bolder">Activity</h2>
                <nav aria-label="...">
                  <ul class="pagination">
                    <li class="page-item disabled">
                      <a class="page-link">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active" aria-current="page">
                      <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                      <a class="page-link" href="#">Next</a>
                    </li>
                  </ul>
                </nav>
            </div>
            <div class="modal-body px-4">
                @for ($i = 0; $i < 4; $i++)
                    <div class="row bg-darker-light rounded mb-3 py-1">
                        <div class="col-3">
                            <h6>1 Desember 2022</h6>
                        </div>
                        <div class="col">
                            <p class="fw-bolder text-body m-0">Rekapitulasi Bulan November</p>
                            <p class="text-grey m-0">Google .inc</p>
                        </div>
                    </div>
                @endfor
                <button class="mx-auto d-block btn border font-weight-bold text-body rounded">
                    Load More
                </button>
            </div>
            <div class="modal-footer d-block">
              <div class="row">
                <div class="col">
                  <button type="button" class="btn rounded background-main">Cetak</button>
                </div>
              </div>
              <div class="row mx-0 mt-3">
                <div class="col p-0">
                  <button type="button" class="btn rounded btn-danger" data-dismiss="modal">Cancel</button>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>
