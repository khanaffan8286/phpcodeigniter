<?php

defined('BASEPATH') OR exit('No direct script access allowed');

?>

<html>

<head>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-200 flex justify-center items-center">

  <div class="w-1/2 bg-gray-200">
    <?= form_open_multipart('crudcontroller/data')?>
    <div class="bg-white p-5 rounded-lg shadow-md mb-4">
      <h1 class="text-2xl font-bold text-center">Insert Data</h1>
      <input class="w-3/4 m-4 h-12 border border-gray-800 px-3 rounded-lg" placeholder="Name" id="" name="name"
        type="text">
        <?= form_error('name')?>

      <input class="w-3/4 m-4 h-12 border border-gray-800 px-3 rounded-lg" placeholder="Email" id="" name="email"
        type="email">

      <input class="w-3/4 m-4 h-12 border border-gray-800 px-3 rounded-lg" placeholder="Enter the mob num" id=""
        name="phone" type="number">

      <div class=" mt-2 justify-between items-center">

        <select class="w-3/4 m-4 h-12 border border-gray-800 px-3 rounded-lg" name="degree" id="">
          <option value="">Language</option>
          <option value="PHP">PHP</option>
          <option value="HTML">HTML</option>
          <option value="PYTHON">PYTHON</option>

        </select>

      </div>

      <div class=" mt-2 justify-between items-center">
        <label class="font-semibold text-sm text-gray-600 pb-1 block" for="fullname">Gender</label>

        <input class="" placeholder="Enter the mob num" id="" name="gender" type="checkbox"> Male

        <input class="" placeholder="Enter the mob num" id="" name="gender" type="checkbox"> Female
      </div>
      <div class=" mt-2 justify-between items-center">
        <label class="font-semibold text-sm text-gray-600 pb-1 block" for="fullname">Qualification</label>

        <input class="" placeholder="Enter the mob num" id="" name="qualification" type="checkbox"> B.E

        <input class="" placeholder="Enter the mob num" id="" name="qualification" type="checkbox"> MTech
      </div>

      <input class="w-3/4 m-4 h-12 border border-gray-800 px-3 rounded-lg" placeholder="Email" id="" name="image"
        type="file">


      <div class="  justify-between items-center">
        <button type="submit"
          class="bg-blue-600 text-white text-sm h-10 w-[130px] rounded-md font-semibold mt-5 shadow-md hover:bg-blue-700 transition duration-300 hover:scale-105">
          Submit
        </button>
      </div>
    </div>
    <?= form_close()?>
  </div>

</body>

</html>