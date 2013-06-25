					<div class="block">
						<h4>Publikasi Terbaru</h4>
						<div class="block">
						<?php if($paper_published_list): ?>	
							<ul class="paper">
							<?php foreach($paper_published_list as $paper): ?>
							<?php $paper_published_author = $this->Sipuma_model->paper_published_author($paper->paper_id); ?>				
								<li class="paper_list">
									<h5><a class="title" href="<?php echo base_url(); ?>home/paper/<?php echo $paper->paper_id; ?>"><?php echo $paper->title; ?></a></h5>		
								<?php if($paper_published_author): ?>
									<?php $category = ""; $comma = ", "; ?>
									<?php foreach ($paper_published_author as $author): ?>
										<?php $category .= $author->full_name.' ('.$author->user_id.')'; $category .= $comma;	?>
									<?php endforeach; ?>
									<?php $category = substr($category,0,-2); ?>
									<i><b>Penulis:</b> <?php echo $category; ?>
								<?php $free_user_paper = $this->Sipuma_model->free_user_paper_list($paper->paper_id); ?>
								<?php if($free_user_paper): ?>
									<?php foreach($free_user_paper as $free_user): ?>
									<?php echo ', '.$free_user->full_name; ?>	
									<?php endforeach; ?>
								<?php endif; ?>									
									</i> |
								<?php else: ?>
									<i><b>Penulis:</b> -</i> |
								<?php endif; ?>
									<i><b>Tanggal Publikasi:</b> <?php echo tgl_indo($paper->date_published); ?></i>
								</li>
							<?php endforeach; ?>
							</ul>
						<?php else: ?>
							<p>
								Tidak ada karya ilmiah yang dipublikasi
							</p>
						<?php endif; ?>
						</div>
					</div>