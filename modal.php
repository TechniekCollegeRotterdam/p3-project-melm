<div class="modal fade" id="modal-delete-<?= $product['idproduct'] ?>">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title"><i class="fa fa-trash"></i>delete</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
						                 </button>
									</div>
									<div class="modal-body">
										<p>Do you want to delete <strong><?= $product['prodname'] ?></strong>?</p>
									</div>
									<div class="modal-footer">
										<a href="delete.php?idproduct=<?= $product['idproduct'] ?>" class="btn btn-outline-success">save changes</a>
										<button type="button" class="btn btn-outline-secondary" data-dismiss="modal">close</button>
									</div>
								</div>
							</div>
						</div>