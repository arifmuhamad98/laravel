<form class="form" method="post" action="" role="form">
              <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
              <div class="form-group">
                <p>Nama: <input type="text" name="name" > </p>
				<p>Email: <input type="text" name="email" > </p>
				<p>Pekerjaan: <input type="text" name="occupation"> </p>
  			 
              </div>
              <div class="form-group">
                 <button type="submit" name="comment" class="btn btn-primary">Simpan Data Konsumen</button>
              </div>
            </form><?php /**PATH E:\project laravel\coba\resources\views/create_customer.blade.php ENDPATH**/ ?>