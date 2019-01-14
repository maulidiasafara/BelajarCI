							<table class="table table-hover" id="dataTable" width="45%" cellspacing="0">
								<thead>
									<tr>
										<th>id karyawan</th>
										<th>nama karyawan</th>
										<th>alamat</th>
										<th>telepon</th>

									</tr>
								</thead>
								<tbody>
									<?php foreach ($karyawan as $karyawan): ?>
									<tr>
										<td width="50">
											<?php echo $karyawan->id_karyawan ?>
										</td>
										<td>
											<?php echo $karyawan->nama ?>
										</td>
                    <td>
                      <?php echo $karyawan->alamat ?>
                    </td>
                    <td>
                      <?php echo $karyawan->telp ?>
                    </td>

									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
