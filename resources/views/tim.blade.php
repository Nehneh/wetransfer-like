
      
      <?php
         echo Form::open(array('url' => 'wetransfer/uploads','files'=>'true'));
         echo 'Select the file to upload.';
         echo Form::file('image');
         echo Form::submit('Upload File');
         echo Form::close();
      ?>
   
