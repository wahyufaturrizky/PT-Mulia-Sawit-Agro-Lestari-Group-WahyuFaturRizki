<div class="row">
	<div class="col-xl-12">
		<div class="card-box">
			<!-- <h4 class="header-title m-t-0 m-b-30">Stok Barang</h4> -->

			<ul class="nav nav-pills navtab-bg nav-justified pull-in ">
				<li class="nav-item">
					<a id="list" href="#index" data-toggle="tab" aria-expanded="false" class="nav-link active">
						<i class="fi-monitor mr-2"></i> Lihat Data Stok Barang
					</a>
				</li>
				<li class="nav-item">
					<a id="form" href="#input" data-toggle="tab" aria-expanded="true" class="nav-link">
						<i class="fi-head mr-2"></i> Input Data Stok Barang
					</a>
				</li>

			</ul>
			<div class="tab-content">
				<div class="tab-pane show active" id="index">

					<table class="table table-bordered table-hover" id="tbl1">
						<thead>
							<tr>
								<th>ID</th>
								<th>Account</th>
								<th>Nama Barang</th>
								<th>SAt</th>
								<th>Saldo Awal</th>
								<th>Qty Masuk (LPB)</th>
								<th>Qty Keluar (BKB)</th>
								<th>Saldo Akhir</th>
								<th width="10%">Action</th>
							</tr>
						</thead>
						<tbody>

						</tbody>
					</table>
				</div>
				<div class="tab-pane" id="input">
					<div class="card-box">
						<h4 class="m-t-0 header-title">Input Stok Barang</h4>
						<hr>
						<div class="row">
							<div class="col-12">
								<div class="p-20">
									<form class="form-horizontal" role="form" id="form1" enctype="multipart/form-data">

										<div class="form-group row">
											<label class="col-2 col-form-label">ID</label>
											<div class="col-10">
												<input type="text" id="id" readonly="" class="form-control" placeholder="Auto Generate">
											</div>
										</div>

										<div class="form-group row">
											<label class="col-2 col-form-label">Account *</label>
											<div class="col-10">
												<input required="" id="i_account" name="account" type="text" class="form-control" placeholder="Silahkan isi dengan account contoh:102505990000001">
											</div>
										</div>

										<div class="form-group row">
											<label class="col-2 col-form-label">Nama Barang *</label>
											<div class="col-10">
												<input type="text" name="nama_barang" id="i_nama_barang" class="form-control" placeholder="Silahkan isi nama barang...">
											</div>
										</div>

										<div class="form-group row">
											<label class="col-2 col-form-label">Input Select</label>
											<div class="col-10">
												<select class="form-control" name="sat" id="i_sat">
													<option>Silahkan pilih sat dibawah ini</option>
													<option value="UNIT">UNIT</option>
													<option value="UNIT">PCS</option>
													<option value="SET">SET</option>
													<option value="BTL">BTL</option>
												</select>
											</div>
										</div>

										<div class="form-group row">
											<label class="col-2 col-form-label">Saldo Awal *</label>
											<div class="col-10">
												<input type="number" name="saldo_awal" id="i_saldo_awal" class="form-control" placeholder="Silahkan isi saldo awal...">
											</div>
										</div>

										<div class="form-group row">
											<label class="col-2 col-form-label">Qty Masuk (LPB) *</label>
											<div class="col-10">
												<input type="number" name="qty_masuk" id="i_qty_masuk" class="form-control" placeholder="Silahkan isi qty masuk (LBP)">
											</div>
										</div>

										<div class="form-group row">
											<label class="col-2 col-form-label">Qty Keluar (BKB) *</label>
											<div class="col-10">
												<input type="number" name="qty_keluar" id="i_qty_keluar" class="form-control" placeholder="Silahkan isi qty keluar (BKB)">
											</div>
										</div>

										<div class="form-group row">
											<label class="col-2 col-form-label">Saldo akhir *</label>
											<div class="col-10">
												<input type="number" name="saldo_akhir" id="i_saldo_akhir" class="form-control" placeholder="Silahkan isi saldo akhir">
											</div>
										</div>

										<hr>

										<div class="col-4 offset-8">
											<div class="pull-right">
												<button type="submit" id="btn-submit" class="btn btn-success">
													<i class="fa fa-save"></i> Simpan
												</button>

												<button onclick="edit_process()" style="display:none;" type="button" id="btn-edit"
													class="btn btn-info">
													<i class="fa fa-pencil"></i> Simpan Perubahan
												</button>

												<button id="btn-cancel" type="button" class="btn btn-danger">
													<i class="fa fa-times"></i> Cancel
												</button>

											</div>

										</div>
									</form>
								</div>
							</div>

						</div>
						<!-- end row -->

					</div>
				</div>

			</div>
		</div>
	</div>
</div>

<?php $this->load->view('back/stok_barang/js_stok_barang') ?>