<?php
include './fetch.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Image Upload</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-blue-100 flex items-center justify-center min-h-screen">

  <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
    <h2 class="text-2xl font-bold mb-6 text-gray-800 text-center">Upload Image</h2>
 

    <form action="./index.php" method="POST" enctype="multipart/form-data" class="space-y-6">

      <!-- Image File Input -->
      <div>
        <label for="image" class="block text-sm font-medium text-gray-700 mb-2">Choose an image</label>
     
        <input type="file" name="image" id="image" accept="image/*" required
          class="block w-full text-sm text-gray-600
                      file:mr-4 file:py-2 file:px-4
                      file:rounded-md file:border-0
                      file:text-sm file:font-semibold
                      file:bg-blue-50 file:text-blue-700
                      hover:file:bg-blue-100">
       
      </div>

      <!-- Submit Button -->
      <div>
        <button type="submit" name='submit'
          class="w-full bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded-lg font-semibold transition duration-300">
          Upload
        </button>
      </div>
    </form>
   
 
  </div>



  <div class="max-w-4xl mx-auto mt-10">
    <h3 class="text-xl font-semibold mb-4 text-center">Uploaded Images</h3>
    <div class="flex flex-wrap justify-center gap-4">
      <?php if (!empty($data)): ?>
        <?php foreach ($data as $img): ?>
          <img src="./upload/<?= htmlspecialchars($img['image']) ?>" alt="Uploaded" class="w-40 h-40 object-cover rounded shadow">
        <?php endforeach; ?>
      <?php else: ?>
        <p class="text-gray-600 text-center w-full">No images uploaded yet.</p>
      <?php endif; ?>
    </div>
  </div>


</body>

</html>