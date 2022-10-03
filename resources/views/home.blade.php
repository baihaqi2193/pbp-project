@extends('partial.main')

@section('content')

<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 mb-4">
            <div class="card">
                <div class="card-header text-center">
                    BAIHAQI STORE
                    <div class="row">
                        <div class="col-4 col-sm-9 pr-0">
                            <ul class="pl-0 small" style="list-style: none">
                                <li>Nota:</li>
                                <li>Kasir:</li>
                            </ul>
                        </div>
                        <div class="col-4 col-sm-3 pl-0">
                            <ul class="pl-0 small" style="list-style: none">
                                <li>Tanggal:</li>
                                <li>Waktu:</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <hr class="mt-0">
                    <div class="row">
                    <div class="col-5 pr-0">
                        <span><b>Nama Barang</b></span>
                    </div>
                    <div class="col-1 px-0 text-center">
                        <span><b>Qty</b></span>
                    </div>
                    <div class="col-3 px-0 text-right">
                        <span><b>Harga</b></span>
                    </div>
                    <div class="col-3 pl-0 text-right">
                        <span><b>Subtotal</b></span>
                    </div>
                    <div class="col-12">
                        <hr class="mt-2">
                    </div>
                    <div class="col-5 pr-0">
                        <span class="text-dark">nama_barang</span>
                    </div>
                    <div class="col-1 px-0 text-center">
                        <span>quantity</span>
                    </div>
                    <div class="col-3 px-0 text-right">
                        <span>harga_barang</span>
                    </div>
                    <div class="col-3 pl-0 text-right">
                        <span>subtotal</span>
                    </div>
                    <div class="col-12">
                        <hr class="mt-2">
                        <ul class="list-group border-0">
                            <li class="list-group-item p-0 border-0 d-flex justify-content-between align-items-center">
                            <b>Total</b>
                            <span><b>tot_bayar</b></span>
                            </li>
                            <li class="list-group-item p-0 border-0 d-flex justify-content-between align-items-center">
                            <b>Bayar</b>
                            <span><b>bayar</b></span>
                            </li>
                            <li class="list-group-item p-0 border-0 d-flex justify-content-between align-items-center">
                            <b>Kembalian</b>
                            <span><b>kembalian</b></span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-sm-12 mt-3 text-center">
                    <p>TERIMA KASIH TELAH BERBELANJA</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-header">
                    Pilih Barang
                </div>
                <div class="card-body">
                    <form>
                        <input type="hidden" name="item_id">

                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" class="form-control" name="item_name" placeholder="Pilih barang..." disabled required>
                                <div class="input-group-append">
                                    <button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#pilihBarang">Pilih</button>
                                </div>
                            </div>

                            <div class="modal fade" id="pilihBarang">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Pilih Barang</h5>
                                            <button type="button" class="close" data-dismiss="modal">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>

                                        <div class="modal-body">
                                            <table class="table table-stripped">
                                                <thead class="thead-dark">
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Nama Barang</th>
                                                        <th scope="col">Kategori</th>
                                                        <th scope="col">Deskripsi</th>
                                                        <th scope="col">Harga</th>
                                                        <th scope="col">Stok</th>
                                                        <th scope="col">Opsi</th>
                                                    </tr>
                                                </thead></tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <input type="number" min="1" value="1" class="form-control" name="quantity" placeholder="Masukkan jumlah..." required>
                                <div class="input-group-append">
                                    <span class="input-group-text">Unit</span>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary float-right">Tambah</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-8 mb-4">
            <div class="card">
                <div class="card-header">
                    Pembayaran
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Total Harga</label>

                            <div class="input-group col-sm-10">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Rp</span>
                                </div>
                                <input type="number" class="form-control" name="total" placeholder="0" disabled required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Jumlah Bayar</label>

                            <div class="input-group col-sm-10">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Rp</span>
                                </div>
                                <input type="number" class="form-control" name="pay-total" placeholder="0" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Tanggal</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="date" value="{{ date('d F Y') }}" disabled>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary float-right">Bayar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

    <table class="table table-stripped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">Kategori</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Harga</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Subtotal</th>
            </tr>
        </thead></tbody>
    </table>
</div>
</body>
@endsection
