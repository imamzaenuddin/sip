<div class="hr hr-18 dotted hr-double"></div>
<div class="row">
			<div class="col-xs-12">
				<div class="clearfix">
					<div class="pull-right tableTools-container"></div>
					<button class="btn btn-sm btn-primary" type="button">
						<i class="ace-icon fa fa-check bigger-110"></i>
						Tambah
					</button>

				</div>
				<div class="table-header">
					Data List Web
				</div>
				<div>
					<table id="dynamic-table" class="table table-striped table-bordered table-hover">
						<thead>
							<tr>								
								<th>Setting ID</th>
								<th>Kode ID</th>
								<th class="hidden-480">Website</th>
								<th class="hidden-480">Email</th>
								<th class="hidden-480">Singkatan & NamaApp</th>								                                
								<th class="hidden-480">Logo</th>
                                <th class="hidden-480">Icon</th>
                                <th class="hidden-480">Online & Token</th>
                                <th class="hidden-480">NAn</th>
								<th class="hidden-480">Aksi</th>
								<th></th>
							</tr>
						</thead>
				<tbody> 
				<?php
                	$no = 1;
                	$data = $this->m_crud->getAll('m_web');
                	foreach ($data->result_array() as $row){
               	?>
					<tr>											
						<td><a href="#"><?=$row['SettingID'] ?></a></td>
						<td><?=$row['KodeID'] ?></td>
                        <td><?=$row['Website'] ?></td>
                        <td><?=$row['Email'] ?></td>
						<td><?=$row['Singkatan'] ?> - <?=$row['NamaApp'] ?></td>
                        <td><?=$row['Logo'] ?></td>
                        <td><?=$row['Icon'] ?></td>
                        <td><?=$row['Online'] ?> - <?=$row['Token'] ?></td>						
						<?php
						$NA = ($row['NA']=='N')? '<span class="label label-sm label-info arrowed arrowed-righ">Aktif</span>' :'<span class="label label-sm label-warning">Non Aktif</span>';
						?>
						<td><?=$NA ?></td>					
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
						<td></td>
					</tr>

				<?php $no++; } ?>	
				</tbody>
			</table>
		</div>
	</div>
</div>

	