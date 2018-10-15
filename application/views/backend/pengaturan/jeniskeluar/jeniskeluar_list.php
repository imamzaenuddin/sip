<div class="hr hr-18 dotted hr-double"></div>
<div class="row">
			<div class="col-xs-12">
				<div class="clearfix">
					<div class="pull-right tableTools-container"></div>
					<a type="button" class="btn btn-sm btn-primary" href="<?=base_URL()?>pengaturan/jeniskeluarform"> <i class="ace-icon fa fa-check bigger-110"></i>
						Tambah </a>
					</button>

				</div>
				<div class="table-header">
					Data List Menu
				</div>
				<div>
					<table id="dynamic-table" class="table table-striped table-bordered table-hover">
						<thead>
							<tr>
								<th class="center">
									<label class="pos-rel">
										<input type="checkbox" class="ace" />
										<span class="lbl"></span>
									</label>
								</th>
								<th>Nama</th>
								<th></th>
								<th>NA</th>
								<th></th>
								<th></th>
								<th>Aksi</th>
							</tr>
						</thead>
				<tbody> 
				<?php
                	$no = 1;
                	$data = $this->m_crud->getAll('m_jeniskeluar');
                	foreach ($data->result_array() as $row){
               	?>
					<tr>
						<td class="center">
							<label class="pos-rel">
								<input type="checkbox" class="ace" value="<?php $row['JenisKeluarID'] ?>" />
								<span class="lbl"></span>
							</label>
						</td>
						<td><a href="#"><?=$row['Nama'] ?></a></td>
						<td></td>
						<?php
						$NA = ($row['NA']=='N')? '<span class="label label-sm label-info arrowed arrowed-righ">Aktif</span>' :'<span class="label label-sm label-warning">Non Aktif</span>';
						?>
						<td><?=$NA ?></td>
						<td></td>
						<td></td>					
						<td>
							<div class="hidden-sm hidden-xs action-buttons">
								<a class="blue" href="#">
									<i class="ace-icon fa fa-search-plus bigger-130"></i>
								</a>

								<a class="green" href="#">
									<i class="ace-icon fa fa-pencil bigger-130"></i>
								</a>

								<a class="red" href="#">
									<i class="ace-icon fa fa-trash-o bigger-130"></i>
								</a>
							</div>

							<div class="hidden-md hidden-lg">
								<div class="inline pos-rel">
									<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
										<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
									</button>

									<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
										<li>
											<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
												<span class="blue">
													<i class="ace-icon fa fa-search-plus bigger-120"></i>
												</span>
											</a>
										</li>

										<li>
											<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
												<span class="green">
													<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
												</span>
											</a>
										</li>

										<li>
											<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
												<span class="red">
													<i class="ace-icon fa fa-trash-o bigger-120"></i>
												</span>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</td>
					</tr>

				<?php $no++; } ?>	
				</tbody>
			</table>
		</div>
	</div>
</div>

	<div id="modal-table" class="modal fade" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header no-padding">
					<div class="table-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
							<span class="white">&times;</span>
						</button>
						Results for "Latest Registered Domains
					</div>
				</div>

				<div class="modal-body no-padding">
					<table class="table table-striped table-bordered table-hover no-margin-bottom no-border-top">
						<thead>
							<tr>
								<th>Domain</th>
								<th>Price</th>
								<th>Clicks</th>

								<th>
									<i class="ace-icon fa fa-clock-o bigger-110"></i>
									Update
								</th>
							</tr>
						</thead>

						<tbody>
							<tr>
								<td>
									<a href="#">ace.com</a>
								</td>
								<td>$45</td>
								<td>3,330</td>
								<td>Feb 12</td>
							</tr>

							<tr>
								<td>
									<a href="#">base.com</a>
								</td>
								<td>$35</td>
								<td>2,595</td>
								<td>Feb 18</td>
							</tr>

							<tr>
								<td>
									<a href="#">max.com</a>
								</td>
								<td>$60</td>
								<td>4,400</td>
								<td>Mar 11</td>
							</tr>

							<tr>
								<td>
									<a href="#">best.com</a>
								</td>
								<td>$75</td>
								<td>6,500</td>
								<td>Apr 03</td>
							</tr>

							<tr>
								<td>
									<a href="#">pro.com</a>
								</td>
								<td>$55</td>
								<td>4,250</td>
								<td>Jan 21</td>
							</tr>
						</tbody>
					</table>
				</div>

				<div class="modal-footer no-margin-top">
					<button class="btn btn-sm btn-danger pull-left" data-dismiss="modal">
						<i class="ace-icon fa fa-times"></i>
						Close
					</button>

					<ul class="pagination pull-right no-margin">
						<li class="prev disabled">
							<a href="#">
								<i class="ace-icon fa fa-angle-double-left"></i>
							</a>
						</li>

						<li class="active">
							<a href="#">1</a>
						</li>

						<li>
							<a href="#">2</a>
						</li>

						<li>
							<a href="#">3</a>
						</li>

						<li class="next">
							<a href="#">
								<i class="ace-icon fa fa-angle-double-right"></i>
							</a>
						</li>
					</ul>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->