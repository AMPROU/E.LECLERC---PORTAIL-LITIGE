<?php $__env->startSection('content'); ?>


<div class="container-fluid">
	<div class="row">
		<div class="col-md-8">
			<table class="table table-bordered table-sm">
				<thead>
					<tr>
						<th>
							N°
						</th>
						<th>
							Demande
						</th>
						<th>
							Date
						</th>
						<th>
							Status
						</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							1
						</td>
						<td>
							Litige
						</td>
						<td>
							01/04/2012
						</td>
						<td>
							Non prit en charge
						</td>
					</tr>
					<tr class="table-active">
						<td>
							1
						</td>
						<td>
                        Litige
						</td>
						<td>
							01/04/2012
						</td>
						<td>
							En cours
						</td>
					</tr>
					<tr class="table-success">
						<td>
							2
						</td>
						<td>
                        Litige
						</td>
						<td>
							02/04/2012
						</td>
						<td>
							Cloturer
						</td>
					</tr>
					<tr class="table-warning">
						<td>
							3
						</td>
						<td>
                        Litige
						</td>
						<td>
							03/04/2012
						</td>
						<td>
							En attente
						</td>
					</tr>
					<tr class="table-danger">
						<td>
							4
						</td>
						<td>
                        Litige
						</td>
						<td>
							04/04/2012
						</td>
						<td>
							En attente de votre réponse
						</td>
					</tr>
				</tbody>
			</table>

		</div>
		<div class="col-md-4">
			<blockquote class="blockquote">
				<p class="mb-0">





<h6>
Email : <?php echo e(Auth::user()->email); ?>

<br>
<?php echo e(Auth::user()->image); ?>

<br>
Password Crypt : <?php echo e(Auth::user()->password); ?>

<br>
Magasin : <?php echo e(Auth::user()->magasin); ?>

<br>
Ident : <?php echo e(Auth::user()->magasin_IDENT); ?>

<br>
Type de compte : <?php echo e(Auth::user()->TypeCompte); ?>

<br>
Droit <?php echo e(Auth::user()->Droit); ?>



<br>
Tableau magasins :  <?php echo e($magasin->nom_magasin); ?>

</h6>

			</blockquote>
		</div>
	</div>
</div>





<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>

<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/demeter.ovh/BtlecouestLaravel/resources/views/home.blade.php ENDPATH**/ ?>